<?php

$factory->define(App\Classification::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElements('programming', 'accountancy', 'volunteering', 'science', 'awesomeness')
    ];
});