<?php

namespace Database\Factories;

use App\Models\Match;
use App\Models\Participation;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Participation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*
            'match_id'=> Match::factory(),
            'team_id' => Team::factory(),
            'goals' => $this->faker->numberBetween(0,5),
            'is_home' => $this->faker->boolean,
            */
        ];
    }
}
