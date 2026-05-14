<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Helpers\ArrayHelper;

class DashboardController extends Controller
{
    /**
     * Show the dashboard landing page.
     */
    public function index()
    {
        return view('other.dashboard');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        return view('other.about');
    }

    /**
     * Show the help center page.
     */
    public function help()
    {
        $faqs = ArrayHelper::collection([
            [
                'question' => 'How do I update my profile?',
                'answer' => 'You can update your profile by clicking on the Profile menu on the sidebar or by clicking on your avatar on the top right corner and selecting Profile.',
            ],
            [
                'question' => 'How do I change my password?',
                'answer' => 'You can change your password in the same profile update page by clicking on the Update Password button.',
            ],
        ]);

        return view('other.help', [
            'faqs' => $faqs,
        ]);
    }

    /**
     * Show the settings page.
     */
    public function settings()
    {
        return view('other.settings');
    }

    /**
     * Download the dataset CSV.
     */
    public function downloadDataset()
    {
        $path = base_path('dataset/yogyakarta.csv');
        return response()->download($path, 'yogyakarta.csv');
    }

    /**
     * Download the reference paper.
     */
    public function downloadPaper()
    {
        $path = base_path('dataset/paper.pdf');
        return response()->download($path, 'paper.pdf');
    }
}
