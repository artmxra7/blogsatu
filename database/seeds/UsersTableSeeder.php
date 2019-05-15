<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        //reset Table Users
        DB::table('users')->truncate();
        DB::table('users')->insert(
            [
                'name' => "Erwin Ra",
                'email' => "erwin@test.com",
                'password'=> bcrypt('Asdf1234'),
            ],
            [
                'name' => "Luri Ra",
                'email' => "luri@test.com",
                'password'=> bcrypt('Asdf1234'),
            ],
            [
                'name' => "Fatan Ra",
                'email' => "fatan@test.com",
                'password'=> bcrypt('Asdf1234'),
            ]
        );
    }
}
