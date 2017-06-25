<?php

use Illuminate\Database\Seeder;

class BroadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('broad_doc')->insert([

    		'broad_name' => 'Deneyim 1',
    		'start' => '2010',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('broad_doc')->insert([

    		'broad_name' => 'Deneyim 2',
    		'start' => '1990',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('broad_doc')->insert([

    		'broad_name' => 'Deneyim 3',
    		'start' => '2015',
    		'doctorid' => '1',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('broad_doc')->insert([

    		'broad_name' => 'Deneyim 1',
    		'start' => '2013',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('broad_doc')->insert([

    		'broad_name' => 'Deneyim 2',
    		'start' => '2014',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);

    	DB::table('broad_doc')->insert([

    		'broad_name' => 'Deneyim 3',
    		'start' => '2016',
    		'doctorid' => '2',
    		'created_at' => date("Y-m-d H:i:s") ,
    		'updated_at' => date("Y-m-d H:i:s") ,
    		]);


    }
}