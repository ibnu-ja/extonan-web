<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Episodes;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Episodes::class, function (Faker $faker) {
    return [
        'episode' => $faker->numberBetween($min = 1, $max = 60),
        'anime_id' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
