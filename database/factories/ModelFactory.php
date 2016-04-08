<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
$factory->define(Sisec\Enterprice::class, function (Faker\Generator $faker) {
    return [
        'rfc' => $faker->swiftBicNumber,
        'nameemp' => $faker->company,
        'legalagent' => $faker->name($gender = null|'male'|'female'),
        'type' => $faker->regexify('Constructora|Supervisora'),
        'status' => $faker->lastname,
        'email' => $faker->email,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'remember_token' => str_random(10),
    ];
});


$factory->define(Sisec\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'firstlastname' => $faker->lastname,
        'secondlastname' => $faker->lastname,
        'email' => $faker->email,
        'state' => $faker->state,
        'zone' => $faker->regexify('Norte|Sur'),
        'celphone' => $faker->phoneNumber,
        'phone' => $faker->phoneNumber,
        'role_id' => $faker->lastname,
        'enterprice_id' => $faker->name,
        'id_curp' => $faker->name,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});