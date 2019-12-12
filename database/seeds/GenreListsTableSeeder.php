<?php

use Illuminate\Database\Seeder;

class GenreListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_lists')->insert([
            'genre' => 'action',
            'name' => 'Action'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'adventure',
            'name' => 'Adventure'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'cars',
            'name' => 'Cars'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'comedy',
            'name' => 'Comedy'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'dementia',
            'name' => 'Dementia'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'demons',
            'name' => 'Demons'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'drama',
            'name' => 'Drama'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'ecchi',
            'name' => 'Ecchi'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'fantasy',
            'name' => 'Fantasy'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'game',
            'name' => 'Game'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'harem',
            'name' => 'Harem'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'hentai',
            'name' => 'Hentai'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'historical',
            'name' => 'Historical'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'horror',
            'name' => 'Horror'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'josei',
            'name' => 'Josei'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'kids',
            'name' => 'Kids'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'magic',
            'name' => 'Magic'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'martial-arts',
            'name' => 'Martial Arts'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'mecha',
            'name' => 'Mecha'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'military',
            'name' => 'Military'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'music',
            'name' => 'Music'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'mystery',
            'name' => 'Mystery'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'parody',
            'name' => 'Parody'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'police',
            'name' => 'Police'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'psychological',
            'name' => 'Psychological'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'romance',
            'name' => 'Romance'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'samurai',
            'name' => 'Samurai'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'school',
            'name' => 'School'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'sci-fi',
            'name' => 'Sci-Fi'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'seinen',
            'name' => 'Seinen'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'shoujo',
            'name' => 'Shoujo'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'shoujo-ai',
            'name' => 'Shoujo Ai'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'shounen',
            'name' => 'Shounen'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'shounen-ai',
            'name' => 'Shounen Ai'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'slice-of-life',
            'name' => 'Slice of Life'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'space',
            'name' => 'Space'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'sports',
            'name' => 'Sports'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'super-power',
            'name' => 'Super Power'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'supernatural',
            'name' => 'Supernatural'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'thriller',
            'name' => 'Thriller'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'vampire',
            'name' => 'Vampire'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'yaoi',
            'name' => 'Yaoi'
        ]);
        DB::table('genre_lists')->insert([
            'genre' => 'yuri',
            'name' => 'Yuri'
        ]);
    }
}
