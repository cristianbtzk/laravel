<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            StateSeeder::class,
            CitySeeder::class,
            RoleSeeder::class,
            ServiceStatusSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            UserRoleSeeder::class,
            UserCitySeeder::class,
            AddressSeeder::class,
            ServiceSeeder::class,
            MessageSeeder::class,
            EvaluationSeeder::class,
        ]);
    }
}
