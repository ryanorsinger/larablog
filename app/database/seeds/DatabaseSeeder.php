<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder {

    /**
     *  Run the database seeds
     */

    public function run()
    {

        DB::table('todos')->truncate();

        Eloquent::unguard();

        $this->call('TodosTableSeeder');
    }

}
