<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
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

$factory->define(User::class, function (Faker $faker) {
    if(! Storage::disk('public')->exists('pictures')) {
        Storage::disk('public')->makeDirectory('pictures');
    }

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'picture' => $faker->randomElement([
            null, 'pictures/'.$faker->image(storage_path('app/public/pictures'), 64, 48, null, false)
        ]),
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'created_at' => $createdAt = $faker->dateTimeBetween(now()->subMonths(3)),
        'updated_at' => $createdAt,
    ];
});
