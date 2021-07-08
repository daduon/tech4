<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	        [
		        'name' => "Admin",
		        'username' => 'admin',
		        'email' => "admin@gmail.com",
		        'password' => bcrypt('123@123'),
                'role_id' => 1,
                'branch_id' => 1
	        ]
        ]);
    }
}
