<?php

    $factory->define(App\Update::class, function (Faker\Generator $faker) {

        return [
            'name' => $faker->randomElements('Admiral', 'Nokia', 'BT', 'Alcatel-Lucent'),
            'description' => $faker->paragraph()
        ];
    });