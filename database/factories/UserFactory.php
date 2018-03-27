<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------

| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        //'email' => $faker->unique()->safeEmail,
        //'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'password'=>'secret',
        'cargo_id'=> $faker->numberBetween(1,5),
        'personal_id'=>$faker->unique()->numberBetween(1,10),
        'estado'=>true,
        'remember_token' => str_random(10),
    ];
});
