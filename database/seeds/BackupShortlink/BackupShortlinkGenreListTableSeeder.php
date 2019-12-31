<?php

use Illuminate\Database\Seeder;

class BackupShortlinkGenreListTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genre_list')->delete();
        
        \DB::table('genre_list')->insert(array (
            0 => 
            array (
                'slug' => 'action',
                'name' => 'Action',
            ),
            1 => 
            array (
                'slug' => 'adventure',
                'name' => 'Adventure',
            ),
            2 => 
            array (
                'slug' => 'cars',
                'name' => 'Cars',
            ),
            3 => 
            array (
                'slug' => 'comedy',
                'name' => 'Comedy',
            ),
            4 => 
            array (
                'slug' => 'dementia',
                'name' => 'Dementia',
            ),
            5 => 
            array (
                'slug' => 'demons',
                'name' => 'Demons',
            ),
            6 => 
            array (
                'slug' => 'drama',
                'name' => 'Drama',
            ),
            7 => 
            array (
                'slug' => 'ecchi',
                'name' => 'Ecchi',
            ),
            8 => 
            array (
                'slug' => 'fantasy',
                'name' => 'Fantasy',
            ),
            9 => 
            array (
                'slug' => 'game',
                'name' => 'Game',
            ),
            10 => 
            array (
                'slug' => 'harem',
                'name' => 'Harem',
            ),
            11 => 
            array (
                'slug' => 'hentai',
                'name' => 'Hentai',
            ),
            12 => 
            array (
                'slug' => 'historical',
                'name' => 'Historical',
            ),
            13 => 
            array (
                'slug' => 'horror',
                'name' => 'Horror',
            ),
            14 => 
            array (
                'slug' => 'josei',
                'name' => 'Josei',
            ),
            15 => 
            array (
                'slug' => 'kids',
                'name' => 'Kids',
            ),
            16 => 
            array (
                'slug' => 'magic',
                'name' => 'Magic',
            ),
            17 => 
            array (
                'slug' => 'martial-arts',
                'name' => 'Martial Arts',
            ),
            18 => 
            array (
                'slug' => 'mecha',
                'name' => 'Mecha',
            ),
            19 => 
            array (
                'slug' => 'military',
                'name' => 'Military',
            ),
            20 => 
            array (
                'slug' => 'music',
                'name' => 'Music',
            ),
            21 => 
            array (
                'slug' => 'mystery',
                'name' => 'Mystery',
            ),
            22 => 
            array (
                'slug' => 'parody',
                'name' => 'Parody',
            ),
            23 => 
            array (
                'slug' => 'police',
                'name' => 'Police',
            ),
            24 => 
            array (
                'slug' => 'psychological',
                'name' => 'Psychological',
            ),
            25 => 
            array (
                'slug' => 'romance',
                'name' => 'Romance',
            ),
            26 => 
            array (
                'slug' => 'samurai',
                'name' => 'Samurai',
            ),
            27 => 
            array (
                'slug' => 'school',
                'name' => 'School',
            ),
            28 => 
            array (
                'slug' => 'sci-fi',
                'name' => 'Sci-Fi',
            ),
            29 => 
            array (
                'slug' => 'seinen',
                'name' => 'Seinen',
            ),
            30 => 
            array (
                'slug' => 'shoujo',
                'name' => 'Shoujo',
            ),
            31 => 
            array (
                'slug' => 'shoujo-ai',
                'name' => 'Shoujo Ai',
            ),
            32 => 
            array (
                'slug' => 'shounen',
                'name' => 'Shounen',
            ),
            33 => 
            array (
                'slug' => 'shounen-ai',
                'name' => 'Shounen Ai',
            ),
            34 => 
            array (
                'slug' => 'slice-of-life',
                'name' => 'Slice of Life',
            ),
            35 => 
            array (
                'slug' => 'space',
                'name' => 'Space',
            ),
            36 => 
            array (
                'slug' => 'sports',
                'name' => 'Sports',
            ),
            37 => 
            array (
                'slug' => 'super-power',
                'name' => 'Super Power',
            ),
            38 => 
            array (
                'slug' => 'supernatural',
                'name' => 'Supernatural',
            ),
            39 => 
            array (
                'slug' => 'thriller',
                'name' => 'Thriller',
            ),
            40 => 
            array (
                'slug' => 'vampire',
                'name' => 'Vampire',
            ),
            41 => 
            array (
                'slug' => 'yaoi',
                'name' => 'Yaoi',
            ),
            42 => 
            array (
                'slug' => 'yuri',
                'name' => 'Yuri',
            ),
        ));
        
        
    }
}