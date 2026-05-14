<?php

namespace App\Http\Controllers;

use App\Models\Metric;
use App\Models\Candidate;
use App\Helpers\ArrayHelper;

class DashboardController extends Controller
{
    public static function formatCurrency(int|float $amount): string
    {
        return match (true) {
            $amount >= 1_000_000_000 => 'Rp' . number_format($amount / 1_000_000_000, 1) . 'B',
            $amount >= 1_000_000 => 'Rp' . number_format($amount / 1_000_000, 1) . 'M',
            $amount >= 1_000 => 'Rp' . number_format($amount / 1_000, 1) . 'K',
            default => 'Rp' . number_format($amount),
        };
    }
    /**
     * Show the dashboard landing page.
     */
    public function index()
    {
        $widgets = ArrayHelper::collection([
            (object) [
                'show' => true,
                'value' => Candidate::count(),
                'icon' => 'map',
                'label' => 'Kemantren',
                'description' => 'Total districts in Yogyakarta',
            ],
            (object) [
                'show' => true,
                'value' => number_format(Candidate::sum('jss_users')),
                'icon' => 'users',
                'label' => 'JSS Users',
                'description' => 'Total JSS Wi-Fi users',
            ],
            (object) [
                'show' => true,
                'value' => number_format(Candidate::sum('wifi_count')),
                'icon' => 'wifi',
                'label' => 'WiFi Points',
                'description' => 'Total active access points',
            ],
            (object) [
                'show' => true,
                'value' => self::formatCurrency(Candidate::sum('self_funding')),
                'icon' => 'wallet',
                'label' => 'Self Funding',
                'description' => 'Total community self-funding',
            ],
        ]);

        $chart = Candidate::query()->orderBy('kemantren')->get()->map(fn($c) => [
            'label' => $c->kemantren,
            'jss_users' => $c->jss_users,
            'wifi_count' => $c->wifi_count,
            'population_density' => $c->population_density,
            'self_funding' => round($c->self_funding / 1_000_000, 1),
        ]);

        return view('other.dashboard', [
            'widgets' => $widgets,
            'chart' => $chart,
        ]);
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $metrics = Metric::all();

        return view('other.about', [
            'metrics' => $metrics,
        ]);
    }

    /**
     * Show the help center page.
     */
    public function help()
    {
        $faqs = ArrayHelper::collection([
            [
                'question' => 'What is this application for?',
                'answer' => 'This is a Decision Support System (DSS) that ranks Yogyakarta\'s 14 kemantren (districts) by priority for new JSS free Wi-Fi access point placement. It uses the Simple Additive Weighting (SAW) method to score each district based on weighted criteria.',
            ],
            [
                'question' => 'How is the ranking calculated?',
                'answer' => 'Each candidate (district) is scored by normalising its raw criteria values to a 0–1 scale, multiplying each by its assigned weight, and summing them into a final preference score. Benefit criteria (higher is better) are divided by the column maximum; cost criteria (lower is better) use the column minimum divided by the value. The candidate with the highest total score ranks first.',
            ],
            [
                'question' => 'What criteria are used?',
                'answer' => 'Four criteria are evaluated: population density (benefit, 15%), number of JSS Wi-Fi users (benefit, 25%), number of active access points (cost, 35%), and community self-funding (cost, 25%). These weights can be adjusted from the Metrics page.',
            ],
            [
                'question' => 'Can I change the criteria weights?',
                'answer' => 'Yes. Navigate to the Metrics page, edit any metric, and update its weight. After saving, re-run the calculation on the DSS Calculation page to see the updated ranking.',
            ],
            [
                'question' => 'How do I add or update candidate data?',
                'answer' => 'Candidate data can be managed from the Candidates page. You can add new districts, edit existing ones, or delete outdated entries. The dataset can also be downloaded as CSV from the About page.',
            ],
            [
                'question' => 'How do I update my profile?',
                'answer' => 'Click on your avatar in the top-right corner or navigate to Profile from the sidebar. You can update your name, email, and password there.',
            ],
        ]);

        return view('other.help', [
            'faqs' => $faqs,
        ]);
    }

    /**
     * Download the dataset CSV.
     */
    public function dataset()
    {
        $path = base_path('dataset/yogyakarta.csv');
        return response()->download($path, 'yogyakarta.csv');
    }

    /**
     * Download the reference paper.
     */
    public function journal()
    {
        $path = base_path('dataset/paper.pdf');
        return response()->download($path, 'paper.pdf');
    }
}
