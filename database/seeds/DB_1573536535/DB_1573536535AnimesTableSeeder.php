<?php

use Illuminate\Database\Seeder;

class DB_1573536535AnimesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('animes')->delete();

        \DB::table('animes')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 1,
                'judul' => 'Choujin Koukousei-tachi wa Isekai demo Yoyuu de Ikinuku you desu!',
                'slug' => 'choujin-koukousei-tachi-wa-isekai-demo-yoyuu-de-ikinuku-you-desu',
                'jenis' => 'tv',
                'skor' => 6.71,
                'sinopsis' => 'Tujuh siswa SMA jatuh di dunia alternatif setelah pesawat yang mereka naiki mengalami kecelakaan. Hebatnya, mereka tetap tenang menghadapi masalah yang menimpa mereka. Ketujuh remaja ini dengan cepat menyesuaikan diri dengan dunia baru mereka. Dengan menggunakan pengetahuan dan keterampilan masing-masing, mereka merevolusi dunia fantasi menjadi tempat yang lebih baik.',
                'created_at' => '2019-10-23 11:42:41',
                'updated_at' => '2019-10-23 11:42:55',
            ),
            1 =>
            array(
                'id' => 2,
                'user_id' => 1,
                'judul' => 'Granblue Fantasy Season 2',
                'slug' => 'granblue-fantasy-season-2',
                'jenis' => 'tv',
                'skor' => 7.17,
                'sinopsis' => 'Takdir mempertemukan seorang anak laki-laki dengan gadis misterius berambut biru yang jatuh dari langit. Mereka pun melakukan perjalanan, dan bertemu dengan kawan-kawan yang bisa diandalkan. Mereka terus melanjutkan perjalanan sambil menghindari kejaran dari kerajaan. Selama perjalanan itu mereka tumbuh dan memperdalam ikatan mereka.',
                'created_at' => '2019-10-23 11:48:02',
                'updated_at' => '2019-10-23 11:48:02',
            ),
            2 =>
            array(
                'id' => 3,
                'user_id' => 1,
                'judul' => 'Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!',
                'slug' => 'watashi-nouryoku-wa-heikinchi-de-tte-itta-yo-ne',
                'jenis' => 'tv',
                'skor' => 6.99,
                'sinopsis' => 'Ketika berumur 10 tahun, Adele von Ascham tiba-tiba mendapat kenangan kehidupan sebelumnya sebagai gadis Jepang berumur 18 tahun bernama Misato Kurihara. Namun, di kehidupannya itu Misato meninggal saat berusaha menolong seorang gadis kecil. Ia kemudian bertemu dengan dewa dan membuat sebuah permintaan ....',
                'created_at' => '2019-10-23 11:50:58',
                'updated_at' => '2019-10-23 11:50:58',
            ),
            3 =>
            array(
                'id' => 4,
                'user_id' => 1,
                'judul' => 'Phantasy Star Online 2: Episode Oracle',
                'slug' => 'phantasy-star-online-2-episode-oracle',
                'jenis' => 'tv',
                'skor' => 6.78,
                'sinopsis' => 'Episode 1-3 diadaptasi dari game Phantasy Star Online 2. Selain itu anime ini juga akan menampilkan cerita orisinal.',
                'created_at' => '2019-10-23 11:58:57',
                'updated_at' => '2019-10-23 11:58:57',
            ),
            4 =>
            array(
                'id' => 5,
                'user_id' => 2,
                'judul' => 'Sword Art Online: Alicization - War of Underworld',
                'slug' => 'sword-art-online-alicization-war-of-underworld',
                'jenis' => 'tv',
                'skor' => 8.57,
                'sinopsis' => 'Bagian kedua dari Sword Art Online Alicization.

Enam bulan telah berlalu sejak Kirito mengalahkan Administrator dalam pertarungan sengit mereka di puncak Cathedral. Alice membawa Kirito yang kehilangan lengan dan kesadarannya ke tepi desa Rulid. Dalam  keseharian mereka yang damai, Alice mulai menanyakan tindakan apa yang harus dia lakukan selanjutnya. Aku akan bertarung demi apa yang kuinginkan. Dengan kalimat yang mencerminkan keteguhan hatinya itu, peperangan Underworld yang panjang akhirnya dimulai.  

Translator: dhan
TLC: Alice
Editor, Typesetter: LLENN
Encoder: dhan',
                'created_at' => '2019-10-23 13:09:59',
                'updated_at' => '2019-11-02 05:09:58',
            ),
            5 =>
            array(
                'id' => 6,
                'user_id' => 2,
                'judul' => 'Azur Lane',
                'slug' => 'azur-lane',
                'jenis' => 'tv',
                'skor' => 6.89,
                'sinopsis' => 'Musuh kuat yang disebut "Siren" tiba-tiba muncul dari laut. Untuk melawan mereka, kelompok angkatan laut bernama Azure Lane telah dibentuk. Mereka berhasil menghentikan serangan dari Siren menggunakan kapal perang. Ini adalah kisah tentang gadis-gadis yang melawan musuh-musuh kuat yang belum pernah mereka hadapi sebelumnya.  

Translator: Hafizh/Bastard
TLC/Editor: Anetto (Hafizh)
Typesetter, Lirik OP & ED: LLENN
Encoder: dhan',
                'created_at' => '2019-10-23 13:23:33',
                'updated_at' => '2019-10-29 14:19:24',
            ),
            6 =>
            array(
                'id' => 7,
                'user_id' => 1,
                'judul' => 'Shin Chuuka Ichiban!',
                'slug' => 'shin-chuuka-ichiban',
                'jenis' => 'tv',
                'skor' => 6.46,
                'sinopsis' => 'Lanjutan dari anime Chuuka Ichiban. Setelah melewati Ujian Chef Khusus Guangzhou, Mao memutuskan untuk melakukan perjalanan keliling Cina, untuk mempelajari lebih lanjut tentang persiapan makanan yang unik. Setelah kembali, ia akan belajar bahwa pertempuran sesungguhnya baru saja dimulai. Dunia masak Gerilya sudah mulai bergerak…',
                'created_at' => '2019-10-23 13:28:33',
                'updated_at' => '2019-10-23 16:22:07',
            ),
            7 =>
            array(
                'id' => 8,
                'user_id' => 2,
                'judul' => 'Radiant 2nd Season',
                'slug' => 'radiant-2nd-season',
                'jenis' => 'tv',
                'skor' => 7.29,
                'sinopsis' => 'Musim kedua dari anime ini. 

Seth adalah penyihir yang berasal dari daerah Bukit Pompo. Seperti semua penyihir lainnya, dirinya terinfeksi salah satu makhluk hidup yang selamat setelah kontak dengan Nemesis, makhluk yang jatuh dari langit yang mencemari dan menghancurkan semua yang disentuhnya. Seth yang telah kebal dengan mereka ingin menjadi Hunter dan melawan Nemesis.  

Translator, Editor, Kara: adit_kyousuke
Encoder: dhan',
                'created_at' => '2019-10-23 13:32:41',
                'updated_at' => '2019-11-01 19:41:19',
            ),
            8 =>
            array(
                'id' => 9,
                'user_id' => 1,
                'judul' => 'Tenka Hyakken: Meiji-kan e Youkoso!',
                'slug' => 'tenka-hyakken-meiji-kan-e-youkoso',
                'jenis' => 'tv',
                'skor' => 5.19,
                'sinopsis' => 'Mitsurugi, gadis-gadis jelmaan dari pedang kuno. Setelah era peperangan berakhir, mereka menjalani hidup dengan damai. Namun, musuh baru dari alternatif Era Meiji muncul.',
                'created_at' => '2019-10-23 13:45:18',
                'updated_at' => '2019-10-23 16:29:33',
            ),
            9 =>
            array(
                'id' => 10,
                'user_id' => 2,
                'judul' => 'Assassins Pride',
                'slug' => 'assassins-pride',
                'jenis' => 'tv',
                'skor' => 6.89,
                'sinopsis' => 'Hanya orang-orang dari keluarga bangsawan saja yang memiliki kekuatan untuk bertarung melawan monster, mana. Kufa adalah seorang  guru yang dikirim untuk mengajar seorang gadis tak berbakat bernama Mareida. Namun, dia memiliki dua tugas. Pertama adalah mengajari Mareida. Kedua, apabila bakat gadis itu tak kunjung muncul, ia diperintahkan untuk membunuhnya. Mengakhiri sebuah masalah sebelum semuanya semakin menjadi, itulah kebanggaan assassins.  

Translator: Alice (1-3), adit_kyousuke (4- dst)
TLC: ALICE
KaraFX: Mashiro
Encoder: dhan',
                'created_at' => '2019-10-23 14:01:19',
                'updated_at' => '2019-11-08 20:16:50',
            ),
            10 =>
            array(
                'id' => 16,
                'user_id' => 4,
                'judul' => 'Kandagawa Jet Girls',
                'slug' => 'kandagawa-jet-girls',
                'jenis' => 'tv',
                'skor' => 5.91,
                'sinopsis' => 'Ini adalah dunia di mana balap jet ski telah menjadi olahraga utama. Dua orang membentuk sepasang dan naik satu jet ski dengan satu orang yang mengoperasikan jet ski, yang dikenal sebagai ‘jetter,’ dan satu orang menyerang dengan pistol air, yang dikenal sebagai ‘penembak.’ 
Ibu Rin Namiki adalah seorang jetter legendaris dan Rin juga bermimpi menjadi pembalap jet ski seperti dia, jadi dia meninggalkan pulau kelahirannya dan datang ke Asakusa, Tokyo. 

Di sana, dia bertemu Misa Aoi, seorang gadis keren yang cantik, dan mereka menjadi pasangan. Bersama-sama, mereka secara bertahap memperdalam ikatan mereka saat mereka berpacu melawan saingan mereka.',
                'created_at' => '2019-10-26 20:18:11',
                'updated_at' => '2019-10-26 21:09:17',
            ),
            11 =>
            array(
                'id' => 17,
                'user_id' => 2,
                'judul' => 'Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinchou Sugiru',
                'slug' => 'shinchou-yuusha-kono-yuusha-ga-ore-tueee-kuse-ni-shinchou-sugiru',
                'jenis' => 'tv',
                'skor' => 8.04,
                'sinopsis' => 'Cerita dimulai ketika Dewi Ristarte memanggil seorang pahlawan untuk membantunya menyelesaikan dunia Geabrande dengan tingkat kesulitan hard-mode. Meskipun pahlawan Ryuuguuin Seiya memiliki kemampuan luar biasa, tapi ia sangat berhati-hati. Ia bahkan membeli tiga set baju besi (satu untuk dipakai, satu cadangan, dan satu cadangan untuk cadangan). Ia bertarung dengan kekuatan penuh meski hanya melawan slime yang lemah.  

Translator: MaMaGi
TLC/Editor: Hafizh Aditya
Typesetter: ALICE
Encoder: dhan',
                'created_at' => '2019-10-28 10:09:36',
                'updated_at' => '2019-11-02 05:09:32',
            ),
            12 =>
            array(
                'id' => 18,
                'user_id' => 7,
                'judul' => 'Val x Love',
                'slug' => 'val-x-love',
                'jenis' => 'tv',
                'skor' => 6.57,
                'sinopsis' => 'Takuma Akutsu, anak SMA biasa yang hanya ingin hidup tenang. Sayangnya hari-hari normalnya berubah ketika sembilan perempuan Valkyrie bersaudara datang menerobos ke rumahnya. Mereka menugaskannya untuk menaikkan level mereka untuk melawan monster yang mengancam manusia.  

Translator: MashiroIchinose
KaraFX: Aria~
TLC/Editor: DameGami
Encoder: dhan',
                'created_at' => '2019-10-28 21:18:03',
                'updated_at' => '2019-11-09 22:29:29',
            ),
            13 =>
            array(
                'id' => 26,
                'user_id' => 7,
                'judul' => 'Null Peta',
                'slug' => 'null-peta',
                'jenis' => 'tv',
                'skor' => 6.15,
                'sinopsis' => 'Kreator genius, Null kehilangan kakaknya, Peta dalam insiden kecelakaan. Untuk mengatasi kesedihan, Null mengembangkan "Peta Robo", robot dengan karakteristik mirip dengan kakaknya. Namun, robot itu sedikit berbeda dengan apa yang diharapkannya.

Translator, TLC, Lirik OP : MashiroIchinose
Kara FX, Encoder : Aria~',
                'created_at' => '2019-11-03 05:28:42',
                'updated_at' => '2019-11-09 04:24:42',
            ),
        ));
    }
}
