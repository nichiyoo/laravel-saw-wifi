<?php

namespace App\Http\Controllers;

use App\Models\Metric;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Repo\SawEngine\Contracts\SawEngineContract;
use Repo\SawEngine\DataTransferObjects\CandidateData;
use Repo\SawEngine\DataTransferObjects\CriterionData;

class DssController extends Controller
{
    public function __construct(
        private readonly SawEngineContract $saw,
    ) {}

    public function index(Request $request)
    {
        $metrics = Metric::all();
        $candidates = Candidate::all();

        $criteria = $metrics->map(fn($metric) => new CriterionData(
            key: $metric->variable->value,
            type: $metric->type,
            weight: (float) $metric->weight,
        ))->all();

        $candidateData = $candidates->map(fn($candidate) => new CandidateData(
            id: $candidate->id,
            values: [
                'population_density' => (float) $candidate->population_density,
                'jss_users' => (float) $candidate->jss_users,
                'wifi_count' => (float) $candidate->wifi_count,
                'self_funding' => (float) $candidate->self_funding,
            ],
        ))->all();

        $scores = $this->saw->rank($candidateData, $criteria);
        $ranked = collect($scores)
            ->map(fn($score, $id) => (object) [
                'score' => $score,
                'candidate' => $candidates->firstWhere('id', $id),
            ])
            ->values()
            ->each(fn($item, $index) => $item->rank = $index + 1);

        $count = 5;
        $page = $request->integer('page', 1);
        $paginated = new LengthAwarePaginator(
            items: $ranked->forPage($page, $count)->values(),
            total: $ranked->count(),
            perPage: $count,
            currentPage: $page,
            options: [
                'path' => $request->url(),
                'query' => $request->query()
            ],
        );

        return view('other.calculate', [
            'ranked' => $paginated,
            'criteria' => $metrics,
            'top' => $ranked->first(),
            'total' => $ranked->count(),
        ]);
    }
}
