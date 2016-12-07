<?php
    $factory->define(App\Organisation::class, function (Faker\Generator $faker) {

        return [
            'name' => $faker->randomElements('Admiral', 'Nokia', 'BT', 'Alcatel-Lucent')
        ];
    });