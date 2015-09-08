<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 1,
				'userstatus_id' => 1,
				'name' => 'Gerardo Belot',
				'email' => 'gbelot2003@hotmail.com',
				'password' => '$2y$10$OpcKFzqU1hgb53IIKvkKUu3yj9T7OQw5gbPqEN/CjNAGagL5NNUEq',
				'remember_token' => '8J9zbAuYZ1rOHfrCi4kPAoJSbXzDGXo22bHi3x4Y5ez4C9qMlNSeud3bZybV',
				'created_at' => '2015-07-06 09:46:45',
				'updated_at' => '2015-07-13 10:31:14',
			),
			1 => 
			array (
				'id' => 2,
				'userstatus_id' => 1,
				'name' => 'Carlos Fortin',
				'email' => 'cfortin@bufeteforlar.com',
				'password' => '$2y$10$vO6PE5NZ5sKufq9koPStUey3uHvXbpO8cVBHlQ7J2yqLrk76OTt..',
				'remember_token' => NULL,
				'created_at' => '2015-09-08 23:15:11',
				'updated_at' => '2015-09-08 23:15:11',
			),
		));
	}

}
