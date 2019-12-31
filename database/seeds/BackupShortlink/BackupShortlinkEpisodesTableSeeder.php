<?php

use Illuminate\Database\Seeder;

class BackupShortlinkEpisodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('episodes')->delete();
        
        \DB::table('episodes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'episode' => '01',
                'animes_id' => 1,
                'created_at' => '2019-10-23 11:44:22',
                'updated_at' => '2019-10-23 13:47:11',
            ),
            1 => 
            array (
                'id' => 2,
                'episode' => '01',
                'animes_id' => 2,
                'created_at' => '2019-10-23 11:49:21',
                'updated_at' => '2019-10-23 13:47:43',
            ),
            2 => 
            array (
                'id' => 3,
                'episode' => '01',
                'animes_id' => 3,
                'created_at' => '2019-10-23 11:52:24',
                'updated_at' => '2019-10-23 13:48:35',
            ),
            3 => 
            array (
                'id' => 4,
                'episode' => '01',
                'animes_id' => 4,
                'created_at' => '2019-10-23 12:00:42',
                'updated_at' => '2019-10-23 13:49:34',
            ),
            4 => 
            array (
                'id' => 5,
                'episode' => '02',
                'animes_id' => 4,
                'created_at' => '2019-10-23 12:20:59',
                'updated_at' => '2019-10-23 13:49:43',
            ),
            5 => 
            array (
                'id' => 6,
                'episode' => '03',
                'animes_id' => 4,
                'created_at' => '2019-10-23 12:24:43',
                'updated_at' => '2019-10-23 13:49:53',
            ),
            6 => 
            array (
                'id' => 7,
                'episode' => '02',
                'animes_id' => 3,
                'created_at' => '2019-10-23 12:35:18',
                'updated_at' => '2019-10-23 13:48:52',
            ),
            7 => 
            array (
                'id' => 8,
                'episode' => '03',
                'animes_id' => 3,
                'created_at' => '2019-10-23 12:38:54',
                'updated_at' => '2019-10-23 13:49:05',
            ),
            8 => 
            array (
                'id' => 9,
                'episode' => '02',
                'animes_id' => 1,
                'created_at' => '2019-10-23 12:50:16',
                'updated_at' => '2019-10-23 13:47:24',
            ),
            9 => 
            array (
                'id' => 10,
                'episode' => '02',
                'animes_id' => 2,
                'created_at' => '2019-10-23 12:58:36',
                'updated_at' => '2019-10-23 13:48:15',
            ),
            10 => 
            array (
                'id' => 12,
                'episode' => '00',
                'animes_id' => 5,
                'created_at' => '2019-10-23 13:54:35',
                'updated_at' => '2019-10-23 13:54:35',
            ),
            11 => 
            array (
                'id' => 13,
                'episode' => '01',
                'animes_id' => 5,
                'created_at' => '2019-10-23 14:05:42',
                'updated_at' => '2019-10-23 14:05:42',
            ),
            12 => 
            array (
                'id' => 14,
                'episode' => '02',
                'animes_id' => 5,
                'created_at' => '2019-10-23 14:09:36',
                'updated_at' => '2019-10-23 14:09:36',
            ),
            13 => 
            array (
                'id' => 15,
                'episode' => '01',
                'animes_id' => 6,
                'created_at' => '2019-10-23 14:16:39',
                'updated_at' => '2019-10-23 14:16:39',
            ),
            14 => 
            array (
                'id' => 16,
                'episode' => '02',
                'animes_id' => 6,
                'created_at' => '2019-10-23 14:22:45',
                'updated_at' => '2019-10-23 14:22:45',
            ),
            15 => 
            array (
                'id' => 17,
                'episode' => '03',
                'animes_id' => 6,
                'created_at' => '2019-10-23 14:25:39',
                'updated_at' => '2019-10-23 14:25:39',
            ),
            16 => 
            array (
                'id' => 18,
                'episode' => '01',
                'animes_id' => 7,
                'created_at' => '2019-10-23 14:31:27',
                'updated_at' => '2019-10-23 14:31:27',
            ),
            17 => 
            array (
                'id' => 19,
                'episode' => '02',
                'animes_id' => 7,
                'created_at' => '2019-10-23 14:36:36',
                'updated_at' => '2019-10-23 14:36:36',
            ),
            18 => 
            array (
                'id' => 20,
                'episode' => '01',
                'animes_id' => 8,
                'created_at' => '2019-10-23 14:48:48',
                'updated_at' => '2019-10-23 14:48:48',
            ),
            19 => 
            array (
                'id' => 21,
                'episode' => '01',
                'animes_id' => 9,
                'created_at' => '2019-10-23 14:51:54',
                'updated_at' => '2019-10-23 14:51:54',
            ),
            20 => 
            array (
                'id' => 22,
                'episode' => '01',
                'animes_id' => 10,
                'created_at' => '2019-10-23 14:54:11',
                'updated_at' => '2019-10-23 14:54:11',
            ),
            21 => 
            array (
                'id' => 23,
                'episode' => '04',
                'animes_id' => 6,
                'created_at' => '2019-10-25 04:00:50',
                'updated_at' => '2019-10-25 04:02:52',
            ),
            22 => 
            array (
                'id' => 24,
                'episode' => '03',
                'animes_id' => 7,
                'created_at' => '2019-10-25 23:10:55',
                'updated_at' => '2019-10-25 23:10:55',
            ),
            23 => 
            array (
                'id' => 25,
                'episode' => '02',
                'animes_id' => 10,
                'created_at' => '2019-10-26 00:32:09',
                'updated_at' => '2019-10-26 00:32:09',
            ),
            24 => 
            array (
                'id' => 26,
                'episode' => '03',
                'animes_id' => 10,
                'created_at' => '2019-10-26 00:58:28',
                'updated_at' => '2019-10-26 00:58:28',
            ),
            25 => 
            array (
                'id' => 30,
                'episode' => '01',
                'animes_id' => 16,
                'created_at' => '2019-10-26 20:20:21',
                'updated_at' => '2019-10-26 20:20:21',
            ),
            26 => 
            array (
                'id' => 31,
                'episode' => '02',
                'animes_id' => 16,
                'created_at' => '2019-10-26 20:21:25',
                'updated_at' => '2019-10-26 20:21:25',
            ),
            27 => 
            array (
                'id' => 32,
                'episode' => '03',
                'animes_id' => 16,
                'created_at' => '2019-10-26 20:22:36',
                'updated_at' => '2019-10-26 20:22:36',
            ),
            28 => 
            array (
                'id' => 33,
                'episode' => '01',
                'animes_id' => 17,
                'created_at' => '2019-10-28 10:14:23',
                'updated_at' => '2019-10-28 10:14:23',
            ),
            29 => 
            array (
                'id' => 34,
                'episode' => '02',
                'animes_id' => 17,
                'created_at' => '2019-10-28 10:16:53',
                'updated_at' => '2019-10-28 10:16:53',
            ),
            30 => 
            array (
                'id' => 35,
                'episode' => '03',
                'animes_id' => 17,
                'created_at' => '2019-10-28 10:19:18',
                'updated_at' => '2019-10-28 10:19:18',
            ),
            31 => 
            array (
                'id' => 36,
                'episode' => '04',
                'animes_id' => 4,
                'created_at' => '2019-10-28 17:30:36',
                'updated_at' => '2019-10-28 17:30:36',
            ),
            32 => 
            array (
                'id' => 37,
                'episode' => '01',
                'animes_id' => 18,
                'created_at' => '2019-10-29 04:21:23',
                'updated_at' => '2019-10-29 04:21:23',
            ),
            33 => 
            array (
                'id' => 38,
                'episode' => '02',
                'animes_id' => 18,
                'created_at' => '2019-10-29 04:24:03',
                'updated_at' => '2019-10-29 04:24:03',
            ),
            34 => 
            array (
                'id' => 39,
                'episode' => '03',
                'animes_id' => 18,
                'created_at' => '2019-10-29 04:26:04',
                'updated_at' => '2019-10-29 04:26:04',
            ),
            35 => 
            array (
                'id' => 41,
                'episode' => '03',
                'animes_id' => 5,
                'created_at' => '2019-10-29 05:10:37',
                'updated_at' => '2019-10-29 05:10:37',
            ),
            36 => 
            array (
                'id' => 42,
                'episode' => '04 Uncensored Subtitle Indonesia',
                'animes_id' => 16,
                'created_at' => '2019-10-30 15:37:34',
                'updated_at' => '2019-10-30 16:02:51',
            ),
            37 => 
            array (
                'id' => 43,
                'episode' => '02',
                'animes_id' => 8,
                'created_at' => '2019-10-31 00:45:59',
                'updated_at' => '2019-10-31 00:45:59',
            ),
            38 => 
            array (
                'id' => 44,
                'episode' => '03',
                'animes_id' => 8,
                'created_at' => '2019-10-31 00:52:07',
                'updated_at' => '2019-10-31 00:52:07',
            ),
            39 => 
            array (
                'id' => 45,
                'episode' => '04',
                'animes_id' => 8,
                'created_at' => '2019-10-31 00:54:12',
                'updated_at' => '2019-10-31 00:54:12',
            ),
            40 => 
            array (
                'id' => 46,
                'episode' => '05',
                'animes_id' => 6,
                'created_at' => '2019-11-01 05:18:32',
                'updated_at' => '2019-11-01 05:18:32',
            ),
            41 => 
            array (
                'id' => 47,
                'episode' => '05',
                'animes_id' => 8,
                'created_at' => '2019-11-01 19:39:33',
                'updated_at' => '2019-11-01 19:39:33',
            ),
            42 => 
            array (
                'id' => 48,
                'episode' => '04',
                'animes_id' => 17,
                'created_at' => '2019-11-01 19:53:13',
                'updated_at' => '2019-11-01 19:53:13',
            ),
            43 => 
            array (
                'id' => 49,
                'episode' => '04',
                'animes_id' => 7,
                'created_at' => '2019-11-02 06:06:42',
                'updated_at' => '2019-11-02 06:06:42',
            ),
            44 => 
            array (
                'id' => 50,
                'episode' => '04',
                'animes_id' => 10,
                'created_at' => '2019-11-02 06:19:47',
                'updated_at' => '2019-11-02 06:19:47',
            ),
            45 => 
            array (
                'id' => 51,
                'episode' => '01',
                'animes_id' => 26,
                'created_at' => '2019-11-03 05:35:21',
                'updated_at' => '2019-11-03 05:35:43',
            ),
            46 => 
            array (
                'id' => 52,
                'episode' => '02',
                'animes_id' => 26,
                'created_at' => '2019-11-03 05:37:43',
                'updated_at' => '2019-11-03 05:37:43',
            ),
            47 => 
            array (
                'id' => 53,
                'episode' => '03',
                'animes_id' => 26,
                'created_at' => '2019-11-03 05:39:50',
                'updated_at' => '2019-11-03 05:39:50',
            ),
            48 => 
            array (
                'id' => 54,
                'episode' => '04',
                'animes_id' => 26,
                'created_at' => '2019-11-03 05:41:30',
                'updated_at' => '2019-11-03 05:41:30',
            ),
            49 => 
            array (
                'id' => 55,
                'episode' => '05',
                'animes_id' => 26,
                'created_at' => '2019-11-03 05:43:21',
                'updated_at' => '2019-11-03 05:43:21',
            ),
            50 => 
            array (
                'id' => 56,
                'episode' => '05',
                'animes_id' => 18,
                'created_at' => '2019-11-04 04:58:14',
                'updated_at' => '2019-11-04 04:58:14',
            ),
            51 => 
            array (
                'id' => 57,
                'episode' => '04',
                'animes_id' => 5,
                'created_at' => '2019-11-04 05:24:19',
                'updated_at' => '2019-11-04 05:24:19',
            ),
            52 => 
            array (
                'id' => 58,
                'episode' => '05 Subtitle Indonesia',
                'animes_id' => 4,
                'created_at' => '2019-11-04 17:38:50',
                'updated_at' => '2019-11-04 17:38:50',
            ),
            53 => 
            array (
                'id' => 59,
                'episode' => '06',
                'animes_id' => 8,
                'created_at' => '2019-11-07 17:05:08',
                'updated_at' => '2019-11-07 17:05:08',
            ),
            54 => 
            array (
                'id' => 60,
                'episode' => '06',
                'animes_id' => 6,
                'created_at' => '2019-11-07 20:21:46',
                'updated_at' => '2019-11-07 20:21:46',
            ),
            55 => 
            array (
                'id' => 61,
                'episode' => '05',
                'animes_id' => 17,
                'created_at' => '2019-11-08 20:09:20',
                'updated_at' => '2019-11-08 20:09:20',
            ),
            56 => 
            array (
                'id' => 62,
                'episode' => '05',
                'animes_id' => 10,
                'created_at' => '2019-11-08 20:24:26',
                'updated_at' => '2019-11-08 20:24:26',
            ),
            57 => 
            array (
                'id' => 63,
                'episode' => '06',
                'animes_id' => 26,
                'created_at' => '2019-11-09 04:21:30',
                'updated_at' => '2019-11-09 04:21:30',
            ),
            58 => 
            array (
                'id' => 64,
                'episode' => '05',
                'animes_id' => 7,
                'created_at' => '2019-11-09 09:33:08',
                'updated_at' => '2019-11-09 09:33:08',
            ),
            59 => 
            array (
                'id' => 67,
                'episode' => '04',
                'animes_id' => 18,
                'created_at' => '2019-11-09 23:28:07',
                'updated_at' => '2019-11-09 23:28:07',
            ),
            60 => 
            array (
                'id' => 68,
                'episode' => '06',
                'animes_id' => 18,
                'created_at' => '2019-11-09 23:30:29',
                'updated_at' => '2019-11-09 23:30:29',
            ),
            61 => 
            array (
                'id' => 69,
                'episode' => '12',
                'animes_id' => 8,
                'created_at' => '2019-12-22 18:20:43',
                'updated_at' => '2019-12-22 18:20:43',
            ),
            62 => 
            array (
                'id' => 70,
                'episode' => '07',
                'animes_id' => 26,
                'created_at' => '2019-12-24 17:33:33',
                'updated_at' => '2019-12-24 17:33:33',
            ),
            63 => 
            array (
                'id' => 71,
                'episode' => '08',
                'animes_id' => 26,
                'created_at' => '2019-12-24 17:41:18',
                'updated_at' => '2019-12-24 17:41:18',
            ),
            64 => 
            array (
                'id' => 72,
                'episode' => '09',
                'animes_id' => 26,
                'created_at' => '2019-12-24 17:43:20',
                'updated_at' => '2019-12-24 17:43:20',
            ),
            65 => 
            array (
                'id' => 73,
                'episode' => '10',
                'animes_id' => 26,
                'created_at' => '2019-12-24 17:45:17',
                'updated_at' => '2019-12-24 17:45:17',
            ),
            66 => 
            array (
                'id' => 74,
                'episode' => '11',
                'animes_id' => 26,
                'created_at' => '2019-12-24 17:46:24',
                'updated_at' => '2019-12-24 17:46:24',
            ),
            67 => 
            array (
                'id' => 75,
                'episode' => '07',
                'animes_id' => 18,
                'created_at' => '2019-12-24 17:48:42',
                'updated_at' => '2019-12-24 17:48:42',
            ),
            68 => 
            array (
                'id' => 76,
                'episode' => '08',
                'animes_id' => 18,
                'created_at' => '2019-12-24 17:53:06',
                'updated_at' => '2019-12-24 17:53:06',
            ),
            69 => 
            array (
                'id' => 77,
                'episode' => '09',
                'animes_id' => 18,
                'created_at' => '2019-12-24 17:54:52',
                'updated_at' => '2019-12-24 17:54:52',
            ),
            70 => 
            array (
                'id' => 78,
                'episode' => '10',
                'animes_id' => 18,
                'created_at' => '2019-12-24 17:56:22',
                'updated_at' => '2019-12-24 17:56:22',
            ),
            71 => 
            array (
                'id' => 79,
                'episode' => '11',
                'animes_id' => 18,
                'created_at' => '2019-12-24 17:57:48',
                'updated_at' => '2019-12-24 17:57:48',
            ),
            72 => 
            array (
                'id' => 80,
                'episode' => '12 [END]',
                'animes_id' => 26,
                'created_at' => '2019-12-24 17:59:56',
                'updated_at' => '2019-12-24 17:59:56',
            ),
            73 => 
            array (
                'id' => 81,
                'episode' => '12 [END]',
                'animes_id' => 18,
                'created_at' => '2019-12-24 18:01:58',
                'updated_at' => '2019-12-24 18:01:58',
            ),
            74 => 
            array (
                'id' => 82,
                'episode' => '10',
                'animes_id' => 17,
                'created_at' => '2019-12-24 20:52:37',
                'updated_at' => '2019-12-24 20:52:37',
            ),
            75 => 
            array (
                'id' => 83,
                'episode' => '09',
                'animes_id' => 10,
                'created_at' => '2019-12-24 21:27:01',
                'updated_at' => '2019-12-24 21:27:01',
            ),
            76 => 
            array (
                'id' => 84,
                'episode' => '11',
                'animes_id' => 5,
                'created_at' => '2019-12-24 21:36:32',
                'updated_at' => '2019-12-24 21:36:32',
            ),
            77 => 
            array (
                'id' => 85,
                'episode' => 'OVA',
                'animes_id' => 27,
                'created_at' => '2019-12-26 12:26:01',
                'updated_at' => '2019-12-26 12:26:01',
            ),
            78 => 
            array (
                'id' => 86,
            'episode' => '(1 - 12) BATCH',
                'animes_id' => 8,
                'created_at' => '2019-12-26 12:46:46',
                'updated_at' => '2019-12-26 12:46:46',
            ),
            79 => 
            array (
                'id' => 87,
                'episode' => '11',
                'animes_id' => 7,
                'created_at' => '2019-12-26 17:40:36',
                'updated_at' => '2019-12-26 17:40:36',
            ),
            80 => 
            array (
                'id' => 88,
                'episode' => '11',
                'animes_id' => 17,
                'created_at' => '2019-12-26 19:04:50',
                'updated_at' => '2019-12-26 19:04:50',
            ),
            81 => 
            array (
                'id' => 89,
                'episode' => '12 Subtitle Indonesia',
                'animes_id' => 4,
                'created_at' => '2019-12-27 12:17:30',
                'updated_at' => '2019-12-27 12:17:30',
            ),
            82 => 
            array (
                'id' => 90,
            'episode' => '(1 - 12)',
                'animes_id' => 4,
                'created_at' => '2019-12-27 13:25:27',
                'updated_at' => '2019-12-27 13:25:27',
            ),
            83 => 
            array (
                'id' => 91,
                'episode' => '13',
                'animes_id' => 8,
                'created_at' => '2019-12-27 13:49:30',
                'updated_at' => '2019-12-27 13:49:30',
            ),
            84 => 
            array (
                'id' => 92,
            'episode' => '(1 - 10)',
                'animes_id' => 6,
                'created_at' => '2019-12-27 13:52:48',
                'updated_at' => '2019-12-27 13:52:48',
            ),
            85 => 
            array (
                'id' => 93,
                'episode' => '12 [END]',
                'animes_id' => 7,
                'created_at' => '2019-12-29 15:02:59',
                'updated_at' => '2019-12-29 17:21:08',
            ),
            86 => 
            array (
                'id' => 94,
                'episode' => '12 [Bersambung]',
                'animes_id' => 5,
                'created_at' => '2019-12-29 17:00:23',
                'updated_at' => '2019-12-29 17:00:23',
            ),
            87 => 
            array (
                'id' => 95,
                'episode' => '01-06 [Batch]',
                'animes_id' => 28,
                'created_at' => '2019-12-29 23:23:00',
                'updated_at' => '2019-12-29 23:23:00',
            ),
            88 => 
            array (
                'id' => 96,
            'episode' => '(1 - 12)',
                'animes_id' => 7,
                'created_at' => '2019-12-30 05:57:18',
                'updated_at' => '2019-12-30 05:57:18',
            ),
            89 => 
            array (
                'id' => 97,
                'episode' => '08 Subtitle Indonesia [Uncensored]',
                'animes_id' => 16,
                'created_at' => '2019-12-30 06:36:55',
                'updated_at' => '2019-12-30 06:36:55',
            ),
            90 => 
            array (
                'id' => 98,
                'episode' => '09 Subtitle Indonesia [Uncensored]',
                'animes_id' => 16,
                'created_at' => '2019-12-30 06:38:20',
                'updated_at' => '2019-12-30 06:38:20',
            ),
            91 => 
            array (
                'id' => 99,
                'episode' => '10 Subtitle Indonesia [Uncensored]',
                'animes_id' => 16,
                'created_at' => '2019-12-30 06:39:27',
                'updated_at' => '2019-12-30 06:39:27',
            ),
            92 => 
            array (
                'id' => 100,
                'episode' => '11 Subtitle Indonesia [Uncensored]',
                'animes_id' => 16,
                'created_at' => '2019-12-30 06:40:41',
                'updated_at' => '2019-12-30 06:40:41',
            ),
            93 => 
            array (
                'id' => 101,
                'episode' => '12 [END]',
                'animes_id' => 17,
                'created_at' => '2019-12-30 08:10:37',
                'updated_at' => '2019-12-30 08:10:37',
            ),
            94 => 
            array (
                'id' => 102,
            'episode' => '(1 - 12)',
                'animes_id' => 17,
                'created_at' => '2019-12-30 08:18:05',
                'updated_at' => '2019-12-30 08:18:05',
            ),
        ));
        
        
    }
}