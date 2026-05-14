<?php

namespace Repo\SawEngine\Contracts;

use Repo\SawEngine\DataTransferObjects\CandidateData;
use Repo\SawEngine\DataTransferObjects\CriterionData;

interface SawEngineContract
{
    /**
     * Run the full SAW pipeline and return ranked candidate scores.
     *
     * @param CandidateData[] $candidates
     * @param CriterionData[] $criteria
     * @return array<string, float>  Map of candidate ID → preference score, sorted descending.
     */
    public function rank(array $candidates, array $criteria): array;
}
