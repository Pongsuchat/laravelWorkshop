<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'fname' => "sasdasd",
            'lname' => "aasdsd",
            'age'   =>  52,
        ]);
    }
}
