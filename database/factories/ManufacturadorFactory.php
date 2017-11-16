<?php

$factory->define(App\Manufacturador::class, function (Faker\Generator $faker) {
    return [
        "nombre" => $faker->name,
    ];
});
