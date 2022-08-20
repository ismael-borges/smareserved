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
         \App\Models\User::factory()->create([
             'name' => 'Moat.ai',
             'email' => 'dev@moat.ai',
             'password' => bcrypt('123456789'),
         ]);

        \App\Models\Products::factory(100)->create();
    }
}
