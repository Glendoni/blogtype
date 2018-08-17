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
         //$this->call(BearAppSeeder::class);
   
        $this->call([
        Language_arrTableSeeder::class,
            
    ]);
    
    } 
}
