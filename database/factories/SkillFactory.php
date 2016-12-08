<?php
$factory->define(App\Skill::class, function (Faker\Generator $faker) {

return [
    'name' => $faker->randomElement(['react.js', 'book keeping', 'tea brewing', 'toilet cleaning'])
];
});