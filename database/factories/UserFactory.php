<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'USUnombre_usuario' => $faker->name,
        'USUapellido_usuario' => $faker->lastName,
        'USUdni_usuario' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'USUcelular_usuario' => $faker->phoneNumber,
        'USUtipo_usuario' => '1',
        'USUfoto_usuario' => 'default.jpg',
        'USUemail_usuario' => $faker->unique()->safeEmail,
        'password' => bcrypt('123123'),
        'remember_token' => str_random(10),
    ];
});
