<?php

$factory->define(App\Classification::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement(['programming', 'accountancy', 'volunteering', 'science', 'awesomeness'])
    ];
});