<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('db_category')->insert([
        	[
        		'cate_name'=>'Iphone',
        		'cate_slug'=>str_slug('iphone'),
        	],
        	[
        		'cate_name'=>'Samsung',
        		'cate_slug'=>str_slug('samsung'),
        	],
        ]);
    }
}
