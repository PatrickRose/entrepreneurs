<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->truncate();

        $users = array(
	    array('username' => 'admin',
		  'password' => Hash::make('changeMe'))
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }

}
