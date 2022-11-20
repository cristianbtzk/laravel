<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class User_RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $roles = Role::all()->pluck('id')->toArray();
      $users = User::all()->pluck('id')->toArray();

      return [
          'user_id' => $this->faker->randomElement($users),
          'role_id' => $this->faker->randomElement($roles)
      ];
    }
}
