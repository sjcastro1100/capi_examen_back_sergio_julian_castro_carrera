<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\UserDomicilio;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/**
 * Crea registro del domicilio del usuario y le asigna el id del usuario creado
 */
$factory->define(App\UserDomicilio::class, function (Faker $faker) {
    return [
       'user_id' => factory(App\User::class)->create(),
       'domicilio' => $faker->streetAddress,
       'colonia' => $faker->streetName,
       'cp' => intval($faker->postcode),
       'numero_exterior' => $faker->buildingNumber,
       'ciudad' => $faker->city,
    ];
});
