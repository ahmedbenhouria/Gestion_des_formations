<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formation;

class formationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Formation::class, 10)->create();
    }
}
