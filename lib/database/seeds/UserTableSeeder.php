<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('db_users')->insert([
        	[
        		'name'=>'thientrang98',
        		'email'=>'thientrang98@gmail.com',
        		'password'=>bcrypt('123456789'),
        		'level'=>1,
        	],
        ]);
    }
}
