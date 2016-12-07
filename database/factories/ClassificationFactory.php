<?php

$factory->define(App\Department::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElements('programming', 'accountancy', 'volunteering', 'science', 'awesomeness')
    ];
});