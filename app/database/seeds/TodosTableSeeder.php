<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;


class TodosTableSeeder extends Seeder {

	public function run()
	{


        /* Make a faker object to use Faker to fake content */
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			Todo::create([
                'body' => $faker->sentence(5)
                ]);
		}
	}

}
