<?php


use App\Models\Formation;
use Faker\Generator as Faker;

$factory->define(Formation::class, function (Faker $faker) {

    return [
        'formation_name' => $faker->word,
        'formation_description' => $faker->sentence,
        'formation_level' => $faker->randomElement(['Débutant', 'Intermédiaire', 'Avancé']),
        'cours_id' => $faker->randomNumber,
        'created_at' => now()
    ];
});
