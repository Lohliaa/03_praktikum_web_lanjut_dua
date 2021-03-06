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
        $this->call([AboutSeeder::class]);
        $this->call([HomeSeeder::class]);

        // \App\Models\User::factory(10)->create();
        // $this->call([PostSeeder::class]);
        // Post::factory(100)->create();
    }
}
