<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::set('registration_enabled', true);
        Setting::set('seo_author', config('app.name'));
        Setting::set('seo_title', 'Jogja Smart Service Wi-Fi Placement');
        Setting::set('seo_keywords', 'DSS, SAW, Yogyakarta, JSS, Wi-Fi, decision support system, smart city');
        Setting::set('seo_description', 'A Decision Support System for prioritising JSS free Wi-Fi access point placement across Yogyakarta City using the SAW algorithm.');
    }
}
