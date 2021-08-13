<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name'          => 'Osama Yousry',
            'email'         => 'yousryosama63@gmail.com',
            'password'      => Hash::make('asdasd'),
        ]);
    }
}
