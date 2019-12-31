<?php

use Illuminate\Database\Seeder;

class ShortlinkDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(ShortlinkAnimesTableSeeder::class);
        $this->call(ShortlinkEpisodesTableSeeder::class);
        $this->call(ShortlinkGambarsTableSeeder::class);
        $this->call(ShortlinkGenreListTableSeeder::class);
        $this->call(ShortlinkGenresTableSeeder::class);
        $this->call(ShortlinkLinksTableSeeder::class);
        $this->call(ShortlinkUsersTableSeeder::class);
    }
}
