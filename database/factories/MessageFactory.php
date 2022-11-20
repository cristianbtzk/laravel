<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $services = Service::all()->pluck('id')->toArray();
      $users = User::all()->pluck('id')->toArray();

      return [
          'date' => $this->faker->dateTime(),
          'text' => $this->faker->sentence(),
          'service_id' => $this->faker->randomElement($services),
          'from_id' => $this->faker->randomElement($users),
          'to_id' => $this->faker->randomElement($users)
      ];
    }
}
