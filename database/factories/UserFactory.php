<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\chatMessage;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'displaypic' => 'https://picsum.photos/200',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(App\chatMessage::class, function (Faker $faker) {
    do {
        $from = rand(1, 33);
        $to = rand(1, 33);
        $is_read = rand(0, 1);
    } while (
        $from === $to
    );

    return [
        'from' => $from,
        'to' => $to,
        'message' => $faker->sentence,
        'is_read' => $is_read,
    ];
});
