<?php

    $factory->define(App\Industry::class, function (Faker\Generator $faker) {

        return [
            'name' => $faker->randomElement(['IT', 'Insurance', 'Telecomms', 'Health care'])
        ];
    });