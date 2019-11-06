<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\AnimeController;

class AnimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anime = new AnimeController();
        DB::table('animes')->insert([
            'user_id' => 1,
            'judul' => 'Shingeki no Kyojin',
            'skor' => 3.45,
            'jenis' => 'tv',
            'slug' => $anime->createSlug('Shingeki no Kyojin'),
            'sinopsis' => 'textssss',
        ]);
        DB::table('animes')->insert([
            'user_id' => 1,
            'judul' => 'Junko mum',
            'skor' => 3.45,
            'jenis' => 'tv',
            'slug' => $anime->createSlug('Junko mum'),
            'sinopsis' => 'textsssdsfddsdsdsdss',
        ]);
        DB::table('animes')->insert([
            'user_id' => 1,
            'judul' => 'Rewrite',
            'skor' => 3.45,
            'jenis' => 'tv',
            'slug' => $anime->createSlug('Rewrite'),
            'sinopsis' => 'asdasdasdadasda',
        ]);
        DB::table('animes')->insert([
            'user_id' => 1,
            'judul' => 'Coba',
            'skor' => 5,
            'jenis' => 'movie',
            'slug' => $anime->createSlug('Coba'),
            'sinopsis' => 'aaasddwewerwlrihnf.srkhtel',
        ]);
    }
}
