<?php $__env->startSection('content'); ?>
<div class="container">
  <h1 class="mb-2">Searching flights…</h1>
  <p id="status-line">Starting…</p>
</div>

<script>
document.addEventListener('DOMContentLoaded', async () => {
  // Safely capture the query params that landed us on this page
  const params = <?php echo json_encode(request()->query(), 15, 512) ?>;
  const qs = new URLSearchParams(params).toString();

  // Helper: update status text
  const setStatus = (t) => { const el = document.getElementById('status-line'); if (el) el.innerText = t; };

  try {
    // Kick off the server-side search
    const startResp = await fetch(`/api/search-start?${qs}`, { method: 'GET' });
    if (!startResp.ok) {
      setStatus('Failed to start search.');
      return;
    }
    const start = await startResp.json();
    if (!start.sid) {
      setStatus('No SID returned from start endpoint.');
      return;
    }
    const sid = start.sid;

    // Poll status until not queued/fetching
    async function poll() {
      try {
        const r = await fetch(`/api/search-status?sid=${encodeURIComponent(sid)}`, { method: 'GET' });
        if (!r.ok) { setStatus('Status check failed.'); return; }
        const p = await r.json();

        // Still working?
        if (p.status === 'queued' || p.status === 'fetching') {
          setStatus('Collecting results…');
          setTimeout(poll, 1200);
          return;
        }

        // partial/ready/failed → go render
        window.location = `/flights/results?sid=${encodeURIComponent(sid)}`;
      } catch (e) {
        setStatus('Network error during polling. Retrying…');
        setTimeout(poll, 1500);
      }
    }

    setStatus('Collecting results…');
    setTimeout(poll, 800);
  } catch (e) {
    setStatus('Unexpected error starting search.');
  }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nickt\OneDrive\Documents\GitHub\travelbuddy\resources\views/travelbuddy/flights/status.blade.php ENDPATH**/ ?>