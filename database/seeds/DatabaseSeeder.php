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
        $this->call(UsersTableSeeder::class);
        // $this->call(AnimeTableSeeder::class);
        // $this->call(GenresTableSeeder::class);
        // $this->call(EpisodesTableSeeder::class);
        // $this->call(LinksTableSeeder::class);
        $this->call(GenreListTableSeeder::class);
        
    }
}
