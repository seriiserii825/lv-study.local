<?php

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
//        factory('App\Category', 30)->create();
//        factory('App\Director', 10)->create();
        factory('App\Film', 80)->create();
    }
}
