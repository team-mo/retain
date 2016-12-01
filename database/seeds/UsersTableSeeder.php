<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 1000; $i++) {
        	App\User::create([
        		'name' => $faker->name ($title = 'null'),
        		'email' => $faker->name . "@email.com",
        		'password' => bcrypt('secret'),
        		'jobTitle' => $faker->randomElement($array = array('developer', 'accounts manager', 'tech support')),
        		'organisation_id' => 1,
        		'department_id' => 1,
        		'hairColour' => $faker->randomElement($array = array ('brown', 'black', 'blonde', 'ginger')),
        		'brewChoice' => $faker->randomElement($array = array ('tea', 'coffee', 'mate', 'matcha', 'cocoa'))	
        		]);
        }
    }
}