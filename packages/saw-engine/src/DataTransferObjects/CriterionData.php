<?php

namespace Repo\SawEngine\DataTransferObjects;

use Repo\SawEngine\Enums\AttributeType;

final readonly class CriterionData
{
    /**
     * @param string $key Unique key matching CandidateData::$values keys.
     * @param AttributeType $type Whether the criterion is a benefit or a cost.
     * @param float $weight Normalised weight (e.g. 0.25). All weights must sum to 1.
     */
    public function __construct(
        public string $key,
        public AttributeType $type,
        public float $weight,
    ) {}
}
