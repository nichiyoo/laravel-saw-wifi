<?php

namespace Repo\SawEngine\Engine;

use Repo\SawEngine\Enums\AttributeType;
use Repo\SawEngine\ValueObjects\NormalizedRow;
use Repo\SawEngine\DataTransferObjects\CandidateData;
use Repo\SawEngine\DataTransferObjects\CriterionData;

final class Normalizer
{
    /**
     * Normalise a decision matrix into per-row NormalizedRow value objects.
     *
     * Benefit criteria: r_ij = x_ij / max(x_ij)
     * Cost criteria: r_ij = min(x_ij) / x_ij
     *
     * @param CandidateData[]  $candidates
     * @param CriterionData[]  $criteria
     * @return NormalizedRow[]
     */
    public function normalize(array $candidates, array $criteria): array
    {
        $columnStats = $this->computeColumnStats($candidates, $criteria);
        $rows = [];

        foreach ($candidates as $candidate) {
            $normalized = [];

            foreach ($criteria as $criterion) {
                $raw = $candidate->values[$criterion->key];
                $normalized[$criterion->key] = match ($criterion->type) {
                    AttributeType::BENEFIT => $raw / $columnStats[$criterion->key]['max'],
                    AttributeType::COST    => $columnStats[$criterion->key]['min'] / $raw,
                };
            }

            $rows[] = new NormalizedRow($candidate->id, $normalized);
        }

        return $rows;
    }

    /**
     * Compute the column-level min and max for every criterion across all candidates.
     *
     * @param CandidateData[] $candidates
     * @param CriterionData[] $criteria
     * @return array<string, array{min: float, max: float}>
     */
    private function computeColumnStats(array $candidates, array $criteria): array
    {
        $stats = [];

        foreach ($criteria as $criterion) {
            $values = array_map(
                fn(CandidateData $c) => $c->values[$criterion->key],
                $candidates,
            );

            $stats[$criterion->key] = [
                'min' => min($values),
                'max' => max($values),
            ];
        }

        return $stats;
    }
}
