<?php
$factory->define(App\Department::class, function (Faker\Generator $faker) {

return [
    'name' => $faker->randomElements('react.js', 'book keeping', 'tea brewing', 'toilet cleaning')
];
});