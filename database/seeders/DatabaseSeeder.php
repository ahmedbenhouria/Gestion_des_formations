<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formation;
use App\Models\User;
use App\Models\Formateur;
use App\Models\Cours;
use PHPUnit\Framework\TestCase;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);

        

        factory(User::class, 10)->create();
        factory(Formateur::class, 4)->create();

        factory(Formation::class, 10)->create()->each( function($formation){
            $formation->cours()->saveMany(factory(Cours::class, 10)->make());
        });    
    }
}
