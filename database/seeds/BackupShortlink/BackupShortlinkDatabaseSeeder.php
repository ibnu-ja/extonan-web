<?php

use Illuminate\Database\Seeder;

class BackupShortlinkDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(BackupShortlinkAnimesTableSeeder::class);
        $this->call(BackupShortlinkEpisodesTableSeeder::class);
        $this->call(BackupShortlinkGambarsTableSeeder::class);
        $this->call(BackupShortlinkGenreListTableSeeder::class);
        $this->call(BackupShortlinkGenresTableSeeder::class);
        $this->call(BackupShortlinkLinksTableSeeder::class);
        $this->call(BackupShortlinkUsersTableSeeder::class);
    }
}
