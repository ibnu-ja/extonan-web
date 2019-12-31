<?php

use Illuminate\Database\Seeder;

class ShortlinkGenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 2,
                'genre' => 'fantasy',
                'anime_id' => 1,
                'created_at' => '2019-10-23 11:42:55',
                'updated_at' => '2019-10-23 11:42:55',
            ),
            1 => 
            array (
                'id' => 3,
                'genre' => 'adventure',
                'anime_id' => 2,
                'created_at' => '2019-10-23 11:48:02',
                'updated_at' => '2019-10-23 11:48:02',
            ),
            2 => 
            array (
                'id' => 4,
                'genre' => 'fantasy',
                'anime_id' => 2,
                'created_at' => '2019-10-23 11:48:02',
                'updated_at' => '2019-10-23 11:48:02',
            ),
            3 => 
            array (
                'id' => 5,
                'genre' => 'comedy',
                'anime_id' => 3,
                'created_at' => '2019-10-23 11:50:58',
                'updated_at' => '2019-10-23 11:50:58',
            ),
            4 => 
            array (
                'id' => 6,
                'genre' => 'fantasy',
                'anime_id' => 3,
                'created_at' => '2019-10-23 11:50:58',
                'updated_at' => '2019-10-23 11:50:58',
            ),
            5 => 
            array (
                'id' => 7,
                'genre' => 'action',
                'anime_id' => 4,
                'created_at' => '2019-10-23 11:58:57',
                'updated_at' => '2019-10-23 11:58:57',
            ),
            6 => 
            array (
                'id' => 8,
                'genre' => 'sci-fi',
                'anime_id' => 4,
                'created_at' => '2019-10-23 11:58:57',
                'updated_at' => '2019-10-23 11:58:57',
            ),
            7 => 
            array (
                'id' => 9,
                'genre' => 'space',
                'anime_id' => 4,
                'created_at' => '2019-10-23 11:58:57',
                'updated_at' => '2019-10-23 11:58:57',
            ),
            8 => 
            array (
                'id' => 31,
                'genre' => 'comedy',
                'anime_id' => 7,
                'created_at' => '2019-10-23 16:22:07',
                'updated_at' => '2019-10-23 16:22:07',
            ),
            9 => 
            array (
                'id' => 32,
                'genre' => 'shounen',
                'anime_id' => 7,
                'created_at' => '2019-10-23 16:22:07',
                'updated_at' => '2019-10-23 16:22:07',
            ),
            10 => 
            array (
                'id' => 40,
                'genre' => 'action',
                'anime_id' => 9,
                'created_at' => '2019-10-23 16:29:33',
                'updated_at' => '2019-10-23 16:29:33',
            ),
            11 => 
            array (
                'id' => 41,
                'genre' => 'adventure',
                'anime_id' => 9,
                'created_at' => '2019-10-23 16:29:33',
                'updated_at' => '2019-10-23 16:29:33',
            ),
            12 => 
            array (
                'id' => 42,
                'genre' => 'fantasy',
                'anime_id' => 9,
                'created_at' => '2019-10-23 16:29:33',
                'updated_at' => '2019-10-23 16:29:33',
            ),
            13 => 
            array (
                'id' => 43,
                'genre' => 'historical',
                'anime_id' => 9,
                'created_at' => '2019-10-23 16:29:33',
                'updated_at' => '2019-10-23 16:29:33',
            ),
            14 => 
            array (
                'id' => 44,
                'genre' => 'martial-arts',
                'anime_id' => 9,
                'created_at' => '2019-10-23 16:29:33',
                'updated_at' => '2019-10-23 16:29:33',
            ),
            15 => 
            array (
                'id' => 45,
                'genre' => 'supernatural',
                'anime_id' => 9,
                'created_at' => '2019-10-23 16:29:33',
                'updated_at' => '2019-10-23 16:29:33',
            ),
            16 => 
            array (
                'id' => 98,
                'genre' => 'ecchi',
                'anime_id' => 16,
                'created_at' => '2019-10-26 21:10:12',
                'updated_at' => '2019-10-26 21:10:12',
            ),
            17 => 
            array (
                'id' => 99,
                'genre' => 'sports',
                'anime_id' => 16,
                'created_at' => '2019-10-26 21:10:12',
                'updated_at' => '2019-10-26 21:10:12',
            ),
            18 => 
            array (
                'id' => 136,
                'genre' => 'action',
                'anime_id' => 6,
                'created_at' => '2019-10-29 14:19:24',
                'updated_at' => '2019-10-29 14:19:24',
            ),
            19 => 
            array (
                'id' => 137,
                'genre' => 'historical',
                'anime_id' => 6,
                'created_at' => '2019-10-29 14:19:24',
                'updated_at' => '2019-10-29 14:19:24',
            ),
            20 => 
            array (
                'id' => 138,
                'genre' => 'military',
                'anime_id' => 6,
                'created_at' => '2019-10-29 14:19:24',
                'updated_at' => '2019-10-29 14:19:24',
            ),
            21 => 
            array (
                'id' => 151,
                'genre' => 'action',
                'anime_id' => 8,
                'created_at' => '2019-11-01 19:41:19',
                'updated_at' => '2019-11-01 19:41:19',
            ),
            22 => 
            array (
                'id' => 152,
                'genre' => 'adventure',
                'anime_id' => 8,
                'created_at' => '2019-11-01 19:41:19',
                'updated_at' => '2019-11-01 19:41:19',
            ),
            23 => 
            array (
                'id' => 153,
                'genre' => 'fantasy',
                'anime_id' => 8,
                'created_at' => '2019-11-01 19:41:19',
                'updated_at' => '2019-11-01 19:41:19',
            ),
            24 => 
            array (
                'id' => 154,
                'genre' => 'magic',
                'anime_id' => 8,
                'created_at' => '2019-11-01 19:41:19',
                'updated_at' => '2019-11-01 19:41:19',
            ),
            25 => 
            array (
                'id' => 163,
                'genre' => 'action',
                'anime_id' => 17,
                'created_at' => '2019-11-02 05:09:32',
                'updated_at' => '2019-11-02 05:09:32',
            ),
            26 => 
            array (
                'id' => 164,
                'genre' => 'adventure',
                'anime_id' => 17,
                'created_at' => '2019-11-02 05:09:32',
                'updated_at' => '2019-11-02 05:09:32',
            ),
            27 => 
            array (
                'id' => 165,
                'genre' => 'comedy',
                'anime_id' => 17,
                'created_at' => '2019-11-02 05:09:32',
                'updated_at' => '2019-11-02 05:09:32',
            ),
            28 => 
            array (
                'id' => 166,
                'genre' => 'fantasy',
                'anime_id' => 17,
                'created_at' => '2019-11-02 05:09:32',
                'updated_at' => '2019-11-02 05:09:32',
            ),
            29 => 
            array (
                'id' => 167,
                'genre' => 'action',
                'anime_id' => 5,
                'created_at' => '2019-11-02 05:09:58',
                'updated_at' => '2019-11-02 05:09:58',
            ),
            30 => 
            array (
                'id' => 168,
                'genre' => 'adventure',
                'anime_id' => 5,
                'created_at' => '2019-11-02 05:09:58',
                'updated_at' => '2019-11-02 05:09:58',
            ),
            31 => 
            array (
                'id' => 169,
                'genre' => 'fantasy',
                'anime_id' => 5,
                'created_at' => '2019-11-02 05:09:58',
                'updated_at' => '2019-11-02 05:09:58',
            ),
            32 => 
            array (
                'id' => 170,
                'genre' => 'game',
                'anime_id' => 5,
                'created_at' => '2019-11-02 05:09:58',
                'updated_at' => '2019-11-02 05:09:58',
            ),
            33 => 
            array (
                'id' => 171,
                'genre' => 'romance',
                'anime_id' => 5,
                'created_at' => '2019-11-02 05:09:58',
                'updated_at' => '2019-11-02 05:09:58',
            ),
            34 => 
            array (
                'id' => 181,
                'genre' => 'action',
                'anime_id' => 10,
                'created_at' => '2019-11-08 20:16:50',
                'updated_at' => '2019-11-08 20:16:50',
            ),
            35 => 
            array (
                'id' => 182,
                'genre' => 'demons',
                'anime_id' => 10,
                'created_at' => '2019-11-08 20:16:50',
                'updated_at' => '2019-11-08 20:16:50',
            ),
            36 => 
            array (
                'id' => 183,
                'genre' => 'fantasy',
                'anime_id' => 10,
                'created_at' => '2019-11-08 20:16:51',
                'updated_at' => '2019-11-08 20:16:51',
            ),
            37 => 
            array (
                'id' => 184,
                'genre' => 'magic',
                'anime_id' => 10,
                'created_at' => '2019-11-08 20:16:51',
                'updated_at' => '2019-11-08 20:16:51',
            ),
            38 => 
            array (
                'id' => 185,
                'genre' => 'sci-fi',
                'anime_id' => 26,
                'created_at' => '2019-11-09 04:24:42',
                'updated_at' => '2019-11-09 04:24:42',
            ),
            39 => 
            array (
                'id' => 186,
                'genre' => 'comedy',
                'anime_id' => 18,
                'created_at' => '2019-11-09 22:29:29',
                'updated_at' => '2019-11-09 22:29:29',
            ),
            40 => 
            array (
                'id' => 187,
                'genre' => 'ecchi',
                'anime_id' => 18,
                'created_at' => '2019-11-09 22:29:29',
                'updated_at' => '2019-11-09 22:29:29',
            ),
            41 => 
            array (
                'id' => 188,
                'genre' => 'harem',
                'anime_id' => 18,
                'created_at' => '2019-11-09 22:29:29',
                'updated_at' => '2019-11-09 22:29:29',
            ),
            42 => 
            array (
                'id' => 189,
                'genre' => 'romance',
                'anime_id' => 18,
                'created_at' => '2019-11-09 22:29:29',
                'updated_at' => '2019-11-09 22:29:29',
            ),
            43 => 
            array (
                'id' => 190,
                'genre' => 'school',
                'anime_id' => 18,
                'created_at' => '2019-11-09 22:29:29',
                'updated_at' => '2019-11-09 22:29:29',
            ),
            44 => 
            array (
                'id' => 191,
                'genre' => 'shounen',
                'anime_id' => 18,
                'created_at' => '2019-11-09 22:29:29',
                'updated_at' => '2019-11-09 22:29:29',
            ),
            45 => 
            array (
                'id' => 192,
                'genre' => 'supernatural',
                'anime_id' => 18,
                'created_at' => '2019-11-09 22:29:30',
                'updated_at' => '2019-11-09 22:29:30',
            ),
            46 => 
            array (
                'id' => 193,
                'genre' => 'comedy',
                'anime_id' => 27,
                'created_at' => '2019-12-26 12:22:04',
                'updated_at' => '2019-12-26 12:22:04',
            ),
            47 => 
            array (
                'id' => 194,
                'genre' => 'slice-of-life',
                'anime_id' => 27,
                'created_at' => '2019-12-26 12:22:04',
                'updated_at' => '2019-12-26 12:22:04',
            ),
            48 => 
            array (
                'id' => 195,
                'genre' => 'ecchi',
                'anime_id' => 28,
                'created_at' => '2019-12-29 23:21:00',
                'updated_at' => '2019-12-29 23:21:00',
            ),
        ));
        
        
    }
}