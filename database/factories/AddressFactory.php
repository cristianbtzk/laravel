<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
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
          'house_number' => $this->faker->randomNumber(4, false),
          'street' => $this->faker->streetName(),
          'postal_code' => $this->faker->postcode(),
          'district' => $this->faker->words(2, true),
          'city_id' => $this->faker->randomElement($cities),
          'user_id' => $this->faker->randomElement($users)
      ];
    }
}
