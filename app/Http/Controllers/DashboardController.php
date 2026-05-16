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
                'label' => trans('dashboard.widgets.kemantren'),
                'description' => trans('dashboard.widgets.kemantren_desc'),
            ],
            (object) [
                'show' => true,
                'value' => number_format(Candidate::sum('jss_users')),
                'icon' => 'users',
                'label' => trans('dashboard.widgets.jss_users'),
                'description' => trans('dashboard.widgets.jss_users_desc'),
            ],
            (object) [
                'show' => true,
                'value' => number_format(Candidate::sum('wifi_count')),
                'icon' => 'wifi',
                'label' => trans('dashboard.widgets.wifi_points'),
                'description' => trans('dashboard.widgets.wifi_points_desc'),
            ],
            (object) [
                'show' => true,
                'value' => self::formatCurrency(Candidate::sum('self_funding')),
                'icon' => 'wallet',
                'label' => trans('dashboard.widgets.self_funding'),
                'description' => trans('dashboard.widgets.self_funding_desc'),
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
                'question' => trans('help.faq.q1'),
                'answer' => trans('help.faq.a1'),
            ],
            [
                'question' => trans('help.faq.q2'),
                'answer' => trans('help.faq.a2'),
            ],
            [
                'question' => trans('help.faq.q3'),
                'answer' => trans('help.faq.a3'),
            ],
            [
                'question' => trans('help.faq.q4'),
                'answer' => trans('help.faq.a4'),
            ],
            [
                'question' => trans('help.faq.q5'),
                'answer' => trans('help.faq.a5'),
            ],
            [
                'question' => trans('help.faq.q6'),
                'answer' => trans('help.faq.a6'),
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
