<?php

    $factory->define(App\Industry::class, function (Faker\Generator $faker) {

        return [
            'name' => $faker->randomElements('IT', 'Insurance', 'Telecomms', 'Health care')
        ];
    });