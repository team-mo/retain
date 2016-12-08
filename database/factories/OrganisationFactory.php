<?php
    $factory->define(App\Organisation::class, function (Faker\Generator $faker) {

        return [
            'name' => $faker->randomElement(['Admiral', 'Nokia', 'BT', 'Alcatel-Lucent'])
        ];
    });