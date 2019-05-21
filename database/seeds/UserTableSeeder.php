<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Chikadibia Linus',
        'username' => 'linus231',
        'email'    => 'uri_luth1@tutamail.com',
        'password' => Hash::make('Goodluckchild1985@#'),
    ));
}

}

