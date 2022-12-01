<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\customer;
use Hash;


Use faker\Factory as faker;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
	   // seeder for single data
		/*
       $data = new customer;
	   $data->name="akasha";
	   $data->unm="akasha@gmail.com";
	   $data->pass=Hash::make("123456");  // 'password' => bcrypt('123456'),
	   $data->gen="Male";
	   $data->lag="Hindi";  	
	   $filename=time().'_img.'.'mypage.jpg';
	   $data->file=$filename; 
	   
	   $data->cid="1";
	   $data->save();
	   */
	   
	   /*
	   customer::create([
            'name' => 'Hardik',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
	   
	   */
	   
	    $faker= Faker::create();
		for($i=1;$i<=100;$i++)
		{
		$customer = new customer ;
		$customer-> name=$faker->name;
		$customer-> unm=$faker->email;
		$customer->gen='Male';
		$customer->lag="Hindi"; 
		$customer->pass=$faker->password;
		$customer->cid='1';
		$filename=time().'_img.'.'mypage.jpg';
		$customer->file=$filename;
		$customer->save();
		}

	   
	
    }
}
