<?php

namespace Repo\SawEngine\DataTransferObjects;

final readonly class CandidateData
{
    /**
     * @param string $id Any unique identifier (e.g. ULID, name).
     * @param array<string, float> $values Map of criterion key → raw numeric value.
     */
    public function __construct(
        public string $id,
        public array  $values,
    ) {}
}
