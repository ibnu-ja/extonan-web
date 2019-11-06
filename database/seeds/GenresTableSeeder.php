<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genre' => 'demons',
            'anime_id' => '1'
        ]);
        DB::table('genres')->insert([
            'genre' => 'drama',
            'anime_id' => '1'
        ]);
        DB::table('genres')->insert([
            'genre' => 'horror',
            'anime_id' => '1'
        ]);
        DB::table('genres')->insert([
            'genre' => 'comedy',
            'anime_id' => '2'
        ]);
        DB::table('genres')->insert([
            'genre' => 'drama',
            'anime_id' => '2'
        ]);
        DB::table('genres')->insert([
            'genre' => 'magic',
            'anime_id' => '1'
        ]);
        DB::table('genres')->insert([
            'genre' => 'comedy',
            'anime_id' => '3'
        ]);
        DB::table('genres')->insert([
            'genre' => 'drama',
            'anime_id' => '3'
        ]);
        DB::table('genres')->insert([
            'genre' => 'magic',
            'anime_id' => '3'
        ]);
    }
}
