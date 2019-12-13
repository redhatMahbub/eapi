<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'   =>  1,
            'username'   =>  'admin',
            'name'   =>  'Mr. Admin',
            'email'   =>  'admin@admin.com',
            'password'   =>  Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'role_id'   =>  2,
            'username'   =>  'author',
            'name'   =>  'Mr. author',
            'email'   =>  'author@author.com',
            'password'   =>  Hash::make('123456'),
        ]);


    }
}
