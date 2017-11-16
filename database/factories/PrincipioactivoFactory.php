<?php

$factory->define(App\Principioactivo::class, function (Faker\Generator $faker) {
    return [
        "nombre" => $faker->name,
    ];
});
