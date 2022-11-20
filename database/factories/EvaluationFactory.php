<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluationFactory extends Factory
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
          'rating' => $this->faker->numberBetween(0, 5),
          'comment' => $this->faker->sentence(),
          'service_id' => $this->faker->randomElement($services),
          'author_id' => $this->faker->randomElement($users),
          'subject_id' => $this->faker->randomElement($users)
      ];
    }
}
