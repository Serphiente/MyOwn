<?php

$factory->define(App\Tipoproducto::class, function (Faker\Generator $faker) {
    return [
        "nombre" => $faker->name,
    ];
});
