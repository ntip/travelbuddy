<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class VaAwardSearchCommand extends Command
{
    protected $signature = 'va:award-search
        {--origin= : IATA origin, e.g. SIN}
        {--destination= : IATA destination, e.g. BNE}
        {--date= : DD-MM-YYYY, e.g. 02-02-2026}
        {--headful : Run browser headed}
        {--timeout=120000 : Timeout in ms}
        {--proxy= : Optional proxy http://host:port}
        {--debug : Verbose Node logs}';

    protected $description = 'Headless VA award search (captures bookingAirSearch request+response to a local folder)';

    public function handle(): int
    {
        $origin = strtoupper((string)$this->option('origin'));
        $destination = strtoupper((string)$this->option('destination'));
        $date = (string)$this->option('date');

        if (!$origin || !$destination || !$date) {
            $this->error('Missing: --origin --destination --date (DD-MM-YYYY)');
            return self::FAILURE;
        }

        // Show the deep link for debugging
        $bookingUrl = "https://book.virginaustralia.com/dx/VADX/#/flight-selection"
            . "?journeyType=one-way"
            . "&awardBooking=true"
            . "&class=Economy"
            . "&ADT=1&CHD=0&INF=0"
            . "&origin={$origin}"
            . "&destination={$destination}"
            . "&date={$date}"
            . "&activeMonth={$date}"
            . "&locale=en-GB";

        $this->line('');
        $this->info('Booking URL:');
        $this->line($bookingUrl);
        $this->line('');

        // Build Node args (point to storage/app/travelbuddy by default)
        $cmd = [
            'node', base_path('scripts/va/va_award_search.cjs'),
            '--origin', $origin,
            '--destination', $destination,
            '--date', $date,
            '--out', 'storage/app/travelbuddy',
            '--timeout', (string)$this->option('timeout'),
        ];
        if ($this->option('headful')) $cmd[] = '--headful';
        if ($this->option('debug')) $cmd[] = '--debug';
        if ($proxy = $this->option('proxy')) { $cmd[] = '--proxy'; $cmd[] = $proxy; }

        $this->info('Launching headless search…');
        $process = new Process($cmd, base_path(), null, null, 180);
        $process->run();

        $stdout = trim($process->getOutput());
        $stderr = trim($process->getErrorOutput());

        if ($this->option('debug')) {
            if ($stdout) $this->line("<info>Node stdout:</info> {$stdout}");
            if ($stderr) $this->line("<comment>Node stderr:</comment> {$stderr}");
        }

        if ($process->getExitCode() !== 0) {
            $this->error('Search failed.');
            if ($stderr) $this->error($stderr);
            // Try to hint if a failure screenshot exists
            $maybeShots = [
                base_path('storage/app/travelbuddy/failure.png'),
                base_path('storage/travelbuddy/failure.png'),
            ];
            foreach ($maybeShots as $shot) {
                if (file_exists($shot)) {
                    $this->line("Screenshot saved → {$shot}");
                    break;
                }
            }
            return self::FAILURE;
        }

        // Parse Node JSON stdout for exact paths
        $out = json_decode($stdout, true);
        $outDir = $out['outDir'] ?? base_path('storage/app/travelbuddy');
        $reqPath = $out['requestPath'] ?? (rtrim($outDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'va_bookingAirSearch.request.json');
        $resPath = $out['responsePath'] ?? (rtrim($outDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'va_bookingAirSearch.response.json');

        // Short retry loop (Windows/AV often delays visibility)
        $ok = $this->waitForFiles([$reqPath, $resPath], 15, 150);
        if (!$ok) {
            $this->error("Expected JSON not found.\nLooked for:\n - {$reqPath}\n - {$resPath}");
            return self::FAILURE;
        }

        $this->info('Captured:');
        $this->line('→ ' . $reqPath);
        $this->line('→ ' . $resPath);

        // Tiny peek (safe)
        $payload = json_decode(@file_get_contents($reqPath), true) ?: [];
        $op = $payload['operationName'] ?? ($payload['extensions']['operationName'] ?? 'unknown');
        $vars = $payload['variables'] ?? [];
        $this->line('');
        $this->info('operationName: ' . $op);
        $this->line('variables: ' . json_encode($vars));

        // Mention run archive dir if present
        if (!empty($out['runDir'])) {
            $this->line('');
            $this->info('Run archive: ' . $out['runDir']);
        }

        return self::SUCCESS;
    }

    private function waitForFiles(array $paths, int $tries, int $sleepMs): bool
    {
        for ($i = 0; $i < $tries; $i++) {
            $all = true;
            foreach ($paths as $p) {
                if (!file_exists($p)) { $all = false; break; }
            }
            if ($all) return true;
            usleep($sleepMs * 1000);
        }
        return false;
    }
}
