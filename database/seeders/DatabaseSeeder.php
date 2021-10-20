<?php

namespace Database\Seeders;

use App\Models\DomicilioUsers;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(100)->create();
        // DomicilioUsers::factory(100)->make();
        DomicilioUsers::factory(100)->create();
    }
}
