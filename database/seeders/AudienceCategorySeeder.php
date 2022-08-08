<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AudienceCategory;

class AudienceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'code' => 'G',
                'minimum_age_limit' => 3,
                'icon' => 'g.jpg',
            ],
            [
                'id' => 2,
                'code' => 'PG',
                'minimum_age_limit' => 8,
                'icon' => 'pg.jpg',
            ],
            [
                'id' => 3,
                'code' => 'PG-13',
                'minimum_age_limit' => 13,
                'icon' => 'pg-13.jpg',
            ],
            [
                'id' => 4,
                'code' => 'R',
                'minimum_age_limit' => 18,
                'icon' => 'r.jpg',
            ],
        ];

        AudienceCategory::insert($data);
    }
}
