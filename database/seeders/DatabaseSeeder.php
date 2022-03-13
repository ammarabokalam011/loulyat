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
        \App\Models\User::factory()->create(['email'=>'ammaraboklam011@gmail.com',
            'password'=>'$2y$10$yW9YMX9waZyFqk1P4kdpBOh3fzZ43gXs1ugGmKaPvVrGKiOdWQVNS']);
    }
}
