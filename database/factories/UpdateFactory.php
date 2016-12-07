<?php

    $factory->define(App\Update::class, function (Faker\Generator $faker) {

        return [
            'description' => $faker->paragraph()
        ];
    });