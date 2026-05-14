<?php

namespace Repo\SawEngine\ValueObjects;

final readonly class NormalizedRow
{
    /**
     * @param string $candidateId The candidate's unique identifier.
     * @param array<string, float> $values Map of criterion key → normalised value (0–1).
     */
    public function __construct(
        public string $candidateId,
        public array  $values,
    ) {}
}
