<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
         $this->call([
            SystemRole::class,
            UserTableSeeder::class,
            TenetTableSeeder::class,
            AdminTableSeeder::class,
            AdvisorTableSeeder::class,
            JazzIdTableSeeder::class,
            PostTableSeeder::class,

         
         ]);
    }
}
