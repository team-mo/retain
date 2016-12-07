<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
//        'job_title' => $faker->randomElements('analyst', 'engineer', 'scientist', 'zoologist', 'web developer')
        'job_title' => 'test'
    ];
});