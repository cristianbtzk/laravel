<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class User_CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $cities = City::all()->pluck('id')->toArray();
      $users = User::all()->pluck('id')->toArray();

      return [
          'user_id' => $this->faker->randomElement($users),
          'city_id' => $this->faker->randomElement($cities)
      ];
    }
}
