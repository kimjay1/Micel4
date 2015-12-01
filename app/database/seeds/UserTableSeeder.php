<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'fname'     => 	'Kim Jay',
        'mname' 	=> 	'Janolino',
        'lname'		=> 	'Pestanas',
        'app_role'	=>	'admin',
        'username' 	=> 	'kjayp',
        'email'    	=> 	'kimjay.pestanas@gmail.com',
        'password' 	=> Hash::make('kimjay'),
    ));
}

}