<?php
    $factory->define(App\Training::class, function (Faker\Generator $faker) {

        return [
            'name' => $faker->randomElement(['javascript', 'front-end', 'devops', 'mobile development'])
        ];
    });
