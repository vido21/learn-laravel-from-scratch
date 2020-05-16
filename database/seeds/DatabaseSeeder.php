<?php

use Carbon\Factory;
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
        // $this->call(UserSeeder::class);
        Factory(App\Tweet::class, 20)->create();
        // Factory(App\Follow::class, 20)->create();
    }
}
