<?php

namespace Repo\SawEngine\Engine;

use InvalidArgumentException;
use Repo\SawEngine\Contracts\SawEngineContract;
use Repo\SawEngine\DataTransferObjects\CandidateData;
use Repo\SawEngine\DataTransferObjects\CriterionData;

final class SawEngine implements SawEngineContract
{
    public function __construct(
        private readonly Normalizer $normalizer,
        private readonly WeightedScorer $scorer,
    ) {}

    /**
     * Run the full SAW pipeline: validate → normalise → score → rank.
     *
     * @param CandidateData[] $candidates
     * @param CriterionData[] $criteria
     * @return array<string, float> Map of candidate ID → preference score, sorted descending.
     *
     * @throws InvalidArgumentException
     */
    public function rank(array $candidates, array $criteria): array
    {
        $this->validate($candidates, $criteria);
        $normalizedRows = $this->normalizer->normalize($candidates, $criteria);
        return $this->scorer->score($normalizedRows, $criteria);
    }

    /**
     * Validate that inputs are non-empty and every candidate carries all criterion keys.
     *
     * @param CandidateData[] $candidates
     * @param CriterionData[] $criteria
     *
     * @throws InvalidArgumentException
     */
    private function validate(array $candidates, array $criteria): void
    {
        if (empty($candidates)) throw new InvalidArgumentException('At least one candidate is required.');
        if (empty($criteria)) throw new InvalidArgumentException('At least one criterion is required.');
        $criterionKeys = array_map(fn(CriterionData $c) => $c->key, $criteria);

        foreach ($candidates as $candidate) {
            foreach ($criterionKeys as $key) {
                if (!array_key_exists($key, $candidate->values)) {
                    throw new InvalidArgumentException(
                        "Candidate [{$candidate->id}] is missing value for criterion key [{$key}]."
                    );
                }
            }
        }
    }
}
