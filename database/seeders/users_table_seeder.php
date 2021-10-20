<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(100)->create();
    }
}