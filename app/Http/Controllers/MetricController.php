<?php

namespace App\Http\Controllers;

use App\Models\Metric;
use Illuminate\View\View;
use App\Enums\VariableType;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMetricRequest;
use App\Http\Requests\UpdateMetricRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;

class MetricController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Metric::class);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $search = $request->input('search');

        $metrics = Metric::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('variable', 'like', '%' . $search . '%');
            })
            ->paginate(8)
            ->withQueryString();

        return view('dashboard.metrics.index', [
            'metrics' => $metrics,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $used = Metric::query()->pluck('variable');
        $variables = collect(VariableType::cases());

        return view('dashboard.metrics.create', [
            'variables' => $variables->reject(function ($item) use ($used) {
                return $used->contains($item);
            }),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMetricRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        Metric::query()->create($validated);

        return redirect()
            ->route('metrics.index')
            ->with('success', 'Metric created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Metric $metric): View
    {
        return view('dashboard.metrics.show', [
            'metric' => $metric,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Metric $metric): View
    {
        $used = Metric::query()->where($metric->id)->pluck('variable');
        $variables = collect(VariableType::cases());

        return view('dashboard.metrics.edit', [
            'metric' => $metric,
            'variables' => $variables->reject(function ($item) use ($used) {
                return $used->contains($item);
            }),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMetricRequest $request, Metric $metric): RedirectResponse
    {
        $validated = $request->validated();
        $metric->update($validated);

        return redirect()
            ->route('metrics.index')
            ->with('success', 'Metric updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Metric $metric): RedirectResponse
    {
        $metric->delete();

        return redirect()
            ->route('metrics.index')
            ->with('success', 'Metric deleted successfully.');
    }
}
