<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            'link' => 'Google,https://www.google.com/|Media api,https://www.mediafire.com/|Situs cantique,http://emak.com/',
            'res' => '720p',
            'episodes_id' => '1'
        ]);
        DB::table('links')->insert([
            'link' => 'Google,https://www.google.com/|Media api,https://www.mediafire.com/|Situs cantique,http://emak.com/',
            'res' => '480p',
            'episodes_id' => '1'
        ]);
        DB::table('links')->insert([
            'link' => 'Google,https://www.google.com/|Media api,https://www.mediafire.com/|Situs cantique,http://emak.com/',
            'res' => '480p',
            'episodes_id' => '2'
        ]);
    }
}
