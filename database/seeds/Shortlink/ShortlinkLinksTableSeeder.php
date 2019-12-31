<?php

use Illuminate\Database\Seeder;

class ShortlinkLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 21,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1VDvTpGhj5y3gAAiRI2AWI2kwsydALjpa|Mirror.to,https://mir.cr/1WI8NIKV',
                'link' => 'Google Drive,http://bit.ly/39otJvD|Mirror.to,http://bit.ly/2QMr8TN',
                'res' => '720p',
                'episodes_id' => 1,
                'created_at' => '2019-10-23 13:47:11',
                'updated_at' => '2019-10-23 13:47:11',
            ),
            1 => 
            array (
                'id' => 22,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1ubDovn43FpVuu9VMlVuo5taEbTqLQ5UU|Mirror.to,https://mir.cr/0QDCGEM9',
                'link' => 'Google Drive,http://bit.ly/2F6P6U9|Mirror.to,http://bit.ly/2tgYa6b',
                'res' => '480p',
                'episodes_id' => 1,
                'created_at' => '2019-10-23 13:47:11',
                'updated_at' => '2019-10-23 13:47:11',
            ),
            2 => 
            array (
                'id' => 23,
                'link_org' => 'Mirrored.to,https://www.mirrored.to/files/13L41KPL/Tonansub_ChoYoyu_02_720.mkv_links|Google Drive,https://drive.google.com/file/d/1Sq4CfGp9xvAAL2mt8o1Zo5mXrlNhzn1B/view',
                'link' => 'Mirrored.to,http://bit.ly/2Qay1PA|Google Drive,http://bit.ly/2MKOibT',
                'res' => '720p',
                'episodes_id' => 9,
                'created_at' => '2019-10-23 13:47:24',
                'updated_at' => '2019-10-23 13:47:24',
            ),
            3 => 
            array (
                'id' => 24,
                'link_org' => 'Mirrored.to,https://www.mirrored.to/files/1ZBSAPSI/Tonansub_ChoYoyu_02_480.mkv_links|Media Fire,https://www.mediafire.com/file/92kn94hru90zjqe/Tonansub_ChoYoyu_02_480.mkv/file',
                'link' => 'Mirrored.to,http://bit.ly/39sqd3m|Media Fire,http://bit.ly/2QCjQS7',
                'res' => '480p',
                'episodes_id' => 9,
                'created_at' => '2019-10-23 13:47:24',
                'updated_at' => '2019-10-23 13:47:24',
            ),
            4 => 
            array (
                'id' => 25,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1NYxEjNp31vzJVk4h1mEFaiKlIpaq9QO6|MultiUp,https://multiup.org/6700f9c7bba57d144cf0a32c35efa4b6',
                'link' => 'Google Drive,http://bit.ly/37sA33s|MultiUp,http://bit.ly/2Qxl5SU',
                'res' => '720p',
                'episodes_id' => 2,
                'created_at' => '2019-10-23 13:47:43',
                'updated_at' => '2019-10-23 13:47:43',
            ),
            5 => 
            array (
                'id' => 26,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1VpIAEFe-Yp2T4-voXeGf_vMOaUWBEhiG|MultiUp,https://multiup.org/2cb6b550672d1b0877e8598e34184d70',
                'link' => 'Google Drive,http://bit.ly/2MKdvmz|MultiUp,http://bit.ly/2QCk1wL',
                'res' => '480p',
                'episodes_id' => 2,
                'created_at' => '2019-10-23 13:47:43',
                'updated_at' => '2019-10-23 13:47:43',
            ),
            6 => 
            array (
                'id' => 27,
                'link_org' => 'Multiup,https://multiup.org/732a7dfebacfa2fe9f6a7e58c973d3bd|Google Drive,https://drive.google.com/file/d/1JKRCDYkvakMrubxnIxrxlwOAXzRmOfZB/view',
                'link' => 'Multiup,http://bit.ly/2Qz0U6V|Google Drive,http://bit.ly/2F9DSOE',
                'res' => '720p',
                'episodes_id' => 10,
                'created_at' => '2019-10-23 13:48:15',
                'updated_at' => '2019-10-23 13:48:15',
            ),
            7 => 
            array (
                'id' => 28,
                'link_org' => 'Multiup,https://multiup.org/94f6d635954cf480be4d383189b0a014|Google Drive,https://drive.google.com/file/d/1MQV_xAHqFqvO1r2ikKjHwOF9BUWToECz/view',
                'link' => 'Multiup,http://bit.ly/39rd9Lt|Google Drive,http://bit.ly/39qiu5G',
                'res' => '480p',
                'episodes_id' => 10,
                'created_at' => '2019-10-23 13:48:15',
                'updated_at' => '2019-10-23 13:48:15',
            ),
            8 => 
            array (
                'id' => 29,
            'link_org' => 'Google Drive,https://drive.google.com/open?id=1tXnxhHURRpfvwZaJ1rZUPjlVCZSzQzZd|Mirror.to,https://www.mirrored.to/files/QFLGOY2S/[TONAN]_WataItta_-_01(720).mkv_links',
                'link' => 'Google Drive,http://bit.ly/2Qxlgh2|Mirror.to,http://bit.ly/2sA5JVB',
                'res' => '720p',
                'episodes_id' => 3,
                'created_at' => '2019-10-23 13:48:35',
                'updated_at' => '2019-10-23 13:48:35',
            ),
            9 => 
            array (
                'id' => 30,
            'link_org' => 'Google Drive,https://drive.google.com/open?id=15txfW_B1-PpnzE8s6MeI72-tlezvIpp9|Mirror.to,https://www.mirrored.to/files/QBCLPT6R/[TONAN]_WataItta_-_01(480).mkv_links',
                'link' => 'Google Drive,http://bit.ly/2F9DX4U|Mirror.to,http://bit.ly/37mh0rk',
                'res' => '480p',
                'episodes_id' => 3,
                'created_at' => '2019-10-23 13:48:35',
                'updated_at' => '2019-10-23 13:48:35',
            ),
            10 => 
            array (
                'id' => 31,
                'link_org' => 'Mirrored.to,https://www.mirrored.to/files/GOGW44ZE/Tonansub_WataItta_02_720.mkv_links|Google Drive,https://drive.google.com/file/d/1JKYRSWJDwH3LYg2_gxGJhx30tpa-bvO2/view',
                'link' => 'Mirrored.to,http://bit.ly/39sEHjs|Google Drive,http://bit.ly/2Q9AFVD',
                'res' => '720p',
                'episodes_id' => 7,
                'created_at' => '2019-10-23 13:48:52',
                'updated_at' => '2019-10-23 13:48:52',
            ),
            11 => 
            array (
                'id' => 32,
                'link_org' => 'Mirrored.to,https://www.mirrored.to/files/0LIOMLSR/Tonansub_WataItta_02_480.mkv_links|Google Drive,https://drive.google.com/file/d/1LH8GgbiQi2nVDe-Z1zfeeqVSgQdP1BjD/view',
                'link' => 'Mirrored.to,http://bit.ly/2ZD7YDL|Google Drive,http://bit.ly/2MK0jhy',
                'res' => '480p',
                'episodes_id' => 7,
                'created_at' => '2019-10-23 13:48:52',
                'updated_at' => '2019-10-23 13:48:52',
            ),
            12 => 
            array (
                'id' => 33,
                'link_org' => 'Mirrored.to,https://www.mirrored.to/files/1HOWKAJY/ExTonansub_WataItta_03_720.mkv_links|Google Drive,https://drive.google.com/file/d/17BYaUnycuMOXpD2GJ568GH1W3dcMGDjG/view',
                'link' => 'Mirrored.to,http://bit.ly/2MHjhW6|Google Drive,http://bit.ly/2MIFROd',
                'res' => '720p',
                'episodes_id' => 8,
                'created_at' => '2019-10-23 13:49:05',
                'updated_at' => '2019-10-23 13:49:05',
            ),
            13 => 
            array (
                'id' => 34,
                'link_org' => 'Mirrored.to,https://www.mirrored.to/files/K9OLWWWD/ExTonansub_WataItta_03_480.mkv_links|Google Drive,https://drive.google.com/file/d/1IiGLk5g_h2YScndE1lQwtwagNITeU7CS/view',
                'link' => 'Mirrored.to,http://bit.ly/2FercpD|Google Drive,http://bit.ly/2MKdBKX',
                'res' => '480p',
                'episodes_id' => 8,
                'created_at' => '2019-10-23 13:49:05',
                'updated_at' => '2019-10-23 13:49:05',
            ),
            14 => 
            array (
                'id' => 35,
                'link_org' => 'Mirrored.to,https://mir.cr/QVRLKF6O|Google Drive,https://drive.google.com/open?id=1WupSLJxphitXaCnQkoNUS3_GLTkmNqfO',
                'link' => 'Mirrored.to,http://bit.ly/2QayeCm|Google Drive,http://bit.ly/2F4Z8Fp',
                'res' => '720p',
                'episodes_id' => 4,
                'created_at' => '2019-10-23 13:49:34',
                'updated_at' => '2019-10-23 13:49:34',
            ),
            15 => 
            array (
                'id' => 36,
                'link_org' => 'Mirrored.to,https://mir.cr/UPCFPNXX|Google Drive,https://drive.google.com/open?id=1Gm7rVQDoSSWMNAm2NWHBIdBF9h7ILnoy',
                'link' => 'Mirrored.to,http://bit.ly/39CaZsC|Google Drive,http://bit.ly/2F8XLpi',
                'res' => '480p',
                'episodes_id' => 4,
                'created_at' => '2019-10-23 13:49:34',
                'updated_at' => '2019-10-23 13:49:34',
            ),
            16 => 
            array (
                'id' => 37,
                'link_org' => 'Mirrored.to,https://mir.cr/0HA0SSYS|Google Drive,https://drive.google.com/open?id=1tXw7jtcacN2r17QqE4fhDUNjAGXTtSNS',
                'link' => 'Mirrored.to,http://bit.ly/3582kux|Google Drive,http://bit.ly/2tgRLbi',
                'res' => '720p',
                'episodes_id' => 5,
                'created_at' => '2019-10-23 13:49:43',
                'updated_at' => '2019-10-23 13:49:43',
            ),
            17 => 
            array (
                'id' => 38,
                'link_org' => 'Mirrored.to,https://www.mirrored.to/files/JZFSOOZ7/TONAN_PSO_EO_-_02_480p.mkv_links|Google Drive,https://drive.google.com/open?id=1qHnkIcg5ojFsEZ6kQmvo7rZFpwJvZSGi',
                'link' => 'Mirrored.to,http://bit.ly/35fcRnA|Google Drive,http://bit.ly/36coi0N',
                'res' => '480p',
                'episodes_id' => 5,
                'created_at' => '2019-10-23 13:49:43',
                'updated_at' => '2019-10-23 13:49:43',
            ),
            18 => 
            array (
                'id' => 39,
                'link_org' => 'Mirrored.to,https://mir.cr/DGF5TB6L|Google Drive,https://drive.google.com/open?id=1Z0VgXg_AYCZGN7YQmJdQPLUpJKg1m5_O',
                'link' => 'Mirrored.to,http://bit.ly/2FawnHb|Google Drive,http://bit.ly/2Qd9IAz',
                'res' => '720p',
                'episodes_id' => 6,
                'created_at' => '2019-10-23 13:49:53',
                'updated_at' => '2019-10-23 13:49:53',
            ),
            19 => 
            array (
                'id' => 40,
                'link_org' => 'Mirrored.to,https://mir.cr/0GFGVTKR|Google Drive,https://drive.google.com/open?id=11G0UcUXEssWTIXYGRDOblvEUkkBrIzvd',
                'link' => 'Mirrored.to,http://bit.ly/2QAiiIA|Google Drive,http://bit.ly/2MIAA9m',
                'res' => '480p',
                'episodes_id' => 6,
                'created_at' => '2019-10-23 13:49:53',
                'updated_at' => '2019-10-23 13:49:53',
            ),
            20 => 
            array (
                'id' => 57,
                'link_org' => 'Multiup,https://multiup.org/795a13b742b2d684088c49ce9064228d|Google Drive,https://drive.google.com/file/d/1QqcdlQKPV_c1WiSR5qUSGbEcI08RL-fm/view',
                'link' => 'Multiup,http://bit.ly/359biHF|Google Drive,http://bit.ly/37q25wo',
                'res' => '720p',
                'episodes_id' => 19,
                'created_at' => '2019-10-23 14:36:36',
                'updated_at' => '2019-10-23 14:36:36',
            ),
            21 => 
            array (
                'id' => 58,
                'link_org' => 'Multiup,https://multiup.org/795a13b742b2d684088c49ce9064228d|Google Drive,https://drive.google.com/file/d/1QqcdlQKPV_c1WiSR5qUSGbEcI08RL-fm/view',
                'link' => 'Multiup,http://bit.ly/359biHF|Google Drive,http://bit.ly/37q25wo',
                'res' => '480p',
                'episodes_id' => 19,
                'created_at' => '2019-10-23 14:36:36',
                'updated_at' => '2019-10-23 14:36:36',
            ),
            22 => 
            array (
                'id' => 59,
                'link_org' => 'Multiup,https://multiup.org/c59a6aa0671c60370485367accc3100d|Google Drive,https://drive.google.com/file/d/1T2YL5fGK_76IPGICkjP1dfsPA8dpMsK8/view',
                'link' => 'Multiup,http://bit.ly/2ZDVnQA|Google Drive,http://bit.ly/39mC8zD',
                'res' => '720p',
                'episodes_id' => 20,
                'created_at' => '2019-10-23 14:48:48',
                'updated_at' => '2019-10-23 14:48:48',
            ),
            23 => 
            array (
                'id' => 60,
                'link_org' => 'Multiup,https://multiup.org/e5215f2bad4e5733794e4aa7870de9f9|Google Drive,https://drive.google.com/file/d/1AGB5YioD0tRub1XHoMlXzRFcB1u79X_s/view',
                'link' => 'Multiup,http://bit.ly/2sBZEYD|Google Drive,http://bit.ly/37mhlKC',
                'res' => '480p',
                'episodes_id' => 20,
                'created_at' => '2019-10-23 14:48:48',
                'updated_at' => '2019-10-23 14:48:48',
            ),
            24 => 
            array (
                'id' => 61,
                'link_org' => 'Multiup,https://multiup.org/24160dd5ef5beff89013bd3fb5d80f11|Google Drive,https://drive.google.com/file/d/1udfxRBcjxlUbt6qXOMYiLPNWbhMTQUnj/view',
                'link' => 'Multiup,http://bit.ly/2SGsrWQ|Google Drive,http://bit.ly/2Q9w0D4',
                'res' => '1080p',
                'episodes_id' => 21,
                'created_at' => '2019-10-23 14:51:54',
                'updated_at' => '2019-10-23 14:51:54',
            ),
            25 => 
            array (
                'id' => 64,
                'link_org' => 'Multiup,https://multiup.org/62b17034de83f11e66daaf564e884f63|Google Drive,https://drive.google.com/file/d/13ZTqaxY-DXsfQDmAgpjXA4ZfWW6IDw16/view',
                'link' => 'Multiup,http://bit.ly/36aGtE4|Google Drive,http://bit.ly/2tmUX4X',
                'res' => '720p',
                'episodes_id' => 12,
                'created_at' => '2019-10-24 11:02:05',
                'updated_at' => '2019-10-24 11:02:05',
            ),
            26 => 
            array (
                'id' => 65,
                'link_org' => 'Multiup,https://multiup.org/699fb9b615e6dd4fb3967cf0978966a9|Google Drive,https://drive.google.com/file/d/10ZMdO17wqpBj_sNqYjkqXaPkLS7ME-kF/view',
                'link' => 'Multiup,http://bit.ly/36dxYrO|Google Drive,http://bit.ly/2Q9MbQW',
                'res' => '480p',
                'episodes_id' => 12,
                'created_at' => '2019-10-24 11:02:05',
                'updated_at' => '2019-10-24 11:02:05',
            ),
            27 => 
            array (
                'id' => 66,
                'link_org' => 'Mega,https://mega.nz/#F!FmRAVSrY!ysBQzdBUi5AUcvgoEaFGQA',
                'link' => 'Mega,http://bit.ly/2F4XhQO',
                'res' => 'sub',
                'episodes_id' => 12,
                'created_at' => '2019-10-24 11:02:05',
                'updated_at' => '2019-10-24 11:02:05',
            ),
            28 => 
            array (
                'id' => 67,
                'link_org' => 'Multiup,https://multiup.org/542ea4da623a0c938a7c5def3175c929|Google Drive,https://drive.google.com/file/d/1yYyg88MrW8j5e9JCFUjYrk-lszl220dY/view',
                'link' => 'Multiup,http://bit.ly/2QByn0u|Google Drive,http://bit.ly/2MIirZm',
                'res' => '1080p',
                'episodes_id' => 13,
                'created_at' => '2019-10-24 11:02:21',
                'updated_at' => '2019-10-24 11:02:21',
            ),
            29 => 
            array (
                'id' => 68,
                'link_org' => 'Multiup,https://multiup.org/998e5613cad8cb3b287e7680e5a3c27f|Google Drive,https://drive.google.com/file/d/1a4BEJZheSYL-SviHSfeqSVzTqe7wWgoA/view',
                'link' => 'Multiup,http://bit.ly/2Fa2HKs|Google Drive,http://bit.ly/37pFXlH',
                'res' => '720p',
                'episodes_id' => 13,
                'created_at' => '2019-10-24 11:02:21',
                'updated_at' => '2019-10-24 11:02:21',
            ),
            30 => 
            array (
                'id' => 69,
                'link_org' => 'Multiup,https://multiup.org/21e8eff38acc2f2028d356460656bbbf|Google Drive,https://drive.google.com/file/d/1aNQF9OuearA-7mnoOeYJcNUAA5cBiqxG/view',
                'link' => 'Multiup,http://bit.ly/2SFXh1H|Google Drive,http://bit.ly/2ZK37AD',
                'res' => '480p',
                'episodes_id' => 13,
                'created_at' => '2019-10-24 11:02:21',
                'updated_at' => '2019-10-24 11:02:21',
            ),
            31 => 
            array (
                'id' => 70,
                'link_org' => 'Mega,https://mega.nz/#F!FmRAVSrY!ysBQzdBUi5AUcvgoEaFGQA',
                'link' => 'Mega,http://bit.ly/2F4XhQO',
                'res' => 'sub',
                'episodes_id' => 13,
                'created_at' => '2019-10-24 11:02:21',
                'updated_at' => '2019-10-24 11:02:21',
            ),
            32 => 
            array (
                'id' => 71,
                'link_org' => 'Multiup,https://multiup.org/c172fdd3b6269f21f70dc2b63313b7d8|Google Drive,https://drive.google.com/file/d/1iK-k853iTLmTzzJXI4lnDqr3kcTWFEzL/view',
                'link' => 'Multiup,http://bit.ly/2Qe66hq|Google Drive,http://bit.ly/2QeKQZg',
                'res' => '1080p',
                'episodes_id' => 14,
                'created_at' => '2019-10-24 11:02:51',
                'updated_at' => '2019-10-24 11:02:51',
            ),
            33 => 
            array (
                'id' => 72,
                'link_org' => 'Multiup,https://multiup.org/765fb979616d73337464f52fc280a0e9|Google Drive,https://drive.google.com/file/d/1bykXqdymQvRlvnIj8k4jV-dSbHVW-Xp7/view',
                'link' => 'Multiup,http://bit.ly/2MIiCE0|Google Drive,http://bit.ly/2Qy5tyu',
                'res' => '720p',
                'episodes_id' => 14,
                'created_at' => '2019-10-24 11:02:51',
                'updated_at' => '2019-10-24 11:02:51',
            ),
            34 => 
            array (
                'id' => 73,
                'link_org' => 'Multiup,https://multiup.org/2fc6f19916be5f3ba364c966bcdf5450|Google Drive,https://drive.google.com/file/d/1UGe4F7JmXWE0M6Auzbuvh3HbVioSJl87/view',
                'link' => 'Multiup,http://bit.ly/36gNoLS|Google Drive,http://bit.ly/2SCyf3D',
                'res' => '480p',
                'episodes_id' => 14,
                'created_at' => '2019-10-24 11:02:51',
                'updated_at' => '2019-10-24 11:02:51',
            ),
            35 => 
            array (
                'id' => 74,
                'link_org' => 'Mega,https://mega.nz/#F!FmRAVSrY!ysBQzdBUi5AUcvgoEaFGQA',
                'link' => 'Mega,http://bit.ly/2F4XhQO',
                'res' => 'sub',
                'episodes_id' => 14,
                'created_at' => '2019-10-24 11:02:51',
                'updated_at' => '2019-10-24 11:02:51',
            ),
            36 => 
            array (
                'id' => 75,
                'link_org' => 'Zippyshare,https://www82.zippyshare.com/v/0Pvzn412/file.html|Google Drive,https://drive.google.com/file/d/1KR06pdd3b6-mL1aSC2ljPbwCg3vch02_/view',
                'link' => 'Zippyshare,http://bit.ly/2SGO4X5|Google Drive,http://bit.ly/2SRl13d',
                'res' => '720p',
                'episodes_id' => 16,
                'created_at' => '2019-10-24 11:20:02',
                'updated_at' => '2019-10-24 11:20:02',
            ),
            37 => 
            array (
                'id' => 76,
                'link_org' => 'Zippyshare,https://www36.zippyshare.com/v/9rqJxGg1/file.html|Google Drive,https://drive.google.com/file/d/1fXLcPfKTXxs7GUYh7cJjqZHl3lYJ1ES_/view',
                'link' => 'Zippyshare,http://bit.ly/2MKivHT|Google Drive,http://bit.ly/2tf5gYW',
                'res' => '480p',
                'episodes_id' => 16,
                'created_at' => '2019-10-24 11:20:02',
                'updated_at' => '2019-10-24 11:20:02',
            ),
            38 => 
            array (
                'id' => 77,
                'link_org' => 'Mega,https://mega.nz/#F!4jZWCSKY!ah31o3grmGhfxqUeqkPVfw',
                'link' => 'Mega,http://bit.ly/2QDBGUU',
                'res' => 'sub',
                'episodes_id' => 16,
                'created_at' => '2019-10-24 11:20:02',
                'updated_at' => '2019-10-24 11:20:02',
            ),
            39 => 
            array (
                'id' => 78,
                'link_org' => 'Multiup,https://multiup.org/download/6c3d6f7644ebc1fe26acb4f38fc5924b/ExTonansubs_Azur_Lane_03_720p.mkv|Google Drive,https://drive.google.com/file/d/1Gxm6Ds6RPgoCP7QKq7z0d6Tv8j9_Pcky/view',
                'link' => 'Multiup,http://bit.ly/2SHSRYm|Google Drive,http://bit.ly/2FerJI9',
                'res' => '720p',
                'episodes_id' => 17,
                'created_at' => '2019-10-24 11:20:17',
                'updated_at' => '2019-10-24 11:20:17',
            ),
            40 => 
            array (
                'id' => 79,
                'link_org' => 'Multiup,https://multiup.org/download/e3289eacfcbd6bc770575a6f82495ee2/ExTonansubs_Azur_Lane_03_480p.mkv|Google Drive,https://drive.google.com/file/d/1YSb-EsKiWcvSWk10KoKbz4jg8sXb-xjX/view',
                'link' => 'Multiup,http://bit.ly/2MGgJaD|Google Drive,http://bit.ly/2SGObBZ',
                'res' => '480p',
                'episodes_id' => 17,
                'created_at' => '2019-10-24 11:20:17',
                'updated_at' => '2019-10-24 11:20:17',
            ),
            41 => 
            array (
                'id' => 80,
                'link_org' => 'Mega,https://mega.nz/#F!4jZWCSKY!ah31o3grmGhfxqUeqkPVfw',
                'link' => 'Mega,http://bit.ly/2QDBGUU',
                'res' => 'sub',
                'episodes_id' => 17,
                'created_at' => '2019-10-24 11:20:17',
                'updated_at' => '2019-10-24 11:20:17',
            ),
            42 => 
            array (
                'id' => 81,
                'link_org' => 'Multiup,https://multiup.org/21b784f093306c1774a0157b67145d25|Google Drive,https://drive.google.com/file/d/1DS54DZ4PvaIiYynm58iRIBgRthucvgzW/view',
                'link' => 'Multiup,http://bit.ly/2MGQNvS|Google Drive,http://bit.ly/39upBu0',
                'res' => '720p',
                'episodes_id' => 15,
                'created_at' => '2019-10-24 11:39:40',
                'updated_at' => '2019-10-24 11:39:40',
            ),
            43 => 
            array (
                'id' => 82,
                'link_org' => 'Multiup,https://multiup.org/13bc50ad3b43fea73ea2d00ddba73830|Google Drive,https://drive.google.com/file/d/1WSsN7ixRIdc-H6yfDULhOshojY_J8vgJ/view',
                'link' => 'Multiup,http://bit.ly/2QawgBO|Google Drive,http://bit.ly/2MIMvE6',
                'res' => '480p',
                'episodes_id' => 15,
                'created_at' => '2019-10-24 11:39:40',
                'updated_at' => '2019-10-24 11:39:40',
            ),
            44 => 
            array (
                'id' => 83,
                'link_org' => 'Mega,https://mega.nz/#F!4jZWCSKY!ah31o3grmGhfxqUeqkPVfw',
                'link' => 'Mega,http://bit.ly/2QDBGUU',
                'res' => 'sub',
                'episodes_id' => 15,
                'created_at' => '2019-10-24 11:39:40',
                'updated_at' => '2019-10-24 11:39:40',
            ),
            45 => 
            array (
                'id' => 129,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1geVBEB2ojLbZXLyfAUSnDNvfCCy0sTgQ/view?usp=drivesdk|Zippyshare,https://www63.zippyshare.com/v/1M5yk58m/file.html|Solidfiles,https://www.solidfiles.com/v/aZ5ZyQy2k5eyV',
                'link' => 'Google Drive,http://bit.ly/2tf5uiK|Zippyshare,http://bit.ly/2ZDVH1K|Solidfiles,http://bit.ly/37znVxF',
                'res' => '720p',
                'episodes_id' => 24,
                'created_at' => '2019-10-26 04:32:37',
                'updated_at' => '2019-10-26 04:32:37',
            ),
            46 => 
            array (
                'id' => 130,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1V4w3UWCD5l-gqjWdFX7qN6U1WN9w0x0o/view?usp=drivesdk|Zippyshare,https://www107.zippyshare.com/v/AhEk3hyi/file.html|Solidfiles,https://www.solidfiles.com/v/WqNqVQdvZ33Yx',
                'link' => 'Google Drive,http://bit.ly/37zo2JB|Zippyshare,http://bit.ly/36eC6Yn|Solidfiles,http://bit.ly/2syPDeM',
                'res' => '480p',
                'episodes_id' => 24,
                'created_at' => '2019-10-26 04:32:37',
                'updated_at' => '2019-10-26 04:32:37',
            ),
            47 => 
            array (
                'id' => 137,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/12LiPXGJNxZ6wSWO0PiwxJHkrARX6yBsp/view?usp=drivesdk|Zippyshare,https://www118.zippyshare.com/v/fBIjX1hf/file.html|Solidfiles,https://www.solidfiles.com/v/4awa6MZvdjR2N',
                'link' => 'Google Drive,http://bit.ly/39sR1jS|Zippyshare,http://bit.ly/2QddOZx|Solidfiles,http://bit.ly/2SFLMY1',
                'res' => '720p',
                'episodes_id' => 26,
                'created_at' => '2019-10-26 04:46:08',
                'updated_at' => '2019-10-26 04:46:08',
            ),
            48 => 
            array (
                'id' => 138,
                'link_org' => 'Multiup,https://multiup.org/f21af3834d1632b61dd1ccca1549c675|Google Drive,https://drive.google.com/file/d/1dkYLhVEVutF015pAWQGTXSrnFDpYZNWr/view?usp=drivesdk|Mirror,https://mir.cr/PJ0E7XO9',
                'link' => 'Multiup,http://bit.ly/36ezgTj|Google Drive,http://bit.ly/2QcVjEw|Mirror,http://bit.ly/2QFIUbg',
                'res' => '480p',
                'episodes_id' => 26,
                'created_at' => '2019-10-26 04:46:08',
                'updated_at' => '2019-10-26 04:46:08',
            ),
            49 => 
            array (
                'id' => 139,
                'link_org' => 'Mega,https://mega.nz/#F!8iBCDIjA!A3riN4wqvPPNw4at4P_Nlg',
                'link' => 'Mega,http://bit.ly/2F9eloS',
                'res' => 'sub',
                'episodes_id' => 26,
                'created_at' => '2019-10-26 04:46:08',
                'updated_at' => '2019-10-26 04:46:08',
            ),
            50 => 
            array (
                'id' => 140,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1B4VskkPORM1lQuvemAtp26_PD5KUgO2X/view?usp=drivesdk|Zippyshare,https://www50.zippyshare.com/v/KbmPfxCN/file.html|Solidfiles,https://www.solidfiles.com/v/mXzXrNwryPKpM',
                'link' => 'Google Drive,http://bit.ly/39rq3ZL|Zippyshare,http://bit.ly/2QByV6y|Solidfiles,http://bit.ly/2SHST28',
                'res' => '720p',
                'episodes_id' => 25,
                'created_at' => '2019-10-26 04:48:00',
                'updated_at' => '2019-10-26 04:48:00',
            ),
            51 => 
            array (
                'id' => 141,
                'link_org' => 'Multiup,https://multiup.org/fb004d3d960643ae9abafe65189b57ef|Google Drive,https://drive.google.com/file/d/1nfmKuEzEJRRsxKE4diS7xP8hCZ4e3Stf/view?usp=drivesdk|Mirror,https://mir.cr/1P4GYREQ',
                'link' => 'Multiup,http://bit.ly/355vCtG|Google Drive,http://bit.ly/2F4ZVpT|Mirror,http://bit.ly/2MIBrqA',
                'res' => '480p',
                'episodes_id' => 25,
                'created_at' => '2019-10-26 04:48:00',
                'updated_at' => '2019-10-26 04:48:00',
            ),
            52 => 
            array (
                'id' => 142,
                'link_org' => 'Mega,https://mega.nz/#F!8iBCDIjA!A3riN4wqvPPNw4at4P_Nlg',
                'link' => 'Mega,http://bit.ly/2F9eloS',
                'res' => 'sub',
                'episodes_id' => 25,
                'created_at' => '2019-10-26 04:48:00',
                'updated_at' => '2019-10-26 04:48:00',
            ),
            53 => 
            array (
                'id' => 143,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1Ch7B0dVWXNH-HveCm9-zZQkBgyOQbGzY/view?usp=drivesdk|Zippyshare,https://www70.zippyshare.com/v/oAB0aC1t/file.html|Solidfiles,https://www.solidfiles.com/v/DKaKX54pAPNdK',
                'link' => 'Google Drive,http://bit.ly/2tf5Cie|Zippyshare,http://bit.ly/2QaDB4g|Solidfiles,http://bit.ly/2rM7IG2',
                'res' => '720p',
                'episodes_id' => 22,
                'created_at' => '2019-10-26 04:50:01',
                'updated_at' => '2019-10-26 04:50:01',
            ),
            54 => 
            array (
                'id' => 144,
                'link_org' => 'Multiup,https://multiup.org/6beaa8964bef2ffe52048e87056cb32e|Google Drive,https://drive.google.com/file/d/1yR_qA0E-o94LNUoY0duO9CwjcKTyRgbK/view?usp=drivesdk|Mirror,https://mir.cr/0REJ7CLM',
                'link' => 'Multiup,http://bit.ly/2QcVuQc|Google Drive,http://bit.ly/2F4XUd8|Mirror,http://bit.ly/37t0tC5',
                'res' => '480p',
                'episodes_id' => 22,
                'created_at' => '2019-10-26 04:50:01',
                'updated_at' => '2019-10-26 04:50:01',
            ),
            55 => 
            array (
                'id' => 145,
                'link_org' => 'Mega,https://mega.nz/#F!8iBCDIjA!A3riN4wqvPPNw4at4P_Nlg',
                'link' => 'Mega,http://bit.ly/2F9eloS',
                'res' => 'sub',
                'episodes_id' => 22,
                'created_at' => '2019-10-26 04:50:01',
                'updated_at' => '2019-10-26 04:50:01',
            ),
            56 => 
            array (
                'id' => 146,
                'link_org' => 'Multiup,https://multiup.org/a719405f96239a56820e83821745a92e|Google Drive,https://drive.google.com/file/d/1ygi_FistSd-PvXcalTCecQTfIoR2D0Ex/view?usp=drivesdk|Mirror,https://mir.cr/082YQM1Q',
                'link' => 'Multiup,http://bit.ly/2sqYoYA|Google Drive,http://bit.ly/36cYIIZ|Mirror,http://bit.ly/2QaDIwI',
                'res' => '720p',
                'episodes_id' => 23,
                'created_at' => '2019-10-26 05:57:31',
                'updated_at' => '2019-10-26 05:57:31',
            ),
            57 => 
            array (
                'id' => 147,
                'link_org' => 'Multiup,https://multiup.org/012afda2ee2ce2162629471863b2a45d|Google Drive,https://drive.google.com/file/d/1JP8II_YcAd1lgtRaXpfKBJ_qwF1Fsm2D/view?usp=drivesdk|Mirror,https://mir.cr/OAG42JDD',
                'link' => 'Multiup,http://bit.ly/2ZDVVpC|Google Drive,http://bit.ly/2F9ES5m|Mirror,http://bit.ly/2rJC0Jx',
                'res' => '480p',
                'episodes_id' => 23,
                'created_at' => '2019-10-26 05:57:31',
                'updated_at' => '2019-10-26 05:57:31',
            ),
            58 => 
            array (
                'id' => 148,
                'link_org' => 'Mega,https://mega.nz/#F!4jZWCSKY!ah31o3grmGhfxqUeqkPVfw',
                'link' => 'Mega,http://bit.ly/2QDBGUU',
                'res' => 'sub',
                'episodes_id' => 23,
                'created_at' => '2019-10-26 05:57:31',
                'updated_at' => '2019-10-26 05:57:31',
            ),
            59 => 
            array (
                'id' => 155,
                'link_org' => 'Mirrored.to,https://mir.cr/0T6XSZNT|Google Drive,https://drive.google.com/open?id=1BCg3OvWfJkCElXzGW21H-79C0TupjOu_',
                'link' => 'Mirrored.to,http://bit.ly/2QBz8GS|Google Drive,http://bit.ly/35aMhfr',
                'res' => '720p',
                'episodes_id' => 30,
                'created_at' => '2019-10-26 20:20:21',
                'updated_at' => '2019-10-26 20:20:21',
            ),
            60 => 
            array (
                'id' => 156,
                'link_org' => 'Mirrored.to,https://mir.cr/7OXFZJDL|Google Drive,https://drive.google.com/open?id=1wCZcGeQ4qpsEI7fLbVm0eYScIlRnMhW8',
                'link' => 'Mirrored.to,http://bit.ly/2MGh7pB|Google Drive,http://bit.ly/39sFUHw',
                'res' => '480p',
                'episodes_id' => 30,
                'created_at' => '2019-10-26 20:20:21',
                'updated_at' => '2019-10-26 20:20:21',
            ),
            61 => 
            array (
                'id' => 157,
                'link_org' => 'Mirrored.to,https://mir.cr/QUF1AYVU|Google Drive,https://drive.google.com/open?id=1NcKH78bn-PQJbtPEWI5rgV7T30uL_X5h',
                'link' => 'Mirrored.to,http://bit.ly/37gUiRs|Google Drive,http://bit.ly/2FkH1eR',
                'res' => '720p',
                'episodes_id' => 31,
                'created_at' => '2019-10-26 20:21:26',
                'updated_at' => '2019-10-26 20:21:26',
            ),
            62 => 
            array (
                'id' => 158,
                'link_org' => 'Mirrored.to,https://mir.cr/1TERFZ6C|Google Drive,https://drive.google.com/open?id=1Igy7GeyNBuGqcvUk42MLSeSbWFI8zPAA',
                'link' => 'Mirrored.to,http://bit.ly/2ME2QtN|Google Drive,http://bit.ly/2ZERoDj',
                'res' => '480p',
                'episodes_id' => 31,
                'created_at' => '2019-10-26 20:21:26',
                'updated_at' => '2019-10-26 20:21:26',
            ),
            63 => 
            array (
                'id' => 159,
                'link_org' => 'Mirrored.to,https://mir.cr/0C93PRAC|Google Drive,https://drive.google.com/open?id=1v1nJc42coFJgStus9QOClC9aKsq8eJE7',
                'link' => 'Mirrored.to,http://bit.ly/2SGOGMn|Google Drive,http://bit.ly/2sA8oi4',
                'res' => '720p',
                'episodes_id' => 32,
                'created_at' => '2019-10-26 20:22:36',
                'updated_at' => '2019-10-26 20:22:36',
            ),
            64 => 
            array (
                'id' => 160,
                'link_org' => 'Mirrored.to,https://mir.cr/11ITTT2F|Google Drive,https://drive.google.com/open?id=1nUGM3nFTJRMx0jjwZZ2TK2mU1o5ocKL_',
                'link' => 'Mirrored.to,http://bit.ly/2MGRDZy|Google Drive,http://bit.ly/2rNh9Fe',
                'res' => '480p',
                'episodes_id' => 32,
                'created_at' => '2019-10-26 20:22:36',
                'updated_at' => '2019-10-26 20:22:36',
            ),
            65 => 
            array (
                'id' => 167,
                'link_org' => 'Mirrored.to,https://mir.cr/0KSKMR7A|Google Drive,https://drive.google.com/file/d/1THrUMU-gOyGAxl09aI6UNHMJThqeFVud/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2SH36fa|Google Drive,http://bit.ly/2MJJZh3',
                'res' => '720p',
                'episodes_id' => 35,
                'created_at' => '2019-10-28 10:21:21',
                'updated_at' => '2019-10-28 10:21:21',
            ),
            66 => 
            array (
                'id' => 168,
                'link_org' => 'Mirrored.to,https://mir.cr/IAVX3RX0|Google Drive,https://drive.google.com/file/d/1ACIRfZl5_WHGUgzd1SlA7E4Gtkxqz_6W/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2Qz48r3|Google Drive,http://bit.ly/37sDkzM',
                'res' => '480p',
                'episodes_id' => 35,
                'created_at' => '2019-10-28 10:21:21',
                'updated_at' => '2019-10-28 10:21:21',
            ),
            67 => 
            array (
                'id' => 169,
                'link_org' => 'Mirrored.to,https://mir.cr/0NNVUKVX|Google Drive,https://drive.google.com/file/d/19SRaTaoM7TZTonJWW4cQCDPHpVcARYYI/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/358s61z|Google Drive,http://bit.ly/2MK3g1C',
                'res' => '720p',
                'episodes_id' => 34,
                'created_at' => '2019-10-28 10:22:19',
                'updated_at' => '2019-10-28 10:22:19',
            ),
            68 => 
            array (
                'id' => 170,
                'link_org' => 'Mirrored.to,https://mir.cr/1HVBPSSY|Google Drive,https://drive.google.com/file/d/1zOiUoMmPEt-umb982A0Wbx5nXurzV-5Y/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2QMuKVR|Google Drive,http://bit.ly/2u8S607',
                'res' => '480p',
                'episodes_id' => 34,
                'created_at' => '2019-10-28 10:22:19',
                'updated_at' => '2019-10-28 10:22:19',
            ),
            69 => 
            array (
                'id' => 171,
                'link_org' => 'Mirrored.to,https://mir.cr/0ZHKXEXB|Google Drive,https://drive.google.com/file/d/1anWwyDrXJ3bnDCkwW_A0Up3UgpvLIqbW/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2F7qz1d|Google Drive,http://bit.ly/39mEUVz',
                'res' => '720p',
                'episodes_id' => 33,
                'created_at' => '2019-10-28 10:23:07',
                'updated_at' => '2019-10-28 10:23:07',
            ),
            70 => 
            array (
                'id' => 172,
                'link_org' => 'Mirrored.to,https://mir.cr/TWERXLGY|Google Drive,https://drive.google.com/file/d/1F9gTs4Te888T63ucKjH84-M3O3B-R0KP/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2QzfCuH|Google Drive,http://bit.ly/2SIYEwC',
                'res' => '480p',
                'episodes_id' => 33,
                'created_at' => '2019-10-28 10:23:07',
                'updated_at' => '2019-10-28 10:23:07',
            ),
            71 => 
            array (
                'id' => 173,
                'link_org' => 'Mirrored.to,https://mir.cr/BOXOP5XT|Google Drive,https://drive.google.com/open?id=1ubpfoTPjEpaLTUyF2ByDuCtT5IB-FVTW',
                'link' => 'Mirrored.to,http://bit.ly/2SN76L8|Google Drive,http://bit.ly/2SHVmJW',
                'res' => '720p',
                'episodes_id' => 36,
                'created_at' => '2019-10-28 17:30:36',
                'updated_at' => '2019-10-28 17:30:36',
            ),
            72 => 
            array (
                'id' => 174,
                'link_org' => 'Mirrored.to,https://mir.cr/1QTLBFJG|Google Drive,https://drive.google.com/open?id=1w7-SGghyiDvWY-iXkNtl07FARA5VpLVi',
                'link' => 'Mirrored.to,http://bit.ly/2Qbqeki|Google Drive,http://bit.ly/2ZDY8Bq',
                'res' => '480p',
                'episodes_id' => 36,
                'created_at' => '2019-10-28 17:30:36',
                'updated_at' => '2019-10-28 17:30:36',
            ),
            73 => 
            array (
                'id' => 185,
                'link_org' => 'Mirrored.to,https://mir.cr/KTZH1XEJ|Google Drive,https://drive.google.com/file/d/1M3EofwBfhvy_hSCjXnYhpllrA1dY8hx_/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2SFIa8z|Google Drive,http://bit.ly/2SGvhes',
                'res' => '720p',
                'episodes_id' => 39,
                'created_at' => '2019-10-29 04:31:59',
                'updated_at' => '2019-10-29 04:31:59',
            ),
            74 => 
            array (
                'id' => 186,
                'link_org' => 'Mirrored.to,https://mir.cr/0P8XS5XO|Google Drive,https://drive.google.com/file/d/1NNaxVqqfrXZfoTZA6a0mvtY_MaMn0g19/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2MK7hmP|Google Drive,http://bit.ly/2SGvmig',
                'res' => '480p',
                'episodes_id' => 39,
                'created_at' => '2019-10-29 04:31:59',
                'updated_at' => '2019-10-29 04:31:59',
            ),
            75 => 
            array (
                'id' => 187,
                'link_org' => 'Mirrored.to,https://mir.cr/ZP0ZLAYV|Google Drive,https://drive.google.com/file/d/1AUvERgaRsL82czFp7-r28Io1E3Sygu17/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/39sW3wH|Google Drive,http://bit.ly/2SCBNmt',
                'res' => '720p',
                'episodes_id' => 38,
                'created_at' => '2019-10-29 04:32:58',
                'updated_at' => '2019-10-29 04:32:58',
            ),
            76 => 
            array (
                'id' => 188,
                'link_org' => 'Mirrored.to,https://mir.cr/1YOMFZID|Google Drive,https://drive.google.com/file/d/1WcBFhbDRYFad6jayns0Xl0Kn1mHNjwE7/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2QE2Lr0|Google Drive,http://bit.ly/36eu1TA',
                'res' => '480p',
                'episodes_id' => 38,
                'created_at' => '2019-10-29 04:32:58',
                'updated_at' => '2019-10-29 04:32:58',
            ),
            77 => 
            array (
                'id' => 191,
                'link_org' => 'Mirrored.to,https://mir.cr/0CSLSNCP|Google Drive,https://drive.google.com/file/d/1ZFqDmGN9SlZCRdlbKcNs4m5FEzwR7Mmc/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/36dBh2a|Google Drive,http://bit.ly/39uJlNR',
                'res' => '720p',
                'episodes_id' => 37,
                'created_at' => '2019-10-29 04:35:23',
                'updated_at' => '2019-10-29 04:35:23',
            ),
            78 => 
            array (
                'id' => 192,
                'link_org' => 'Mirrored.to,https://mir.cr/1ZEIL5ZI|Google Drive,https://drive.google.com/file/d/1bDjbu0gzmqHdRxuA3V_SDpQc55bc3_ht/view?usp=drivesdk',
                'link' => 'Mirrored.to,http://bit.ly/2tgUUI8|Google Drive,http://bit.ly/2SN3itH',
                'res' => '480p',
                'episodes_id' => 37,
                'created_at' => '2019-10-29 04:35:23',
                'updated_at' => '2019-10-29 04:35:23',
            ),
            79 => 
            array (
                'id' => 200,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1hn4AZRzJrOUEyxw2zETXSGzrfufla9Ng/view?usp=drivesdk|Acefile,https://acefile.co/f/13880443/extonansubs_sao_alicization_wou_03_1080p-mkv',
                'link' => 'Google Drive,http://bit.ly/36gQb7O|Acefile,http://bit.ly/2QvNIjc',
                'res' => '1080p',
                'episodes_id' => 41,
                'created_at' => '2019-10-29 05:19:37',
                'updated_at' => '2019-10-29 05:19:37',
            ),
            80 => 
            array (
                'id' => 201,
                'link_org' => 'Zippyshare,https://www75.zippyshare.com/v/YS3EGQyx/file.html|Solidfiles,https://www.solidfiles.com/v/NarPP8a3Vwz3j|Google Drive,https://drive.google.com/file/d/14YB89m4kESl8HtgMG2C7WvoofMp8C3In/view?usp=drivesdk',
                'link' => 'Zippyshare,http://bit.ly/2QsPWzG|Solidfiles,http://bit.ly/2ZEFoSl|Google Drive,http://bit.ly/39sWfMr',
                'res' => '720p',
                'episodes_id' => 41,
                'created_at' => '2019-10-29 05:19:37',
                'updated_at' => '2019-10-29 05:19:37',
            ),
            81 => 
            array (
                'id' => 202,
                'link_org' => 'Zippyshare,https://www105.zippyshare.com/v/bTkYwmhI/file.html|Solidfiles,https://www.solidfiles.com/v/xKkQA835mZBqq|Google Drive,https://drive.google.com/file/d/134TU3jwl3xfue_yS1T9-TrEgiCYt3tz-/view?usp=drivesdk',
                'link' => 'Zippyshare,http://bit.ly/2tltcdm|Solidfiles,http://bit.ly/35cLyKs|Google Drive,http://bit.ly/2ZD86Da',
                'res' => '480p',
                'episodes_id' => 41,
                'created_at' => '2019-10-29 05:19:37',
                'updated_at' => '2019-10-29 05:19:37',
            ),
            82 => 
            array (
                'id' => 203,
                'link_org' => 'Mega,https://mega.nz/#F!FmRAVSrY!ysBQzdBUi5AUcvgoEaFGQA',
                'link' => 'Mega,http://bit.ly/2F4XhQO',
                'res' => 'sub',
                'episodes_id' => 41,
                'created_at' => '2019-10-29 05:19:38',
                'updated_at' => '2019-10-29 05:19:38',
            ),
            83 => 
            array (
                'id' => 206,
                'link_org' => 'Mirrored.to,https://mir.cr/K7HFMWNC|Google Drive,https://drive.google.com/open?id=1VJsM_Eo1ockwbro16FHOB-S3altqJZH-',
                'link' => 'Mirrored.to,http://bit.ly/2QD62Hn|Google Drive,http://bit.ly/2ZCDf9X',
                'res' => '720p',
                'episodes_id' => 42,
                'created_at' => '2019-10-30 16:02:51',
                'updated_at' => '2019-10-30 16:02:51',
            ),
            84 => 
            array (
                'id' => 207,
                'link_org' => 'Mirrored.to,https://mir.cr/0GBFYXSY|Google Drive,https://drive.google.com/open?id=18giN8Hn5otSXUh20H76wUbMxyOChq3er',
                'link' => 'Mirrored.to,http://bit.ly/2SH3JW4|Google Drive,http://bit.ly/37ls0VZ',
                'res' => '480p',
                'episodes_id' => 42,
                'created_at' => '2019-10-30 16:02:51',
                'updated_at' => '2019-10-30 16:02:51',
            ),
            85 => 
            array (
                'id' => 208,
                'link_org' => 'Acefile,https://acefile.co/f/13954374/tonan-radiant-s2-02-720p-mkv|Google Drive,https://drive.google.com/file/d/10alDD6xSpVSFZVSmGtn_dmy0gWll01iE/view?usp=drivesdk',
                'link' => 'Acefile,http://bit.ly/2teBJia|Google Drive,http://bit.ly/2MHmzbU',
                'res' => '720p',
                'episodes_id' => 43,
                'created_at' => '2019-10-31 00:45:59',
                'updated_at' => '2019-10-31 00:45:59',
            ),
            86 => 
            array (
                'id' => 209,
                'link_org' => 'Acefile,https://acefile.co/f/13954407/tonan-radiant-s2-02-480p-mkv|Google Drive,https://drive.google.com/file/d/1QrOdjUz42B4b7vfZPYttu3T6_6k1ai2v/view?usp=drivesdk',
                'link' => 'Acefile,http://bit.ly/2QeO1Aa|Google Drive,http://bit.ly/2Qxpbug',
                'res' => '480p',
                'episodes_id' => 43,
                'created_at' => '2019-10-31 00:45:59',
                'updated_at' => '2019-10-31 00:45:59',
            ),
            87 => 
            array (
                'id' => 214,
                'link_org' => 'Mirror,https://mir.cr/OIVI5XTY|Google Drive,https://drive.google.com/file/d/1B3vO1tvpCdlaPAv7t4XQAwTcNQvjMSRQ/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/39vFdgD|Google Drive,http://bit.ly/36dMyzA',
                'res' => '720p',
                'episodes_id' => 45,
                'created_at' => '2019-10-31 00:55:41',
                'updated_at' => '2019-10-31 00:55:41',
            ),
            88 => 
            array (
                'id' => 215,
                'link_org' => 'Mirror,https://mir.cr/RC7KVJPX|Google Drive,https://drive.google.com/file/d/1XZAmE0QQTXKNengYJyWp5-wMY5jU8wL4/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/35dCgOC|Google Drive,http://bit.ly/2QsQaa0',
                'res' => '480p',
                'episodes_id' => 45,
                'created_at' => '2019-10-31 00:55:41',
                'updated_at' => '2019-10-31 00:55:41',
            ),
            89 => 
            array (
                'id' => 216,
                'link_org' => 'Mirror,https://mir.cr/N8RAV2NI|Google Drive,https://drive.google.com/file/d/1pNob8OSlEUiXFA_VfrDPERMGbsU0XGqp/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2u78wWO|Google Drive,http://bit.ly/2tmYro3',
                'res' => '720p',
                'episodes_id' => 44,
                'created_at' => '2019-10-31 00:56:21',
                'updated_at' => '2019-10-31 00:56:21',
            ),
            90 => 
            array (
                'id' => 217,
                'link_org' => 'Mirror,https://mir.cr/T8GGPJ0Q|Google Drive,https://drive.google.com/file/d/1d389s0-uEq6SY6T7KJZmsgEB98iv6Ysi/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/36oRwJC|Google Drive,http://bit.ly/2Qd71Pf',
                'res' => '480p',
                'episodes_id' => 44,
                'created_at' => '2019-10-31 00:56:21',
                'updated_at' => '2019-10-31 00:56:21',
            ),
            91 => 
            array (
                'id' => 221,
                'link_org' => 'Mirror,https://mir.cr/QTTQ73XV|Google Drive,https://drive.google.com/file/d/1Oyc3h8G2uk4ADhgE7PNMpf8dE8Lk38GK/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2Qy1i5I|Google Drive,http://bit.ly/35cxReT',
                'res' => '720p',
                'episodes_id' => 46,
                'created_at' => '2019-11-01 05:20:58',
                'updated_at' => '2019-11-01 05:20:58',
            ),
            92 => 
            array (
                'id' => 222,
                'link_org' => 'Mirror,https://mir.cr/1KOFG0IQ|Google Drive,https://drive.google.com/file/d/1R4PAK36PVp4knW1eJYqdAGOtEYzS-K4V/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/35hUoHe|Google Drive,http://bit.ly/35hwYBP',
                'res' => '480p',
                'episodes_id' => 46,
                'created_at' => '2019-11-01 05:20:58',
                'updated_at' => '2019-11-01 05:20:58',
            ),
            93 => 
            array (
                'id' => 223,
                'link_org' => 'Mega,https://mega.nz/#F!4jZWCSKY!ah31o3grmGhfxqUeqkPVfw',
                'link' => 'Mega,http://bit.ly/2QDBGUU',
                'res' => 'sub',
                'episodes_id' => 46,
                'created_at' => '2019-11-01 05:20:58',
                'updated_at' => '2019-11-01 05:20:58',
            ),
            94 => 
            array (
                'id' => 226,
                'link_org' => 'Mirror,https://mir.cr/1RG8DXXI|Google Drive,https://drive.google.com/file/d/1276PROfeyCb08yoxEWnqwgzwf0efwsxe/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2tltssQ|Google Drive,http://bit.ly/2sAb4fC',
                'res' => '720p',
                'episodes_id' => 47,
                'created_at' => '2019-11-01 19:40:56',
                'updated_at' => '2019-11-01 19:40:56',
            ),
            95 => 
            array (
                'id' => 227,
                'link_org' => 'Mirror,https://mir.cr/T9KRA109|Google Drive,https://drive.google.com/file/d/1jYstA2ewB4co3oNOJaPxMV9rfKMSYfSn/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2MHnbOK|Google Drive,http://bit.ly/2F6T677',
                'res' => '480p',
                'episodes_id' => 47,
                'created_at' => '2019-11-01 19:40:56',
                'updated_at' => '2019-11-01 19:40:56',
            ),
            96 => 
            array (
                'id' => 230,
                'link_org' => 'Mirror,https://mir.cr/IUIILEGL|Google Drive,https://drive.google.com/file/d/15LnsgnvUoDJUYf1uJpy1tZLIsSkD81st/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2F7FxnR|Google Drive,http://bit.ly/36gQpMc',
                'res' => '720p',
                'episodes_id' => 48,
                'created_at' => '2019-11-01 19:54:22',
                'updated_at' => '2019-11-01 19:54:22',
            ),
            97 => 
            array (
                'id' => 231,
                'link_org' => 'Mirror,https://mir.cr/XDRAPE1F|Google Drive,https://drive.google.com/file/d/1oHb4FL-qREoEJaPcDJv--9e2Z0u8txz6/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/36gQsaQ|Google Drive,http://bit.ly/368a7tv',
                'res' => '480p',
                'episodes_id' => 48,
                'created_at' => '2019-11-01 19:54:22',
                'updated_at' => '2019-11-01 19:54:22',
            ),
            98 => 
            array (
                'id' => 234,
                'link_org' => 'Mirror,https://mir.cr/1K77YEDW|Google Drive,https://drive.google.com/file/d/1o2_-IQy2vVye2rQZQTcPdBrxOiQ0nITf/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2Qc6kpt|Google Drive,http://bit.ly/37sLU1p',
                'res' => '720p',
                'episodes_id' => 49,
                'created_at' => '2019-11-02 06:08:59',
                'updated_at' => '2019-11-02 06:08:59',
            ),
            99 => 
            array (
                'id' => 235,
                'link_org' => 'Mirror,https://mir.cr/LUOCZIYU|Google Drive,https://drive.google.com/file/d/1Jw2SA9YKB_idOaNy8kuFsRhUw29kf0-b/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/36gQtLW|Google Drive,http://bit.ly/2sAhrzA',
                'res' => '480p',
                'episodes_id' => 49,
                'created_at' => '2019-11-02 06:08:59',
                'updated_at' => '2019-11-02 06:08:59',
            ),
            100 => 
            array (
                'id' => 239,
                'link_org' => 'Mirror,https://mir.cr/RD6E6EAK|Google Drive,https://drive.google.com/file/d/1xG9oqHn3Mgtl1GQ6_0Oacyj87ltldmbp/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2SIZhpY|Google Drive,http://bit.ly/2QD6p4J',
                'res' => '720p',
                'episodes_id' => 50,
                'created_at' => '2019-11-02 06:21:04',
                'updated_at' => '2019-11-02 06:21:04',
            ),
            101 => 
            array (
                'id' => 240,
                'link_org' => 'Mirror,https://mir.cr/0YELZZAJ|Google Drive,https://drive.google.com/file/d/1WbUTU13dSBeF7D4kIhMSOmhT0px4HLDx/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2ZLIfJq|Google Drive,http://bit.ly/2ZBFESc',
                'res' => '480p',
                'episodes_id' => 50,
                'created_at' => '2019-11-02 06:21:04',
                'updated_at' => '2019-11-02 06:21:04',
            ),
            102 => 
            array (
                'id' => 241,
                'link_org' => 'Mega,https://mega.nz/#F!8iBCDIjA!A3riN4wqvPPNw4at4P_Nlg',
                'link' => 'Mega,http://bit.ly/2F9eloS',
                'res' => 'sub',
                'episodes_id' => 50,
                'created_at' => '2019-11-02 06:21:04',
                'updated_at' => '2019-11-02 06:21:04',
            ),
            103 => 
            array (
                'id' => 244,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1XyOy6p-LpZ6rLEMVLFE-AX_qg4rQlpQ6 | Mirrored.to,https://mir.cr/CXEUADDV',
                'link' => 'Google Drive,http://bit.ly/2Qd7l0p| Mirrored.to,http://bit.ly/2SN3U2t',
                'res' => '720p',
                'episodes_id' => 51,
                'created_at' => '2019-11-03 05:35:43',
                'updated_at' => '2019-11-03 05:35:43',
            ),
            104 => 
            array (
                'id' => 245,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1x5oVrKUaOXB08CNYIkX9PQtTuWS_rLnE | Mirrored.to,https://mir.cr/1KDFV1MW',
                'link' => 'Google Drive,http://bit.ly/2MFObhC| Mirrored.to,http://bit.ly/2FaMfcV',
                'res' => '480p',
                'episodes_id' => 51,
                'created_at' => '2019-11-03 05:35:43',
                'updated_at' => '2019-11-03 05:35:43',
            ),
            105 => 
            array (
                'id' => 246,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1ErHYfm2Xide7lMJaBoqykvGL506kcNxl | Mirrored.to,https://mir.cr/LCJWTP35',
                'link' => 'Google Drive,http://bit.ly/2Fa5WS8| Mirrored.to,http://bit.ly/36nwFXv',
                'res' => '720p',
                'episodes_id' => 52,
                'created_at' => '2019-11-03 05:37:43',
                'updated_at' => '2019-11-03 05:37:43',
            ),
            106 => 
            array (
                'id' => 247,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1rTh8HY3GQSJlR-lkgLQaT0oCJZjC3ivP | Mirrored.to,https://mir.cr/1BAD9HVY',
                'link' => 'Google Drive,http://bit.ly/39tCJzB| Mirrored.to,http://bit.ly/2Qy8Ghw',
                'res' => '480p',
                'episodes_id' => 52,
                'created_at' => '2019-11-03 05:37:43',
                'updated_at' => '2019-11-03 05:37:43',
            ),
            107 => 
            array (
                'id' => 248,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1s5J55M6D65fbZuNlWX3rug9ev8UH1Zwc | Mirrored.to,https://mir.cr/PLFGPPIO',
                'link' => 'Google Drive,http://bit.ly/2F9fGvP| Mirrored.to,http://bit.ly/2SJUPar',
                'res' => '720p',
                'episodes_id' => 53,
                'created_at' => '2019-11-03 05:39:50',
                'updated_at' => '2019-11-03 05:39:50',
            ),
            108 => 
            array (
                'id' => 249,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1mLvYLMcPrxTWY6yIPcDNZZR_2pxkP7zI | Mirrored.to,https://mir.cr/QMW0HSUE',
                'link' => 'Google Drive,http://bit.ly/2sCL4jD| Mirrored.to,http://bit.ly/2F6Tt1v',
                'res' => '480p',
                'episodes_id' => 53,
                'created_at' => '2019-11-03 05:39:50',
                'updated_at' => '2019-11-03 05:39:50',
            ),
            109 => 
            array (
                'id' => 250,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1JsJ0Zt8Nd6dSSSx7Z92Ui9O7GKdedgVA | Mirrored.to,https://mir.cr/4TWRQ3MO',
                'link' => 'Google Drive,http://bit.ly/2ZEFSrD| Mirrored.to,http://bit.ly/35hUU88',
                'res' => '720p',
                'episodes_id' => 54,
                'created_at' => '2019-11-03 05:41:30',
                'updated_at' => '2019-11-03 05:41:30',
            ),
            110 => 
            array (
                'id' => 251,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1ecmBkxG14GsU_qXb_6BA6oxuhtNhmlI1 | Mirrored.to,https://mir.cr/5J8HDN3F',
                'link' => 'Google Drive,http://bit.ly/2SEMEME| Mirrored.to,http://bit.ly/2ZFJjOT',
                'res' => '480p',
                'episodes_id' => 54,
                'created_at' => '2019-11-03 05:41:30',
                'updated_at' => '2019-11-03 05:41:30',
            ),
            111 => 
            array (
                'id' => 252,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1hY9sZF6UAq5iYVTB1qVO6cFkm5iyTTKb | Mirrored.to,https://mir.cr/0OGZRL6P',
                'link' => 'Google Drive,http://bit.ly/36cEL59| Mirrored.to,http://bit.ly/2MKhsYr',
                'res' => '720p',
                'episodes_id' => 55,
                'created_at' => '2019-11-03 05:43:21',
                'updated_at' => '2019-11-03 05:43:21',
            ),
            112 => 
            array (
                'id' => 253,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=11pRaL5qTjp24mZ3uG-bxP2-roCJsU-Vq | Mirrored.to,https://mir.cr/0M7S3U1V',
                'link' => 'Google Drive,http://bit.ly/2Qy8MFU| Mirrored.to,http://bit.ly/2QxYdT3',
                'res' => '480p',
                'episodes_id' => 55,
                'created_at' => '2019-11-03 05:43:21',
                'updated_at' => '2019-11-03 05:43:21',
            ),
            113 => 
            array (
                'id' => 254,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1wQ1VuqSglNslPa3RD0EbXBuqa10U6BMx | Mirrored.to,https://mir.cr/JD1NT6C3',
                'link' => 'Google Drive,http://bit.ly/37obTa3| Mirrored.to,http://bit.ly/2MMpUGS',
                'res' => '720p',
                'episodes_id' => 56,
                'created_at' => '2019-11-04 04:58:14',
                'updated_at' => '2019-11-04 04:58:14',
            ),
            114 => 
            array (
                'id' => 255,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1tdVIuk44ftXQ_tZk8l4GBz--i_KUx-S- | Mirrored.to,https://mir.cr/0UAPMOWV',
                'link' => 'Google Drive,http://bit.ly/2sE6AVl| Mirrored.to,http://bit.ly/39rQKOa',
                'res' => '480p',
                'episodes_id' => 56,
                'created_at' => '2019-11-04 04:58:14',
                'updated_at' => '2019-11-04 04:58:14',
            ),
            115 => 
            array (
                'id' => 271,
                'link_org' => 'Mirrored.to,https://mir.cr/A8JWPB0N|Google Drive,https://drive.google.com/open?id=1SpurbR_W_b3LMJyxkfcnheNLChseBrBT',
                'link' => 'Mirrored.to,http://bit.ly/35c149F|Google Drive,http://bit.ly/2u8e1V9',
                'res' => '720p',
                'episodes_id' => 58,
                'created_at' => '2019-11-04 17:38:50',
                'updated_at' => '2019-11-04 17:38:50',
            ),
            116 => 
            array (
                'id' => 272,
                'link_org' => 'Mirrored.to,https://mir.cr/GUHFZP3R|Google Drive,https://drive.google.com/open?id=15GMQER0RMUbkPC8cGVfZAA7BB4IZMdn5',
                'link' => 'Mirrored.to,http://bit.ly/2SFMu7G|Google Drive,http://bit.ly/37gXaOe',
                'res' => '480p',
                'episodes_id' => 58,
                'created_at' => '2019-11-04 17:38:50',
                'updated_at' => '2019-11-04 17:38:50',
            ),
            117 => 
            array (
                'id' => 273,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1EojxyN3NhR8alvcoHTcK0G_6-1kGEzAH/view?usp=drivesdk|Acefile,https://acefile.co/f/14138153/extonansubs_sao_alicization_wou_04_1080p-mkv|ddl,https://ddl.to/cerozncrx8gc',
                'link' => 'Google Drive,http://bit.ly/2MJ0721|Acefile,http://bit.ly/2QcYnk0|ddl,http://bit.ly/39oYGzE',
                'res' => '1080p',
                'episodes_id' => 57,
                'created_at' => '2019-11-07 12:48:15',
                'updated_at' => '2019-11-07 12:48:15',
            ),
            118 => 
            array (
                'id' => 274,
                'link_org' => 'Mirror,https://mir.cr/0GFKTJFN|Google Drive,https://drive.google.com/file/d/1iwUhWjDaPiB4aGZMzpS-h0YWxXJxfsBB/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2Qbrfc6|Google Drive,http://bit.ly/36dC0jU',
                'res' => '720p',
                'episodes_id' => 57,
                'created_at' => '2019-11-07 12:48:16',
                'updated_at' => '2019-11-07 12:48:16',
            ),
            119 => 
            array (
                'id' => 275,
                'link_org' => 'Mirror,https://mir.cr/NFQWTEHV|Google Drive,https://drive.google.com/file/d/1Eduvl89wCL_TKY1m3qgJBw8tV9ehFY3l/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2QFM8eS|Google Drive,http://bit.ly/2ZEaedI',
                'res' => '480p',
                'episodes_id' => 57,
                'created_at' => '2019-11-07 12:48:16',
                'updated_at' => '2019-11-07 12:48:16',
            ),
            120 => 
            array (
                'id' => 276,
                'link_org' => 'Mega,https://mega.nz/#F!FmRAVSrY!ysBQzdBUi5AUcvgoEaFGQA',
                'link' => 'Mega,http://bit.ly/2F4XhQO',
                'res' => 'sub',
                'episodes_id' => 57,
                'created_at' => '2019-11-07 12:48:16',
                'updated_at' => '2019-11-07 12:48:16',
            ),
            121 => 
            array (
                'id' => 279,
                'link_org' => 'Mirror,https://mir.cr/1ELESNMD|Google Drive,https://drive.google.com/file/d/1RPx6dm9oSCZr5ob6iNKoZn9rZTVQ2drE/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2QaC3HI|Google Drive,http://bit.ly/2F91RxG',
                'res' => '720p',
                'episodes_id' => 59,
                'created_at' => '2019-11-07 17:07:18',
                'updated_at' => '2019-11-07 17:07:18',
            ),
            122 => 
            array (
                'id' => 280,
                'link_org' => 'Mirror,https://mir.cr/0HNBDO8S|Google Drive,https://drive.google.com/file/d/1Yg9DU68etz2GC0DDKCglUB5QL5svBbT1/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2Qy1Ng6|Google Drive,http://bit.ly/2ZFAd4P',
                'res' => '480p',
                'episodes_id' => 59,
                'created_at' => '2019-11-07 17:07:18',
                'updated_at' => '2019-11-07 17:07:18',
            ),
            123 => 
            array (
                'id' => 284,
                'link_org' => 'Mirror,https://mir.cr/02GGGJWP|Google Drive,https://drive.google.com/file/d/1XXD_7-LwsOzK9OWwQ0Twme0xeUu-lq-P/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/368Y1jM|Google Drive,http://bit.ly/2Qz5vGd',
                'res' => '720p',
                'episodes_id' => 60,
                'created_at' => '2019-11-07 20:23:22',
                'updated_at' => '2019-11-07 20:23:22',
            ),
            124 => 
            array (
                'id' => 285,
                'link_org' => 'Mirror,https://mir.cr/1KJAVSM7|Google Drive,https://drive.google.com/file/d/1iy4B_-0tjgy17-uutaNSRdMp2_7e6JAr/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2ME5Zd5|Google Drive,http://bit.ly/2QaSmnS',
                'res' => '480p',
                'episodes_id' => 60,
                'created_at' => '2019-11-07 20:23:22',
                'updated_at' => '2019-11-07 20:23:22',
            ),
            125 => 
            array (
                'id' => 286,
                'link_org' => 'Mega,https://mega.nz/#F!4jZWCSKY!ah31o3grmGhfxqUeqkPVfw',
                'link' => 'Mega,http://bit.ly/2QDBGUU',
                'res' => 'sub',
                'episodes_id' => 60,
                'created_at' => '2019-11-07 20:23:22',
                'updated_at' => '2019-11-07 20:23:22',
            ),
            126 => 
            array (
                'id' => 289,
                'link_org' => 'Mirror,https://mir.cr/IWDONSBA|Google Drive,https://drive.google.com/file/d/13XYyDHzQGwv10MY9MPNGmSuAZ-rOmbEx/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/35cytB4|Google Drive,http://bit.ly/35dFbqt',
                'res' => '720p',
                'episodes_id' => 61,
                'created_at' => '2019-11-08 20:11:00',
                'updated_at' => '2019-11-08 20:11:00',
            ),
            127 => 
            array (
                'id' => 290,
                'link_org' => 'Mirror,https://mir.cr/TS1LVSHC|Google Drive,https://drive.google.com/file/d/127OInHExWjJS-B33Uxn5PT8bbBxvUywz/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2MFOwko|Google Drive,http://bit.ly/2F6TK4x',
                'res' => '480p',
                'episodes_id' => 61,
                'created_at' => '2019-11-08 20:11:00',
                'updated_at' => '2019-11-08 20:11:00',
            ),
            128 => 
            array (
                'id' => 294,
                'link_org' => 'Mirror,https://mir.cr/1KK1KDYM|Google Drive,https://drive.google.com/file/d/1Ns1wGbk90mCxAgfI7S_jXW2lhTIaNN-0/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2SHL9xk|Google Drive,http://bit.ly/2ZBIjvd',
                'res' => '720p',
                'episodes_id' => 62,
                'created_at' => '2019-11-08 20:25:47',
                'updated_at' => '2019-11-08 20:25:47',
            ),
            129 => 
            array (
                'id' => 295,
                'link_org' => 'Mirror,https://mir.cr/0TC8IBB0|Google Drive,https://drive.google.com/file/d/1Jkq5L8MWMfP5OsXsvdJWIvitRWrGLODR/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2QMvYAr|Google Drive,http://bit.ly/35b9pu8',
                'res' => '480p',
                'episodes_id' => 62,
                'created_at' => '2019-11-08 20:25:47',
                'updated_at' => '2019-11-08 20:25:47',
            ),
            130 => 
            array (
                'id' => 296,
                'link_org' => 'Mega,https://mega.nz/#F!8iBCDIjA!A3riN4wqvPPNw4at4P_Nlg',
                'link' => 'Mega,http://bit.ly/2F9eloS',
                'res' => 'sub',
                'episodes_id' => 62,
                'created_at' => '2019-11-08 20:25:47',
                'updated_at' => '2019-11-08 20:25:47',
            ),
            131 => 
            array (
                'id' => 297,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1-0gLQDo-_2n-QZZEWKXCN9BWQe2ohRDl | Mirrored.to,https://mir.cr/07IT5JT2',
                'link' => 'Google Drive,http://bit.ly/2sAbDpK| Mirrored.to,http://bit.ly/2F6zakD',
                'res' => '720p',
                'episodes_id' => 63,
                'created_at' => '2019-11-09 04:21:30',
                'updated_at' => '2019-11-09 04:21:30',
            ),
            132 => 
            array (
                'id' => 298,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1v6JNfQ-J-JzpUQQryPWIf2qBYM4SnGfa | Mirrored.to,https://mir.cr/0AW0PLNC',
                'link' => 'Google Drive,http://bit.ly/2F6ZQ4K| Mirrored.to,http://bit.ly/2MKmp3v',
                'res' => '480p',
                'episodes_id' => 63,
                'created_at' => '2019-11-09 04:21:30',
                'updated_at' => '2019-11-09 04:21:30',
            ),
            133 => 
            array (
                'id' => 301,
                'link_org' => 'Mirror,https://mir.cr/0HUNDPN6|Google Drive,https://drive.google.com/file/d/1re8FJjzCiXtFwwnjysF3lrG46L5raUBu/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2thFCCZ|Google Drive,http://bit.ly/2QDFGoo',
                'res' => '720p',
                'episodes_id' => 64,
                'created_at' => '2019-11-09 09:35:09',
                'updated_at' => '2019-11-09 09:35:09',
            ),
            134 => 
            array (
                'id' => 302,
                'link_org' => 'Mirror,https://mir.cr/1KC0BKKH|Google Drive,https://drive.google.com/file/d/1AjJRrqTLD2WMRnk4vs-OVNIx7jULlBjq/view?usp=drivesdk',
                'link' => 'Mirror,http://bit.ly/2ZFJMAD|Google Drive,http://bit.ly/37gXFYC',
                'res' => '480p',
                'episodes_id' => 64,
                'created_at' => '2019-11-09 09:35:09',
                'updated_at' => '2019-11-09 09:35:09',
            ),
            135 => 
            array (
                'id' => 307,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/185ua7694IxxdYEX-d8xsNJZIVF0D50t7/view | Multiup,https://multiup.org/download/6113d78de06af129508b96750b38b9a8/_ExTonansubs__Shin_Chuuka_Ichiban_-_1__720p_.mkv%7CGoogle',
                'link' => 'Google Drive,http://bit.ly/37vaoal| Multiup,http://bit.ly/37mmqm8',
                'res' => '720p',
                'episodes_id' => 18,
                'created_at' => '2019-11-09 23:25:49',
                'updated_at' => '2019-11-09 23:25:49',
            ),
            136 => 
            array (
                'id' => 308,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1SAN8YPoFccC-C_HLBjS72bn2M4AH0xio/view | Multiup,https://multiup.org/download/9189e1b41abe3e52cbd278d4377b1b55/_ExTonansubs__Shin_Chuuka_Ichiban_-_1__480p_.mkv%7CGoogle',
                'link' => 'Google Drive,http://bit.ly/2FkKzOd| Multiup,http://bit.ly/39Cffs6',
                'res' => '480p',
                'episodes_id' => 18,
                'created_at' => '2019-11-09 23:25:50',
                'updated_at' => '2019-11-09 23:25:50',
            ),
            137 => 
            array (
                'id' => 309,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1BHsDxTrDgcG22CdqlopO1BDw7-eqt9zh | Mirrored.to,https://www.mirrored.to/files/1LEGIPTH/ExTonan_Val_X_Love_04_720p.mkv_links',
                'link' => 'Google Drive,http://bit.ly/2u9BJAx| Mirrored.to,http://bit.ly/2QE4610',
                'res' => '720p',
                'episodes_id' => 67,
                'created_at' => '2019-11-09 23:28:07',
                'updated_at' => '2019-11-09 23:28:07',
            ),
            138 => 
            array (
                'id' => 310,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1YpaUez7k8qWKuCLUrwkn9CRSdj5LkN5s | Mirrored.to,https://www.mirrored.to/files/05IVV3XN/ExTonan_Val_X_Love_04_480p.mkv_links',
                'link' => 'Google Drive,http://bit.ly/36eCWEB| Mirrored.to,http://bit.ly/36fCrua',
                'res' => '480p',
                'episodes_id' => 67,
                'created_at' => '2019-11-09 23:28:07',
                'updated_at' => '2019-11-09 23:28:07',
            ),
            139 => 
            array (
                'id' => 311,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1jT0IleycwMWy7Q_XmkdFnyspXE3YVWjP | Mirrored.to,https://mir.cr/5AKD8ELZ',
                'link' => 'Google Drive,http://bit.ly/2sr1MTi| Mirrored.to,http://bit.ly/2SFJiZR',
                'res' => '720p',
                'episodes_id' => 68,
                'created_at' => '2019-11-09 23:30:29',
                'updated_at' => '2019-11-09 23:30:29',
            ),
            140 => 
            array (
                'id' => 312,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1R9pMfpoxojalSE3D67Kq_-zNdpdUTu_o | Mirrored.to,https://mir.cr/1BMBIKTS',
                'link' => 'Google Drive,http://bit.ly/35b9wWA| Mirrored.to,http://bit.ly/2MJ0wl3',
                'res' => '480p',
                'episodes_id' => 68,
                'created_at' => '2019-11-09 23:30:29',
                'updated_at' => '2019-11-09 23:30:29',
            ),
            141 => 
            array (
                'id' => 313,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1ZOhnFco0GZcH2HNQsYr-X4f9j0FulGqS | Mirror,https://mir.cr/7I2XBSHD',
                'link' => 'Google Drive,http://bit.ly/2tk6hyM| Mirror,http://bit.ly/2F7scvR',
                'res' => '720p',
                'episodes_id' => 69,
                'created_at' => '2019-12-22 18:20:43',
                'updated_at' => '2019-12-22 18:20:43',
            ),
            142 => 
            array (
                'id' => 314,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1sw-uU0Xxjirzr4ilb5u-GPeAN2ao95jv | Mirror,https://mir.cr/1GXLIJX2',
                'link' => 'Google Drive,http://bit.ly/2ZCmUlo| Mirror,http://bit.ly/2QefuSp',
                'res' => '480p',
                'episodes_id' => 69,
                'created_at' => '2019-12-22 18:20:43',
                'updated_at' => '2019-12-22 18:20:43',
            ),
            143 => 
            array (
                'id' => 315,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1jZ8gJJnuZ-c6XHbSEIs7nIh2Y6OR5g-i | Mirrored.to,https://mir.cr/1VRDNCXE',
                'link' => 'Google Drive,http://bit.ly/2MJ0Mk1| Mirrored.to,http://bit.ly/35cyRQ2',
                'res' => '720p',
                'episodes_id' => 70,
                'created_at' => '2019-12-24 17:33:33',
                'updated_at' => '2019-12-24 17:33:33',
            ),
            144 => 
            array (
                'id' => 316,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1SkH-YwJBmzrNe59Ixw3-I79zxI_kpVvn | Mirrored.to,https://mir.cr/DTXAMLUO',
                'link' => 'Google Drive,http://bit.ly/2QsRFVG| Mirrored.to,http://bit.ly/2F9gxwx',
                'res' => '480p',
                'episodes_id' => 70,
                'created_at' => '2019-12-24 17:33:33',
                'updated_at' => '2019-12-24 17:33:33',
            ),
            145 => 
            array (
                'id' => 317,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1SP-mziL8fhmnByygn-TJgFwfSnGctq9k | Mirrored.to,https://mir.cr/U4YKO9PH',
                'link' => 'Google Drive,http://bit.ly/2QxZ0Dv| Mirrored.to,http://bit.ly/2SN8Eoq',
                'res' => '720p',
                'episodes_id' => 71,
                'created_at' => '2019-12-24 17:41:18',
                'updated_at' => '2019-12-24 17:41:18',
            ),
            146 => 
            array (
                'id' => 318,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1OjnA8Pmn6ItW6uEi_insL1ox1DLcopmu | Mirrored.to,https://mir.cr/16QQY4MC',
                'link' => 'Google Drive,http://bit.ly/2ZFAIfd| Mirrored.to,http://bit.ly/2SJVOYb',
                'res' => '480p',
                'episodes_id' => 71,
                'created_at' => '2019-12-24 17:41:18',
                'updated_at' => '2019-12-24 17:41:18',
            ),
            147 => 
            array (
                'id' => 319,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1nKPf4NriJavYxBy7oNzfSwXyz99sN6hY | Mirrored.to,https://mir.cr/1SIVGWSK',
                'link' => 'Google Drive,http://bit.ly/39riaUj| Mirrored.to,http://bit.ly/2rGM5qs',
                'res' => '720p',
                'episodes_id' => 72,
                'created_at' => '2019-12-24 17:43:20',
                'updated_at' => '2019-12-24 17:43:20',
            ),
            148 => 
            array (
                'id' => 320,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1nTI_LjcCtiTv8q2pByq9tlPJYsSI4pLJ | Mirrored.to,https://mir.cr/1CUSCSFI',
                'link' => 'Google Drive,http://bit.ly/2ZBH7Ic| Mirrored.to,http://bit.ly/36dm0hJ',
                'res' => '480p',
                'episodes_id' => 72,
                'created_at' => '2019-12-24 17:43:20',
                'updated_at' => '2019-12-24 17:43:20',
            ),
            149 => 
            array (
                'id' => 321,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1gXsXaaYPqYhDIqejAwBf2NgZuxBNdQb9 | Mirrored.to,https://mir.cr/LMNAQL3G',
                'link' => 'Google Drive,http://bit.ly/2QAniwQ| Mirrored.to,http://bit.ly/36ctz8B',
                'res' => '720p',
                'episodes_id' => 73,
                'created_at' => '2019-12-24 17:45:17',
                'updated_at' => '2019-12-24 17:45:17',
            ),
            150 => 
            array (
                'id' => 322,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1DNIN6MpPvP_lSAEyv4PYdsNwE6kvYS3U | Mirrored.to,https://mir.cr/AJI6QCOB',
                'link' => 'Google Drive,http://bit.ly/2u8TXlB| Mirrored.to,http://bit.ly/2ZEGYDL',
                'res' => '480p',
                'episodes_id' => 73,
                'created_at' => '2019-12-24 17:45:17',
                'updated_at' => '2019-12-24 17:45:17',
            ),
            151 => 
            array (
                'id' => 323,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1IEXR2Adtr4psljF2EeBF05cq59XdLJqE | Mirrored.to,https://mir.cr/GI7PN4A3',
                'link' => 'Google Drive,| Mirrored.to,http://bit.ly/35lSmq9',
                'res' => '720p',
                'episodes_id' => 74,
                'created_at' => '2019-12-24 17:46:24',
                'updated_at' => '2019-12-24 17:46:24',
            ),
            152 => 
            array (
                'id' => 324,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=18IB0IKmCZSe9Sw1QgFcY06YSO6rqrC8d | Mirrored.to,https://mir.cr/5YMA588S',
                'link' => 'Google Drive,http://bit.ly/2qOPsLz| Mirrored.to,http://bit.ly/36yJj5A',
                'res' => '480p',
                'episodes_id' => 74,
                'created_at' => '2019-12-24 17:46:24',
                'updated_at' => '2019-12-24 17:46:24',
            ),
            153 => 
            array (
                'id' => 325,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1biGBHPxRK_ubuTgVzsbp9wnkyM_1PJTN | Mirrored.to,https://mir.cr/1FADS6U9',
                'link' => 'Google Drive,http://bit.ly/2SJ51jl| Mirrored.to,http://bit.ly/2MIYrFI',
                'res' => '720p',
                'episodes_id' => 75,
                'created_at' => '2019-12-24 17:48:42',
                'updated_at' => '2019-12-24 17:48:42',
            ),
            154 => 
            array (
                'id' => 326,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1StBNln1qJFCwdsgVzDWTI89gN-XoFXcx | Mirrored.to,https://mir.cr/03P8KOBI',
                'link' => 'Google Drive,http://bit.ly/37qnoxW| Mirrored.to,http://bit.ly/368YVwG',
                'res' => '480p',
                'episodes_id' => 75,
                'created_at' => '2019-12-24 17:48:42',
                'updated_at' => '2019-12-24 17:48:42',
            ),
            155 => 
            array (
                'id' => 327,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1lq8NqasBTJemA0vxSAcAwuYnwgacBRDR | Mirrored.to,https://mir.cr/6FBJALWU',
                'link' => 'Google Drive,http://bit.ly/2SJ53aX| Mirrored.to,http://bit.ly/36dPoVg',
                'res' => '720p',
                'episodes_id' => 76,
                'created_at' => '2019-12-24 17:53:06',
                'updated_at' => '2019-12-24 17:53:06',
            ),
            156 => 
            array (
                'id' => 328,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1VwNUfRGl25IqMwPyF0OwY79xgy14UzJT | Mirrored.to,https://mir.cr/0HIU2VT0',
                'link' => 'Google Drive,http://bit.ly/2MK9r5V| Mirrored.to,http://bit.ly/2FaBYNW',
                'res' => '480p',
                'episodes_id' => 76,
                'created_at' => '2019-12-24 17:53:06',
                'updated_at' => '2019-12-24 17:53:06',
            ),
            157 => 
            array (
                'id' => 329,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1hd-zOIvTluhlIRhh5u4O6_uqJ7IvrlKH | Mirrored.to,https://mir.cr/1YXQ4FYC',
                'link' => 'Google Drive,http://bit.ly/2SRqoiT| Mirrored.to,http://bit.ly/2QCpALF',
                'res' => '720p',
                'episodes_id' => 77,
                'created_at' => '2019-12-24 17:54:52',
                'updated_at' => '2019-12-24 17:54:52',
            ),
            158 => 
            array (
                'id' => 330,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1bFxUHkuAHXGMtP6-rQ8ZJVfjOecdCk_J | Mirrored.to,https://mir.cr/0VBPUHEP',
                'link' => 'Google Drive,http://bit.ly/35hWqXS| Mirrored.to,http://bit.ly/2ML2ZLQ',
                'res' => '480p',
                'episodes_id' => 77,
                'created_at' => '2019-12-24 17:54:52',
                'updated_at' => '2019-12-24 17:54:52',
            ),
            159 => 
            array (
                'id' => 331,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1rHIweWopGGWy-Xh0JkMPseXG4AmfuaAA | Mirrored.to,https://mir.cr/1MOOQR8R',
                'link' => 'Google Drive,http://bit.ly/2ZFKPk3| Mirrored.to,http://bit.ly/2MKTU5X',
                'res' => '720p',
                'episodes_id' => 78,
                'created_at' => '2019-12-24 17:56:22',
                'updated_at' => '2019-12-24 17:56:22',
            ),
            160 => 
            array (
                'id' => 332,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1-6iYC5Ajtv2ZgjAWkM48AgrF60Vwsx6h | Mirrored.to,https://mir.cr/0JYR1P3S',
                'link' => 'Google Drive,http://bit.ly/35hWl6w| Mirrored.to,http://bit.ly/357arHC',
                'res' => '480p',
                'episodes_id' => 78,
                'created_at' => '2019-12-24 17:56:22',
                'updated_at' => '2019-12-24 17:56:22',
            ),
            161 => 
            array (
                'id' => 333,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1WDsFn2oZ6nkKk6bE4vhJdoPptjaQ3WCE | Mirrored.to,https://mir.cr/1XXHREXC',
                'link' => 'Google Drive,http://bit.ly/2YNScoW| Mirrored.to,http://bit.ly/2PGBrbi',
                'res' => '720p',
                'episodes_id' => 79,
                'created_at' => '2019-12-24 17:57:48',
                'updated_at' => '2019-12-24 17:57:48',
            ),
            162 => 
            array (
                'id' => 334,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1S2GwQ53PkkesNervQ83j_cu2kOXBPStM | Mirrored.to,https://mir.cr/HIETZHU5',
                'link' => 'Google Drive,http://bit.ly/2EiDsoY| Mirrored.to,http://bit.ly/2PmHEu8',
                'res' => '480p',
                'episodes_id' => 79,
                'created_at' => '2019-12-24 17:57:48',
                'updated_at' => '2019-12-24 17:57:48',
            ),
            163 => 
            array (
                'id' => 335,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1bqbb9yUtYDNhpBJXDDZrMHk3nfqxSN4c | Mirrored.to,https://mir.cr/1T4ZD9ID',
                'link' => 'Google Drive,http://bit.ly/2tfa7JE| Mirrored.to,http://bit.ly/2QsSopS',
                'res' => '720p',
                'episodes_id' => 80,
                'created_at' => '2019-12-24 17:59:56',
                'updated_at' => '2019-12-24 17:59:56',
            ),
            164 => 
            array (
                'id' => 336,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1_ZPrZpz6BD4oAW5zN_g4qZnJ2oeIr6Sc | Mirrored.to,https://mir.cr/0SLTFQQ0',
                'link' => 'Google Drive,http://bit.ly/2QcFYni| Mirrored.to,http://bit.ly/35czyZE',
                'res' => '480p',
                'episodes_id' => 80,
                'created_at' => '2019-12-24 17:59:56',
                'updated_at' => '2019-12-24 17:59:56',
            ),
            165 => 
            array (
                'id' => 337,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1zTbYSqD8QpIPerqFsijXMBNqOzJLMPdv | Mirrored.to,https://mir.cr/5TYPPDTV',
                'link' => 'Google Drive,http://bit.ly/2SGSVaL| Mirrored.to,http://bit.ly/2QDGKZq',
                'res' => '720p',
                'episodes_id' => 81,
                'created_at' => '2019-12-24 18:01:58',
                'updated_at' => '2019-12-24 18:01:58',
            ),
            166 => 
            array (
                'id' => 338,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1jacpqyia0G9VNjeQnJdu0GImai-a6JiP | Mirrored.to,https://mir.cr/0RFVEECB',
                'link' => 'Google Drive,http://bit.ly/2sCMDy1| Mirrored.to,http://bit.ly/2MGm6Xl',
                'res' => '480p',
                'episodes_id' => 81,
                'created_at' => '2019-12-24 18:01:58',
                'updated_at' => '2019-12-24 18:01:58',
            ),
            167 => 
            array (
                'id' => 339,
                'link_org' => 'Zippyshare,https://www34.zippyshare.com/v/LsGI3xCx/file.html|Mirror,https://mir.cr/2EU4A6G5|Google Drive,https://drive.google.com/open?id=13oAjMZgnFPWcpdpOEtfvKPQgikiabRT1',
                'link' => 'Zippyshare,http://bit.ly/36bILm9|Mirror,http://bit.ly/37qnvJS|Google Drive,http://bit.ly/2ZOGf3b',
                'res' => '720p',
                'episodes_id' => 82,
                'created_at' => '2019-12-24 20:52:37',
                'updated_at' => '2019-12-24 20:52:37',
            ),
            168 => 
            array (
                'id' => 340,
                'link_org' => 'Zippyshare,https://www104.zippyshare.com/v/I9IKBsM8/file.html|Mirror,https://mir.cr/0CAEKLD1|Google Drive,https://drive.google.com/open?id=19Oq-zZtbj9eJY4IB8Q2O0JcWkVSREJhS',
                'link' => 'Zippyshare,http://bit.ly/2sAjEem|Mirror,http://bit.ly/2tdSPwt|Google Drive,http://bit.ly/2ZEW7F3',
                'res' => '480p',
                'episodes_id' => 82,
                'created_at' => '2019-12-24 20:52:37',
                'updated_at' => '2019-12-24 20:52:37',
            ),
            169 => 
            array (
                'id' => 341,
                'link_org' => 'Zippyshare,https://www58.zippyshare.com/v/zUtbUQM1/file.html|Mirror,https://mir.cr/OGZ04N4X|Google Drive,https://drive.google.com/open?id=1EetblJWA3Y3NUpd6oNJ4lCB2Estnl2PT',
                'link' => 'Zippyshare,http://bit.ly/2MJ23rj|Mirror,http://bit.ly/3587SVT|Google Drive,http://bit.ly/2SGLEaF',
                'res' => '720p',
                'episodes_id' => 83,
                'created_at' => '2019-12-24 21:27:01',
                'updated_at' => '2019-12-24 21:27:01',
            ),
            170 => 
            array (
                'id' => 342,
                'link_org' => 'Zippyshare,https://www29.zippyshare.com/v/J2Vwz8Pp/file.html|Mirror,https://mir.cr/0NCI7ZQH|Google Drive,https://drive.google.com/open?id=1U5OJL0P0y_VHZCVa-gt-uUBLkN8u7sXJ',
                'link' => 'Zippyshare,http://bit.ly/3587TsV|Mirror,http://bit.ly/36bmO6M|Google Drive,http://bit.ly/359sH3e',
                'res' => '480p',
                'episodes_id' => 83,
                'created_at' => '2019-12-24 21:27:01',
                'updated_at' => '2019-12-24 21:27:01',
            ),
            171 => 
            array (
                'id' => 343,
                'link_org' => 'Mega,https://mega.nz/#F!8iBCDIjA!A3riN4wqvPPNw4at4P_Nlg',
                'link' => 'Mega,http://bit.ly/2F9eloS',
                'res' => 'sub',
                'episodes_id' => 83,
                'created_at' => '2019-12-24 21:27:01',
                'updated_at' => '2019-12-24 21:27:01',
            ),
            172 => 
            array (
                'id' => 347,
                'link_org' => 'Zippyshare,https://www93.zippyshare.com/v/sh2TKDE7/file.html|Mirror,https://mir.cr/FVZRZRSI|Google Drive,https://drive.google.com/open?id=1mPsw3o46ljSq2Gull7D5DNKae-amwmSE',
                'link' => 'Zippyshare,http://bit.ly/39sCc0J|Mirror,http://bit.ly/2QaDNAK|Google Drive,http://bit.ly/2MIYUrs',
                'res' => '1080p',
                'episodes_id' => 84,
                'created_at' => '2019-12-24 21:38:15',
                'updated_at' => '2019-12-24 21:38:15',
            ),
            173 => 
            array (
                'id' => 348,
                'link_org' => 'Zippyshare,https://www2.zippyshare.com/v/BUT14w2f/file.html|Mirror,https://mir.cr/JFH3LNOL|Google Drive,https://drive.google.com/open?id=1tohRtLJS_pMOsJsJV06B5R1Epd9ZFVxa',
                'link' => 'Zippyshare,http://bit.ly/35aQU9j|Mirror,http://bit.ly/2u26BTe|Google Drive,http://bit.ly/2MLwOvT',
                'res' => '720p',
                'episodes_id' => 84,
                'created_at' => '2019-12-24 21:38:15',
                'updated_at' => '2019-12-24 21:38:15',
            ),
            174 => 
            array (
                'id' => 349,
                'link_org' => 'Zippyshare,https://www63.zippyshare.com/v/LrFb53qX/file.html|Mirror,https://mir.cr/OKOGZWU0|Google Drive,https://drive.google.com/open?id=1VoEkOnj2X2r3VpJojN4bspqyulHaiwfJ',
                'link' => 'Zippyshare,http://bit.ly/2ZDW9x3|Mirror,http://bit.ly/36ec3AP|Google Drive,http://bit.ly/2FaMAMw',
                'res' => '480p',
                'episodes_id' => 84,
                'created_at' => '2019-12-24 21:38:15',
                'updated_at' => '2019-12-24 21:38:15',
            ),
            175 => 
            array (
                'id' => 350,
                'link_org' => 'Mega,https://mega.nz/#F!FmRAVSrY!ysBQzdBUi5AUcvgoEaFGQA',
                'link' => 'Mega,http://bit.ly/2F4XhQO',
                'res' => 'sub',
                'episodes_id' => 84,
                'created_at' => '2019-12-24 21:38:15',
                'updated_at' => '2019-12-24 21:38:15',
            ),
            176 => 
            array (
                'id' => 351,
                'link_org' => 'Zippyshare,https://www30.zippyshare.com/v/7XhBWnJc/file.html|Mirror,https://mir.cr/0R2WSOWV|Google Drive,https://drive.google.com/open?id=1724o20TKFBESPDqE4lB_MU2PCNPzG2qO',
                'link' => 'Zippyshare,http://bit.ly/2tdXZsr|Mirror,http://bit.ly/2u7aQgu|Google Drive,http://bit.ly/2PCVHdU',
                'res' => '720p',
                'episodes_id' => 85,
                'created_at' => '2019-12-26 12:26:01',
                'updated_at' => '2019-12-26 12:26:01',
            ),
            177 => 
            array (
                'id' => 352,
                'link_org' => 'Zippyshare,https://www11.zippyshare.com/v/ax4qLpwK/file.html|Mirror,https://mir.cr/SZODL79F|Google Drive,https://drive.google.com/open?id=1bJX0HcTxuIJV34PNtlkUwot39d_RYmZE',
                'link' => 'Zippyshare,http://bit.ly/36rjaFE|Mirror,http://bit.ly/37pLSqV|Google Drive,http://bit.ly/2Q9Rsbc',
                'res' => '480p',
                'episodes_id' => 85,
                'created_at' => '2019-12-26 12:26:01',
                'updated_at' => '2019-12-26 12:26:01',
            ),
            178 => 
            array (
                'id' => 353,
                'link_org' => 'Mega,https://mega.nz/#F!0nZ0GQyL!g0Rmpsu2YbTpH4KIlH27ug',
                'link' => 'Mega,http://bit.ly/2u8fydR',
                'res' => 'sub',
                'episodes_id' => 85,
                'created_at' => '2019-12-26 12:26:01',
                'updated_at' => '2019-12-26 12:26:01',
            ),
            179 => 
            array (
                'id' => 354,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1mK9TY4ry35Z3bIldEO-ZaJFOoPU6BBxA',
                'link' => 'Google Drive,http://bit.ly/39wrAy2',
                'res' => '720p',
                'episodes_id' => 86,
                'created_at' => '2019-12-26 12:46:46',
                'updated_at' => '2019-12-26 12:46:46',
            ),
            180 => 
            array (
                'id' => 355,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1COSW9WiHNAs_FTJA7J8TTIZWv6g1hEmp',
                'link' => 'Google Drive,http://bit.ly/36gG42I',
                'res' => '480p',
                'episodes_id' => 86,
                'created_at' => '2019-12-26 12:46:46',
                'updated_at' => '2019-12-26 12:46:46',
            ),
            181 => 
            array (
                'id' => 356,
                'link_org' => 'Zippyshare,https://www22.zippyshare.com/v/1mhdM7aX/file.html|Mirror,https://mir.cr/0NHHRQLH|Google Drive,https://drive.google.com/open?id=1oXIOkvEjDO65jXD0oq6ZF3n3qnQhWivx',
                'link' => 'Zippyshare,http://bit.ly/36eHFpI|Mirror,http://bit.ly/2MJ2imd|Google Drive,http://bit.ly/2FkMfqZ',
                'res' => '720p',
                'episodes_id' => 87,
                'created_at' => '2019-12-26 17:40:36',
                'updated_at' => '2019-12-26 17:40:36',
            ),
            182 => 
            array (
                'id' => 357,
                'link_org' => 'Zippyshare,https://www50.zippyshare.com/v/xi55TQMi/file.html|Mirror,https://mir.cr/WBN7WAU1|Google Drive,https://drive.google.com/open?id=1tR4Yo0nlWQkn5h3bm_NNYdrzLJlEhutP',
                'link' => 'Zippyshare,|Mirror,http://bit.ly/2ZFBXLp|Google Drive,http://bit.ly/2QE5JvE',
                'res' => '480p',
                'episodes_id' => 87,
                'created_at' => '2019-12-26 17:40:36',
                'updated_at' => '2019-12-26 17:40:36',
            ),
            183 => 
            array (
                'id' => 358,
                'link_org' => 'Zippyshare,https://www13.zippyshare.com/v/mit4Uix7/file.html|Mirror,https://mir.cr/0BEV6T27|Google Drive,https://drive.google.com/open?id=10Iue3C2ZuKdi6eXtSqlFponTFGSBmtvc',
                'link' => 'Zippyshare,http://bit.ly/355ADm0|Mirror,http://bit.ly/2Fb3Pxw|Google Drive,http://bit.ly/2QbuSPf',
                'res' => '720p',
                'episodes_id' => 88,
                'created_at' => '2019-12-26 19:04:50',
                'updated_at' => '2019-12-26 19:04:50',
            ),
            184 => 
            array (
                'id' => 359,
                'link_org' => 'Zippyshare,https://www77.zippyshare.com/v/N2WHOAIs/file.html|Mirror,https://mir.cr/0ACFVLR1|Google Drive,https://drive.google.com/open?id=1p7UR6hoI1-6tPjU3rDxsT1YqMxBUFObH',
                'link' => 'Zippyshare,http://bit.ly/2SFOpsU|Mirror,http://bit.ly/36eHnPF|Google Drive,http://bit.ly/2F7HZuz',
                'res' => '480p',
                'episodes_id' => 88,
                'created_at' => '2019-12-26 19:04:50',
                'updated_at' => '2019-12-26 19:04:50',
            ),
            185 => 
            array (
                'id' => 360,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/12s1zGfmubwyZtWWliW1n5zKMtZC5RtLJ/view?usp=drivesdk|Mirrored.to,https://mir.cr/0UHR0ZUI',
                'link' => 'Google Drive,http://bit.ly/35aJkvs|Mirrored.to,http://bit.ly/2ZFLG4f',
                'res' => '720p',
                'episodes_id' => 89,
                'created_at' => '2019-12-27 12:17:30',
                'updated_at' => '2019-12-27 12:17:30',
            ),
            186 => 
            array (
                'id' => 361,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1j7ujUrUb-bKdzyru6-vbbYKYY2yzE-jk/view?usp=drivesdk|Mirrored.to,https://mir.cr/1VKSO3UD',
                'link' => 'Google Drive,http://bit.ly/36eHMSb|Mirrored.to,http://bit.ly/2ZIKkG2',
                'res' => '480p',
                'episodes_id' => 89,
                'created_at' => '2019-12-27 12:17:30',
                'updated_at' => '2019-12-27 12:17:30',
            ),
            187 => 
            array (
                'id' => 362,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1lUE6UH0x9pLwvxoaG5XD4p5l3KKencTu',
                'link' => 'Google Drive,http://bit.ly/2SJ5GBl',
                'res' => '720p',
                'episodes_id' => 90,
                'created_at' => '2019-12-27 13:25:27',
                'updated_at' => '2019-12-27 13:25:27',
            ),
            188 => 
            array (
                'id' => 363,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1xmKZd70o0xsOrKzfCGD-IoQ-zCae0yzf',
                'link' => 'Google Drive,http://bit.ly/35cOarK',
                'res' => '480p',
                'episodes_id' => 90,
                'created_at' => '2019-12-27 13:25:27',
                'updated_at' => '2019-12-27 13:25:27',
            ),
            189 => 
            array (
                'id' => 364,
                'link_org' => 'Zippyshare,https://www50.zippyshare.com/v/D17bstIu/file.html|Google Drive,https://drive.google.com/open?id=1srVoo6XX9Ph-3lyIHJjrsfOoXt-8EHdU',
                'link' => 'Zippyshare,http://bit.ly/2ZIX7rN|Google Drive,http://bit.ly/2SDOPQq',
                'res' => '720p',
                'episodes_id' => 91,
                'created_at' => '2019-12-27 13:49:30',
                'updated_at' => '2019-12-27 13:49:30',
            ),
            190 => 
            array (
                'id' => 365,
                'link_org' => 'Zippyshare,https://www57.zippyshare.com/v/8ESgTJw2/file.html|Google Drive,https://drive.google.com/open?id=1lv_SkAj49PB10RusIIk0FGEUY0MBjc3M',
                'link' => 'Zippyshare,http://bit.ly/2F5529x|Google Drive,http://bit.ly/39uuZxe',
                'res' => '480p',
                'episodes_id' => 91,
                'created_at' => '2019-12-27 13:49:30',
                'updated_at' => '2019-12-27 13:49:30',
            ),
            191 => 
            array (
                'id' => 366,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1Xmc65bVPSR9nQNQBFcnfLjBD4-vTN4Hv',
                'link' => 'Google Drive,http://bit.ly/39vI8pB',
                'res' => '720p',
                'episodes_id' => 92,
                'created_at' => '2019-12-27 13:52:48',
                'updated_at' => '2019-12-27 13:52:48',
            ),
            192 => 
            array (
                'id' => 367,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1SmwD2dJgPLs_MR7wGqm7Eo0q3YVMLCo6',
                'link' => 'Google Drive,http://bit.ly/37mnTJc',
                'res' => '480p',
                'episodes_id' => 92,
                'created_at' => '2019-12-27 13:52:48',
                'updated_at' => '2019-12-27 13:52:48',
            ),
            193 => 
            array (
                'id' => 372,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1txZQuDTwz2Bmi-HH21BaoW1th42G61Ob|Acefile,https://acefile.co/f/16397087/extonan-sao-alc-wou-12-1080p-mkv',
                'link' => 'Google Drive,http://bit.ly/35dH72d|Acefile,http://bit.ly/2F9jg9k',
                'res' => '1080p',
                'episodes_id' => 94,
                'created_at' => '2019-12-29 17:00:23',
                'updated_at' => '2019-12-29 17:00:23',
            ),
            194 => 
            array (
                'id' => 373,
                'link_org' => 'Zippyshare,https://www84.zippyshare.com/v/4gRdyR3g/file.html|Mirror,https://mir.cr/APUJUXFT|Google Drive,https://drive.google.com/open?id=1xSAXXXg2PUpUdLMU_J7q3bHwUzRzy2jT',
                'link' => 'Zippyshare,http://bit.ly/2MIZo0K|Mirror,http://bit.ly/2teuEhB|Google Drive,http://bit.ly/2QAoyQA',
                'res' => '720p',
                'episodes_id' => 94,
                'created_at' => '2019-12-29 17:00:23',
                'updated_at' => '2019-12-29 17:00:23',
            ),
            195 => 
            array (
                'id' => 374,
                'link_org' => 'Zippyshare,https://www106.zippyshare.com/v/8iNvCIIY/file.html|Mirror,https://mir.cr/1VCBGK9H|Google Drive,https://drive.google.com/open?id=1A-9CMpRXGSASHnbAOjGeTsc-X1ADbYuc',
                'link' => 'Zippyshare,http://bit.ly/36eIbnE|Mirror,http://bit.ly/2SGywTa|Google Drive,http://bit.ly/39tF4un',
                'res' => '480p',
                'episodes_id' => 94,
                'created_at' => '2019-12-29 17:00:23',
                'updated_at' => '2019-12-29 17:00:23',
            ),
            196 => 
            array (
                'id' => 375,
                'link_org' => 'Mega,https://mega.nz/#F!FmRAVSrY!ysBQzdBUi5AUcvgoEaFGQA',
                'link' => 'Mega,http://bit.ly/2F4XhQO',
                'res' => 'sub',
                'episodes_id' => 94,
                'created_at' => '2019-12-29 17:00:23',
                'updated_at' => '2019-12-29 17:00:23',
            ),
            197 => 
            array (
                'id' => 376,
                'link_org' => 'Zippyshare,https://www106.zippyshare.com/v/dE1NISY1/file.html|Mirror,https://mir.cr/8T0FUE9F|Google Drive,https://drive.google.com/open?id=1n-E_sD_Y0Erx2wYiNCuMjBw-PJKz6h1k',
                'link' => 'Zippyshare,http://bit.ly/2QfzBzP|Mirror,http://bit.ly/2sAc5nV|Google Drive,http://bit.ly/2th4j2f',
                'res' => '720p',
                'episodes_id' => 93,
                'created_at' => '2019-12-29 17:21:08',
                'updated_at' => '2019-12-29 17:21:08',
            ),
            198 => 
            array (
                'id' => 377,
                'link_org' => 'Zippyshare,https://www78.zippyshare.com/v/Ci7CkRjy/file.html|Mirror,https://mir.cr/1JSI3HIF|Google Drive,https://drive.google.com/open?id=1gmh2xZyIJYmse-99OrvUp4HbyncDhJqm',
                'link' => 'Zippyshare,http://bit.ly/36eIGhx|Mirror,http://bit.ly/2Q9Wogf|Google Drive,http://bit.ly/2QxLujn',
                'res' => '480p',
                'episodes_id' => 93,
                'created_at' => '2019-12-29 17:21:08',
                'updated_at' => '2019-12-29 17:21:08',
            ),
            199 => 
            array (
                'id' => 378,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1RvX9X7KfxMeNbooRvXsWfdhXiJxZCEk6 | Mirror,https://mir.cr/M5LQVYR0',
                'link' => 'Google Drive,http://bit.ly/2MHMPTJ| Mirror,http://bit.ly/2QAprsf',
                'res' => '720p',
                'episodes_id' => 95,
                'created_at' => '2019-12-29 23:23:00',
                'updated_at' => '2019-12-29 23:23:00',
            ),
            200 => 
            array (
                'id' => 379,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1FAPfnVTu3UF4_QGmYpVDFBueAaMOdUhs',
                'link' => 'Google Drive,http://bit.ly/37gZHrI',
                'res' => '720p',
                'episodes_id' => 96,
                'created_at' => '2019-12-30 05:57:18',
                'updated_at' => '2019-12-30 05:57:18',
            ),
            201 => 
            array (
                'id' => 380,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1WWnufJdI5uDt9xRlveSWBnXlK6Mhpvdf',
                'link' => 'Google Drive,http://bit.ly/2ZFKbD8',
                'res' => '480p',
                'episodes_id' => 96,
                'created_at' => '2019-12-30 05:57:18',
                'updated_at' => '2019-12-30 05:57:18',
            ),
            202 => 
            array (
                'id' => 381,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1E4yaFHBIqjzcXexxr6P6Pirk47NEIfb8/view?usp=drivesdk|Mirrored.to,https://mir.cr/T1DT5HNZ',
                'link' => 'Google Drive,http://bit.ly/2QcH3vm|Mirrored.to,http://bit.ly/2Qz7iuV',
                'res' => '720p',
                'episodes_id' => 97,
                'created_at' => '2019-12-30 06:36:55',
                'updated_at' => '2019-12-30 06:36:55',
            ),
            203 => 
            array (
                'id' => 382,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1xxmC4CUesHbUOp5nyUdogya4_AuYyoYj/view?usp=drivesdk|Mirrored.to,https://mir.cr/1QPI0GQU',
                'link' => 'Google Drive,http://bit.ly/2SGMpR3|Mirrored.to,http://bit.ly/36fhPC7',
                'res' => '480p',
                'episodes_id' => 97,
                'created_at' => '2019-12-30 06:36:55',
                'updated_at' => '2019-12-30 06:36:55',
            ),
            204 => 
            array (
                'id' => 383,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1hVWZ-o1xzwh7kpKHLmwd5yBuWadorJrM/view?usp=drivesdk|Mirrored.to,https://mir.cr/0PPIIVOR',
                'link' => 'Google Drive,http://bit.ly/35aRPXj|Mirrored.to,http://bit.ly/2F55vbN',
                'res' => '720p',
                'episodes_id' => 98,
                'created_at' => '2019-12-30 06:38:20',
                'updated_at' => '2019-12-30 06:38:20',
            ),
            205 => 
            array (
                'id' => 384,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1jBJOOMbWNo12Wi60DgTrwzlEs76hcVZs/view?usp=drivesdk|Mirrored.to,https://mir.cr/1PGVS0LD',
                'link' => 'Google Drive,http://bit.ly/36eIRcH|Mirrored.to,http://bit.ly/2szBdLz',
                'res' => '480p',
                'episodes_id' => 98,
                'created_at' => '2019-12-30 06:38:20',
                'updated_at' => '2019-12-30 06:38:20',
            ),
            206 => 
            array (
                'id' => 385,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1yEkk4nX7JbvlLv0R5_biI1MJdYVJhK8F/view?usp=drivesdk|Mirrored.to,https://mir.cr/1ETEKTPP',
                'link' => 'Google Drive,http://bit.ly/2SBT27o|Mirrored.to,http://bit.ly/2QCUgN5',
                'res' => '720p',
                'episodes_id' => 99,
                'created_at' => '2019-12-30 06:39:27',
                'updated_at' => '2019-12-30 06:39:27',
            ),
            207 => 
            array (
                'id' => 386,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/11Tq0HM1s2bToeyRbKaQ7nMwTfeaZ80bF/view?usp=drivesdk|Mirrored.to,https://mir.cr/KBRJECDK',
                'link' => 'Google Drive,http://bit.ly/39sXFqk|Mirrored.to,http://bit.ly/2ZCMu9S',
                'res' => '480p',
                'episodes_id' => 99,
                'created_at' => '2019-12-30 06:39:27',
                'updated_at' => '2019-12-30 06:39:27',
            ),
            208 => 
            array (
                'id' => 387,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1C6Q8Dp2kGc3HNRJbZZplSCSHBhCuJFhZ/view?usp=drivesdk|Mirrored.to,https://mir.cr/FZUUV6YN',
                'link' => 'Google Drive,http://bit.ly/355BoLS|Mirrored.to,http://bit.ly/2F9iwkt',
                'res' => '720p',
                'episodes_id' => 100,
                'created_at' => '2019-12-30 06:40:41',
                'updated_at' => '2019-12-30 06:40:41',
            ),
            209 => 
            array (
                'id' => 388,
                'link_org' => 'Google Drive,https://drive.google.com/file/d/1u_w-lwHVlZJdzRgFJrKlL1oIa4W-2741/view?usp=drivesdk|Mirrored.to,https://mir.cr/0KMQYPCM',
                'link' => 'Google Drive,http://bit.ly/2QbJ62D|Mirrored.to,http://bit.ly/359h1NF',
                'res' => '480p',
                'episodes_id' => 100,
                'created_at' => '2019-12-30 06:40:41',
                'updated_at' => '2019-12-30 06:40:41',
            ),
            210 => 
            array (
                'id' => 389,
                'link_org' => 'Zippyshare,https://www18.zippyshare.com/v/owxFAJtN/file.html|Mirror,https://mir.cr/1CFYL5QX|Google Drive,https://drive.google.com/open?id=1ge9GE9d9Ffmx7ZftbKxcpD1eYhZd740V',
                'link' => 'Zippyshare,http://bit.ly/36d4s5v|Mirror,http://bit.ly/36eF7YN|Google Drive,http://bit.ly/2QD91zz',
                'res' => '720p',
                'episodes_id' => 101,
                'created_at' => '2019-12-30 08:10:37',
                'updated_at' => '2019-12-30 08:10:37',
            ),
            211 => 
            array (
                'id' => 390,
                'link_org' => 'Zippyshare,https://www106.zippyshare.com/v/QycAF6Wr/file.html|Mirror,https://mir.cr/18OEEQKC|Google Drive,https://drive.google.com/open?id=1ofwL1cAEKUkfLwleBSt-g8qxeObZiJr1',
                'link' => 'Zippyshare,http://bit.ly/2MLxqBH|Mirror,http://bit.ly/2tgXZba|Google Drive,http://bit.ly/36gTbkA',
                'res' => '480p',
                'episodes_id' => 101,
                'created_at' => '2019-12-30 08:10:37',
                'updated_at' => '2019-12-30 08:10:37',
            ),
            212 => 
            array (
                'id' => 391,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1uajaCYxeTQT9rrWnF5wk6CKrUi_LFhT7',
                'link' => 'Google Drive,http://bit.ly/2tgXZIc',
                'res' => '720p',
                'episodes_id' => 102,
                'created_at' => '2019-12-30 08:18:05',
                'updated_at' => '2019-12-30 08:18:05',
            ),
            213 => 
            array (
                'id' => 392,
                'link_org' => 'Google Drive,https://drive.google.com/open?id=1QHleZLzjPGPYV7g8LkltWKdj4DjkEtSm',
                'link' => 'Google Drive,http://bit.ly/35dFpxU',
                'res' => '480p',
                'episodes_id' => 102,
                'created_at' => '2019-12-30 08:18:05',
                'updated_at' => '2019-12-30 08:18:05',
            ),
        ));
        
        
    }
}