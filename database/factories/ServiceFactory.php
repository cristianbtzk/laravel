<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\ServiceStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $serviceStatus = ServiceStatus::all()->pluck('id')->toArray();
      $categories = Category::all()->pluck('id')->toArray();
      $users = User::all()->pluck('id')->toArray();

      return [
          'min_date' => $this->faker->dateTime(),
          'max_date' => $this->faker->dateTime(),
          'title' => $this->faker->words(3, true),
          'description' => $this->faker->sentence(),
          'service_status_id' => $this->faker->randomElement($serviceStatus),
          'user_id' => $this->faker->randomElement($users),
          'category_id' => $this->faker->randomElement($categories)
      ];
    }
}
