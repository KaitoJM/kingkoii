<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Genre;

class GenreSeeder extends Seeder
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
                'name' => 'Action',
                'icon' => 'action.jpg',
                'default_audience_categories' => '2'
            ],
            [
                'name' => 'Adult',
                'icon' => 'adult.jpg',
                'default_audience_categories' => '3,4'
            ],
            [
                'name' => 'Autobiographical',
                'icon' => 'autobiographical.jpg',
                'default_audience_categories' => '2'
            ],
            [
                'name' => 'Crime',
                'icon' => 'crime.jpg',
                'default_audience_categories' => '3'
            ],
            [
                'name' => 'Erotic',
                'icon' => 'erotic.jpg',
                'default_audience_categories' => '3,4'
            ],
            [
                'name' => 'Gag',
                'icon' => 'gag.jpg',
                'default_audience_categories' => '2'
            ],
            [
                'name' => 'Humor',
                'icon' => 'humor.jpg',
                'default_audience_categories' => '2'
            ],
            [
                'name' => 'Horror',
                'icon' => 'horror.jpg',
                'default_audience_categories' => '3'
            ],
            [
                'name' => 'Non-fiction',
                'icon' => 'non-fiction.jpg',
                'default_audience_categories' => '1'
            ],
            [
                'name' => 'Romance',
                'icon' => 'romance.jpg',
                'default_audience_categories' => '2'
            ],
            [
                'name' => 'Science Fiction',
                'icon' => 'science-fiction.jpg',
                'default_audience_categories' => '1'
            ],
            [
                'name' => 'Slice of life',
                'icon' => 'slice-of-life.jpg',
                'default_audience_categories' => '2'
            ],
            [
                'name' => 'Superhero',
                'icon' => 'superheo.jpg',
                'default_audience_categories' => '1'
            ],
            [
                'name' => 'War',
                'icon' => 'war.jpg',
                'default_audience_categories' => '3'
            ],
            [
                'name' => 'Western',
                'icon' => 'western.jpg',
                'default_audience_categories' => '2'
            ],
        ];

        Genre::insert($data);
    }
}
