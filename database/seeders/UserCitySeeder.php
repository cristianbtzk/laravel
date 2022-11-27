<?php

namespace Database\Seeders;

use App\Models\User_City;
use Illuminate\Database\Seeder;

class UserCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User_City::factory(3)->create();
    }
}
