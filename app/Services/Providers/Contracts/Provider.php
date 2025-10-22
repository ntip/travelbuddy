<?php

namespace App\Services\Providers\Contracts;

interface Provider
{
    public function name(): string;

    /** Build the payload for Oxylabs POST /v1/queries */
    public function buildRequest(array $params): array;

    /** Optional: parse Oxylabs response to normalized offers (unused for AA step 1) */
    public function parse(array $oxylabsJson, array $params): array;
}
