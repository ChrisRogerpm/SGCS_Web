<?php

use Faker\Generator as Faker;

$factory->define(\App\Proyecto::class, function (Faker $faker) {
    return [
        'PROnombre_proyecto' => 'Sistema'.' '.$faker->name,
        'USUid_usuario' => $faker->numberBetween($min = 1, $max = 50),
        'PROfecha_inicio_proyecto' => '2018-09-01',
        'PROfecha_fin_proyecto' => '2018-09-29',
        'PROestado_proyecto' => 1
    ];
});
