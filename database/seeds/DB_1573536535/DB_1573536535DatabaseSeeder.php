<?php

use Illuminate\Database\Seeder;

class DB_1573536535DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $this->call(DB_1573536535MusimsTableSeeder::class);
        $this->call(DB_1573536535AnimesTableSeeder::class);
        $this->call(DB_1573536535EpisodesTableSeeder::class);
        $this->call(DB_1573536535GambarsTableSeeder::class);
        $this->call(DB_1573536535GenreListTableSeeder::class);
        $this->call(DB_1573536535GenresTableSeeder::class);
        $this->call(DB_1573536535LinksTableSeeder::class);
        $this->call(DB_1573536535UsersTableSeeder::class);
    }
}
