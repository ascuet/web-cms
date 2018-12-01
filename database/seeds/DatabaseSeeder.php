<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	// DB::table('users')->insert([
     //        'name' 			 => 'Premier Admin',
	    //     'email'			 => 'admin@premier.com',
	    //     'password' 		 => md5('123456'),
	    //     'role'           => 0,
	    //     'status'         => true,
	    //     'remember_token' => str_random(10),
     //    ]);
        $this->call(UsersTableSeeder::class);
    }
}
