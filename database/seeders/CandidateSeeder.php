<?php

namespace Database\Seeders;

use League\Csv\Reader;
use App\Models\Candidate;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    public function run(): void
    {
        $filepath = base_path('dataset/yogyakarta.csv');
        $reader = Reader::createFromPath($filepath);
        $reader->setHeaderOffset(0);

        $data = $reader->getRecords();
        foreach ($data as $offset => $item) {
            $item = (object) $item;

            Candidate::create([
                'bps_code' => $item->bps_code,
                'jss_users' => $item->jss_users,
                'kemantren' => $item->kemantren,
                'kemendagri_code' => $item->kemendagri_code,
                'population_density' => $item->population_density,
                'self_funding' => $item->self_funding,
                'wifi_count' => $item->wifi_count,
            ]);
        }
    }
}
