<?php

namespace Database\Seeders;
use App\Models\category;
use Illuminate\Database\Seeder;
use Database\Factories\categoryFactory;
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
        category::factory(10)->create();
        // $this->call(CategorySeeder::class);
    }
}
