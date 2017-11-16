<?php

$factory->define(App\Ordendecompra::class, function (Faker\Generator $faker) {
    return [
        "proveedor_id" => factory('App\ContactCompany')->create(),
        "contacto_id" => factory('App\Contact')->create(),
        "fecha" => $faker->date("d-m-Y", $max = 'now'),
    ];
});
