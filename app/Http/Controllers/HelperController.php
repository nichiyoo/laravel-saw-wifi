<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HelperController extends Controller
{
    /**
     * Redirect default path to dashboard.
     */
    public function root(Request $request): Redirect
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
