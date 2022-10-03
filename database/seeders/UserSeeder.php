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
            'email' => 'rokon07@hotmail.com',
			 'mobile' => '+8801717524792',
            'password' => Hash::make('rokon007'),
            'role_as' => '1',
            
            
            
        ]);
    }
}
