<?php
    $factory->define(App\Training::class, function (Faker\Generator $faker) {

        return [
            'name' => $faker->randomElements('javascript', 'front-end', 'devops', 'mobile development')
        ];
    });
