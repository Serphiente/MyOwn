<?php

$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
        "company_id" => factory('App\ContactCompany')->create(),
        "first_name" => $faker->name,
        "last_name" => $faker->name,
        "phone1" => $faker->name,
        "email" => $faker->name,
        "observaciones" => $faker->name,
    ];
});
