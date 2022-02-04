<?php
use App\Models\Formation;
use App\Models\Cours;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Cours::class, function (Faker $faker) {

    return [
        'cours_name' => $faker->word,
        'cours_description' => $faker->sentence,
        'formation_id' => Formation::get('id')->random(),
        'created_at' => now()
    ];
});
