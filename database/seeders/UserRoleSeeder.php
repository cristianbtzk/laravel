<?php

namespace Database\Seeders;

use App\Models\User_Role;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User_Role::factory(3)->create();
    }
}
