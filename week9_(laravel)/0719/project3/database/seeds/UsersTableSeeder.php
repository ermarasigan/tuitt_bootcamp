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

		$limit = 20;

		for ($i = 0; $i < $limit; $i++){
			DB::table('users')->insert([ //,
				'name' => $faker->name,
				'email' => $faker->unique()->email,
				'password' => bcrypt('secret'),
				'avatar' => $faker->imageUrl($width = 200, $height = 200),
			]);
		}
	}
}
