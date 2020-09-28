<?php

namespace Database\Seeders;

use App\Models\Match;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matchs =
            [
                [
                    'slug' => 'MANLIV',
                    'date' => '2020-09-20 12:43:22',
                ],
                [
                    'slug' => 'LIVJUV',
                    'date' => '2020-08-20 12:43:22',
                ],
                [
                    'slug' => 'JUVMAN',
                    'date' => '2020-01-20 12:43:22',
                ],
            ];
        foreach ($matchs as $match) {
            Match::create($match);
        }
    }
}
