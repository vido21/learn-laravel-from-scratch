<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Follow;
use Faker\Generator as Faker;

$factory->define(Follow::class, function (Faker $faker) {
    $user = $faker->randomElement(App\User::all());
    $following_user = $faker->randomElement(App\User::whereNotIn('user_id', $user->id));
    return [
        'user_id' => $user->id,
        'following_user_id' => $following_user->id
    ];
});
