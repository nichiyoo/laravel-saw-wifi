<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CandidateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Candidate::class);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $search = $request->input('search');

        $candidates = Candidate::query()
            ->when($search, function ($query) use ($search) {
                return $query->where('kemantren', 'like', '%' . $search . '%');
            })
            ->paginate(8)
            ->withQueryString();

        return view('dashboard.candidates.index', [
            'candidates' => $candidates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidateRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        Candidate::create($validated);

        return redirect()
            ->route('candidates.index')
            ->with('success', 'Candidate created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate): View
    {
        return view('dashboard.candidates.show', [
            'candidate' => $candidate,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate): View
    {
        return view('dashboard.candidates.edit', [
            'candidate' => $candidate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate): RedirectResponse
    {
        $validated = $request->validated();
        $candidate->update($validated);

        return redirect()
            ->route('candidates.index')
            ->with('success', 'Candidate updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate): RedirectResponse
    {
        $candidate->delete();

        return redirect()
            ->route('candidates.index')
            ->with('success', 'Candidate deleted successfully.');
    }
}
