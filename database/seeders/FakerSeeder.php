<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class FakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        for($i=1;$i<=100;$i++){
        	\App\User::create({
        		'name'=>$faker->name,
        		'email'=>$faker->email,
        		'password'=>bcrypt('password'),
        	});
        }
    }
}
