<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $states = State::all()->pluck('id')->toArray();

        return [
            'name' => $this->faker->words(2, true),
            'state_id' => $this->faker->randomElement($states)
        ];
    }
}
