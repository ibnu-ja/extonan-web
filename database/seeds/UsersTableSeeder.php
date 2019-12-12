<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'ibnu',
            'email' => 'ibnu.magang@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('Psrj0737'),
        ]);
    }
}
