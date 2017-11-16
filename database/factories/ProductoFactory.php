<?php

$factory->define(App\Producto::class, function (Faker\Generator $faker) {
    return [
        "nombre" => $faker->name,
        "unidadescaja" => $faker->randomNumber(2),
        "tipo_producto_id" => factory('App\Tipoproducto')->create(),
        "presentacion_producto_id" => factory('App\Presentacionproducto')->create(),
    ];
});
