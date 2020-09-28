<?php

namespace Database\Seeders;

use App\Models\Participation;
use Illuminate\Database\Seeder;

class ParticipationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $participations = [
            [
                'match_id' => 1,
                'team_id' => 4,
                'goals' => 3,
                'is_home' => false,
            ],
            [
                'match_id' => 1,
                'team_id' => 3,
                'goals' => 6,
                'is_home' => true,
            ],
            [
                'match_id' => 2,
                'team_id' => 3,
                'goals' => 0,
                'is_home' => true,
            ],
            [
                'match_id' => 2,
                'team_id' => 2,
                'goals' => 3,
                'is_home' => false,
            ],
            [
                'match_id' => 3,
                'team_id' => 2,
                'goals' => 1,
                'is_home' => true,
            ],
            [
                'match_id' => 3,
                'team_id' => 4,
                'goals' => 5,
                'is_home' => false,
            ],
        ];

        foreach ($participations as $participation) {
            Participation::create($participation);
        }
    }
}
