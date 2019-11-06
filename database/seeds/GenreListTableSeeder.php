<?php

use Illuminate\Database\Seeder;

class GenreListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_list')->insert([
            'slug' => 'action',
            'name' => 'Action'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'adventure',
            'name' => 'Adventure'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'cars',
            'name' => 'Cars'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'comedy',
            'name' => 'Comedy'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'dementia',
            'name' => 'Dementia'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'demons',
            'name' => 'Demons'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'drama',
            'name' => 'Drama'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'ecchi',
            'name' => 'Ecchi'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'fantasy',
            'name' => 'Fantasy'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'game',
            'name' => 'Game'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'harem',
            'name' => 'Harem'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'hentai',
            'name' => 'Hentai'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'historical',
            'name' => 'Historical'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'horror',
            'name' => 'Horror'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'josei',
            'name' => 'Josei'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'kids',
            'name' => 'Kids'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'magic',
            'name' => 'Magic'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'martial-arts',
            'name' => 'Martial Arts'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'mecha',
            'name' => 'Mecha'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'military',
            'name' => 'Military'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'music',
            'name' => 'Music'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'mystery',
            'name' => 'Mystery'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'parody',
            'name' => 'Parody'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'police',
            'name' => 'Police'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'psychological',
            'name' => 'Psychological'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'romance',
            'name' => 'Romance'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'samurai',
            'name' => 'Samurai'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'school',
            'name' => 'School'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'sci-fi',
            'name' => 'Sci-Fi'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'seinen',
            'name' => 'Seinen'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'shoujo',
            'name' => 'Shoujo'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'shoujo-ai',
            'name' => 'Shoujo Ai'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'shounen',
            'name' => 'Shounen'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'shounen-ai',
            'name' => 'Shounen Ai'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'slice-of-life',
            'name' => 'Slice of Life'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'space',
            'name' => 'Space'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'sports',
            'name' => 'Sports'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'super-power',
            'name' => 'Super Power'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'supernatural',
            'name' => 'Supernatural'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'thriller',
            'name' => 'Thriller'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'vampire',
            'name' => 'Vampire'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'yaoi',
            'name' => 'Yaoi'
        ]);
        DB::table('genre_list')->insert([
            'slug' => 'yuri',
            'name' => 'Yuri'
        ]);
    }
}
