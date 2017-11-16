<?php

$factory->define(App\Itemoc::class, function (Faker\Generator $faker) {
    return [
        "item_id" => factory('App\Listaexterna')->create(),
    ];
});
