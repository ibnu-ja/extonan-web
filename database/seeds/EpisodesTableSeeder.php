<?php

use Illuminate\Database\Seeder;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'episode' => '1',
            'animes_id' => '1'
        ]);
        DB::table('episodes')->insert([
            'episode' => '2',
            'animes_id' => '1'
        ]);
        DB::table('episodes')->insert([
            'episode' => '3',
            'animes_id' => '1'
        ]);
        DB::table('episodes')->insert([
            'episode' => '1',
            'animes_id' => '2'
        ]);
        DB::table('episodes')->insert([
            'episode' => '2',
            'animes_id' => '2'
        ]);
        DB::table('episodes')->insert([
            'episode' => '1',
            'animes_id' => '3'
        ]);
        DB::table('episodes')->insert([
            'episode' => '2',
            'animes_id' => '3'
        ]);
        DB::table('episodes')->insert([
            'episode' => '3',
            'animes_id' => '3'
        ]);
        DB::table('episodes')->insert([
            'episode' => 'OVA',
            'animes_id' => '3'
        ]);
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 40; $i++) {
            App\Episodes::create([
                'episode' => $faker->numberBetween($min = 1, $max = 25),
                'animes_id' => $faker->numberBetween($min = 1, $max = 4)
            ]);
        }
    }
}
