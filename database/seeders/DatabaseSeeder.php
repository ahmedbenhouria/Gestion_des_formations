<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formation;
use App\Models\Cours;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Formation::class, 10)->create()->each( function($formation){
            $formation->cours()->saveMany(factory(Cours::class, 10)->make());
        });    
    }
}
