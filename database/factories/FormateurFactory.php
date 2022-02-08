<?php

use App\Models\User;
use App\Models\Formateur;
use Faker\Generator as Faker;

$factory->define(Formateur::class, function (Faker $faker) {

    return [
        'formateur_number' => $faker->phoneNumber,
        'formateur_job' => $faker->word,
        'formateur_description' => $faker->sentence,
        'user_id' => User::get('id')->random(),
        'created_at' => now()
    ];
});
