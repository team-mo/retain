<?php
$factory->define(App\Skill::class, function (Faker\Generator $faker) {

return [
    'name' => $faker->randomElements('react.js', 'book keeping', 'tea brewing', 'toilet cleaning')
];
});