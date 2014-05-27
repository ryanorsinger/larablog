<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;


class TodosTableSeeder extends Seeder {

	public function run()
	{


        /* Make a faker object to use Faker to fake content */
		$faker = Faker::create();

		foreach(range(1, 25) as $index)
		{
			Todo::create([
                'title' => $faker->sentence(5)
                ]);
		}
	}

}
