<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name' => 'Rokon',
		   'firstname' => 'Rezaul',
		   'lastname' => 'Karim',
           'email' => 'rokon07@hotmail.com',
		   'mobile' => '+8801717524792',
           'password' => Hash::make('rokon007'),
           'role_as' => '1',
		   'image' => 'backend/upload/image/user/rokon.jpg',
		   'address' => 'Haragach,Kaunia,Rangpur',
		   'city' => 'Rangpur',
		   'country' => 'Bangladesh',
		   'zipcode' => '5400',
		   'about' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem. ',
			
            
            
            
        ]);
    }
}
