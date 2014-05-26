<?php

class DatabaseSeeder extends Seeder {

    /**
     *  Run the database seeds
     */

    public function run()
    {

        DB::table('lessons')->truncate();

        Eloquent::unguard();


        $this->call('LessonsTableSeeder');
    }

}
