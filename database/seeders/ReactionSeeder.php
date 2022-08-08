<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Reaction;

class ReactionSeeder extends Seeder
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
                'name' => 'like',
                'icon' => 'like.png'
            ],
            [
                'id' => 2,
                'name' => 'wow',
                'icon' => 'wow.png'
            ],
            [
                'id' => 3,
                'name' => 'angry',
                'icon' => 'angry.png'
            ],
            [
                'id' => 4,
                'name' => 'sad',
                'icon' => 'sad.png'
            ],
            [
                'id' => 5,
                'name' => 'love',
                'icon' => 'love.png'
            ],
        ];

        Reaction::insert($data);
    }
}
