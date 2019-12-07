<?php

use Faker\Generator as Faker;

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

$factory->define(App\Components\User\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_name' => $faker->unique()->username,
        'email' => $faker->unique()->safeEmail,
        'password' => '12345678',
        'remember_token' => str_random(10),
        'permissions' => [],
        'last_login' => $faker->dateTime,
        'active' => null,
        'activation_key' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
    ];
});
