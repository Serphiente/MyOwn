<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "rut" => $faker->name,
        "email" => $faker->safeEmail,
        "password" => str_random(10),
        "banco" => $faker->name,
        "tipocuentabanco" => $faker->name,
        "cuentabancaria" => $faker->name,
        "role_id" => factory('App\Role')->create(),
        "remember_token" => $faker->name,
    ];
});
