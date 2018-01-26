<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

/**
 * Factory definition for model App\Imagem.
 */
$factory->define(App\Imagem::class, function ($faker) {
    return [
        'name' => $faker->name,
        'file_path' => $faker->file_path,
        'gallery_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Gallery.
 */
$factory->define(App\Gallery::class, function ($faker) {
    return [
        'name' => $faker->name,
        'Albums_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Albums.
 */
$factory->define(App\Task::class, function ($faker) {
    return [
        'name' => $faker->name,
    ];
});


