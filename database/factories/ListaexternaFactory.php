<?php

$factory->define(App\Listaexterna::class, function (Faker\Generator $faker) {
    return [
        "producto_id" => factory('App\Producto')->create(),
        "proveedor_id" => factory('App\ContactCompany')->create(),
        "marca_id" => factory('App\Manufacturador')->create(),
        "codigo" => $faker->name,
        "vencimiento" => $faker->date("d-m-Y", $max = 'now'),
        "regisp" => $faker->name,
        "preciounidad" => $faker->randomNumber(2),
        "precio_caja" => $faker->randomNumber(2),
        "margen" => $faker->randomNumber(2),
        "stock" => $faker->name,
        "observaciones" => $faker->name,
    ];
});
