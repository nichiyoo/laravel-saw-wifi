<?php

namespace Database\Seeders;

use App\Models\Metric;
use App\Enums\VariableType;
use App\Helpers\ArrayHelper;
use Illuminate\Database\Seeder;
use Repo\SawEngine\Enums\AttributeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metrics = [
            [
                'variable' => VariableType::POPULATION_DENSITY,
                'description' => 'Densitas populasi pada Kemantren (jiwa/km²)',
                'type' => AttributeType::BENEFIT,
                'weight' => 0.20,
            ],
            [
                'variable' => VariableType::JSS_USERS,
                'description' => 'Jumlah pengguna Wi-Fi Jogja Smart Service',
                'type' => AttributeType::BENEFIT,
                'weight' => 0.30,
            ],
            [
                'variable' => VariableType::WIFI_COUNT,
                'description' => 'Jumlah Free Wi-Fi Jogja Smart Service yang sudah beroperasi',
                'type' => AttributeType::COST,
                'weight' => 0.35,
            ],
            [
                'variable' => VariableType::SELF_FUNDING,
                'description' => 'Jumlah dana swadaya komunitas berdasarkan Kemantren',
                'type' => AttributeType::COST,
                'weight' => 0.15,
            ],
        ];

        foreach ($metrics as $metric) {
            Metric::create($metric);
        }
    }
}
