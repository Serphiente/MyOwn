<?php

$factory->define(App\Presentacionproducto::class, function (Faker\Generator $faker) {
    return [
        "nombre" => $faker->name,
        "nombrecorto" => $faker->name,
    ];
});
