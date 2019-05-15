<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        //reset Table Users
        DB::table('users')->insert(
            [
                'name' => "Fatan Ra",
                'email' => "fatan@test.com",
                'password'=> bcrypt('Asdf1234'),
            ]
        );
    }
}
