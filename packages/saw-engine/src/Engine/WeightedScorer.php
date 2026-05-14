<?php

namespace Repo\SawEngine\Engine;

use Repo\SawEngine\ValueObjects\NormalizedRow;
use Repo\SawEngine\DataTransferObjects\CriterionData;

final class WeightedScorer
{
    /**
     * Compute the final preference value V_i for each normalised row.
     *
     * V_i = Σ (w_j * r_ij)
     *
     * @param NormalizedRow[] $rows
     * @param CriterionData[] $criteria
     * @return array<string, float>  Map of candidate ID → preference score, sorted descending.
     */
    public function score(array $rows, array $criteria): array
    {
        $weightMap = $this->buildWeightMap($criteria);
        $scores = [];

        foreach ($rows as $row) {
            $score = 0.0;
            foreach ($row->values as $key => $normalizedValue) {
                $score += $weightMap[$key] * $normalizedValue;
            }
            $scores[$row->candidateId] = round($score, 4);
        }

        arsort($scores);
        return $scores;
    }

    /**
     * Build a flat key → weight map from the criteria array.
     *
     * @param CriterionData[] $criteria
     * @return array<string, float>
     */
    private function buildWeightMap(array $criteria): array
    {
        $map = [];
        foreach ($criteria as $criterion) {
            $map[$criterion->key] = $criterion->weight;
        }
        return $map;
    }
}
