<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class HelperController extends Controller
{
    /**
     * Redirect default path to dashboard.
     */
    public function root(Request $request): RedirectResponse
    {
        return redirect()->route('dashboard');
    }

    /**
     * Show the test page for testing.
     */
    public function test(): View
    {
        return view('test');
    }
}
