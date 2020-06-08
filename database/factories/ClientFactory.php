<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom'=>$faker->word,
        'prenom'=>$faker->word,
        'identite'=> $faker->numberBetween($min = 1000, $max = 9000) ,
       'cin'=> $faker->numberBetween($min = 0, $max = 8) ,
        'tel'=> $faker->randomNumber($nbDigits = NULL, $strict = false),
        'adresse'=> $faker->address,
        'type'=>$faker->word,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});