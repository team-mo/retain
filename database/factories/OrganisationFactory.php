<?php
    $factory->define(App\Department::class, function (Faker\Generator $faker) {

        return [
            'name' => $faker->randomElements('Admiral', 'Nokia', 'BT', 'Alcatel-Lucent')
        ];
    });