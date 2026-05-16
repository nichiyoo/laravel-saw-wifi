<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\View\View;
use App\Http\Requests\StoreSettingRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Setting::class);
    }

    /**
     * Show the settings page.
     */
    public function index(): View
    {
        return view('other.settings', [
            'seo_title' => Setting::get('seo_title'),
            'seo_author' => Setting::get('seo_author'),
            'seo_keywords' => Setting::get('seo_keywords'),
            'seo_description' => Setting::get('seo_description'),
            'registration_enabled' => Setting::get('registration_enabled'),
        ]);
    }

    /**
     * Store the application settings.
     */
    public function store(StoreSettingRequest $request): RedirectResponse
    {
        collect([
            'seo_title',
            'seo_description',
            'seo_keywords',
            'seo_author'
        ])
            ->filter(fn($key) => $request->has($key))
            ->each(fn($key) => Setting::set($key, $request->$key));

        if ($request->has('registration_enabled')) Setting::set('registration_enabled', (bool) $request->registration_enabled);

        return redirect()
            ->route('settings.index')
            ->with('success', trans('messages.settings_stored'));
    }
}
