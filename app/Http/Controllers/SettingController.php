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
        $filepath = storage_path('app/settings.json');
        $content = file_get_contents($filepath);
        $settings = json_decode($content, true);

        return view('other.settings', [
            'registration_enabled' => $settings['registration_enabled'] ?? true,
        ]);
    }

    /**
     * store the application settings.
     */
    public function store(StoreSettingRequest $request): RedirectResponse
    {
        file_put_contents(
            storage_path('app/settings.json'),
            json_encode([
                'registration_enabled' => (bool) $request->registration_enabled
            ], JSON_PRETTY_PRINT),
        );

        return redirect()
            ->route('settings.index')
            ->with('success', 'Settings stored successfully.');
    }
}
