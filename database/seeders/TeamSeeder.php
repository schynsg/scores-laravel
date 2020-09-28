<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'slug' => 'TUV',
                'name' => 'Tothenam',
                'file-name' => 'Tothenam.png',
            ],
            [
                'slug' => 'JUV',
                'name' => 'Juventus',
                'file-name' => 'Juventus.png',
            ],
            [
                'slug' => 'LIV',
                'name' => 'Liverpool',
                'file-name' => 'Liverpool.png',
            ],
            [
                'slug' => 'MAN',
                'name' => 'Mancherster',
                'file-name' => 'Mancherster.png',
            ]
        ];
        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
