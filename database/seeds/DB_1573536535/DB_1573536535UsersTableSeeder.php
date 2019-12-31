<?php

use Illuminate\Database\Seeder;

class DB_1573536535UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ibnu',
                'email' => 'ibnu.magang@gmail.com',
                'is_admin' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$.TiISguUUPPKpsul5I3Vu.IZptm0b9xXKqmjppTBfgIJXLdrJBoyC',
                'remember_token' => 'KrWDwVn1acuF3F2ZKAadPTB2MrItclEvFMPwoBu081xB1EwtnNgngUMyfBlb',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'dhan',
                'email' => 'dhanuenv97@gmail.com',
                'is_admin' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$E27ws1kPENUMN2YSy/26fuXeq5rL8CcQ0Yv1MXAUEWc7OPop428zK',
                'remember_token' => 'HQ992pK3OlHxHnxh9MOTtcLx1pgoc7QGuDpbKCMOElk93ksmGmvRStOsUuDp',
                'created_at' => '2019-10-23 10:22:05',
                'updated_at' => '2019-10-23 10:22:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Rayhan Gilang',
                'email' => 'raihangilanga@gmail.com',
                'is_admin' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$eJfZo27OapegPIzBcDo5K.aMqiepGZCMTrHsY2gwvJ9D5JZHfXMQe',
                'remember_token' => NULL,
                'created_at' => '2019-10-23 10:31:31',
                'updated_at' => '2019-10-23 10:31:31',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'KizunaSW',
                'email' => 'sandiwahyudi150@gmail.com',
                'is_admin' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$A7DR9IlpxkuXHHGNWkn4z.mv2hpCXzvzd2Uyx5/gSZ3Gp5IcFUqTu',
                'remember_token' => NULL,
                'created_at' => '2019-10-23 11:33:24',
                'updated_at' => '2019-10-23 11:33:24',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Anettochan',
                'email' => 'hafizhsuhirman@gmail.com',
                'is_admin' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$UXgHSve.Wnq/g.PypyN23e.NK3JiLzKlLcz5dOd42zzRIeY5jxasa',
                'remember_token' => NULL,
                'created_at' => '2019-10-23 11:33:48',
                'updated_at' => '2019-10-23 11:33:48',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'adit_kyousuke',
                'email' => 'adit.b.setiawan@gmail.com',
                'is_admin' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$fh01L1bDpX5yrJydv3dje.LDJJwgWTtNm6L/A6/LDrBjOuLu8EAEK',
                'remember_token' => 'ijJCJA6n41fNRVpjhdRFIXASQoT70wRulTwBJETlvbnwxXtnfzG2Sq8IGXVU',
                'created_at' => '2019-10-23 11:53:38',
                'updated_at' => '2019-10-23 11:53:38',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'staf',
                'email' => 'mashiroichinose@gmail.com',
                'is_admin' => 1,
                'email_verified_at' => NULL,
                'password' => '$2y$10$w9quB4On664z5RAwlcTf.eMqJUi9h3h9zDJ3dSiDh7fuKMJSr.bLy',
                'remember_token' => 'jWzKdyFpfWAD1y9ZBql4XcfOgUDpb62UksGEGBifnRvsFki2wFmv9Si04MqS',
                'created_at' => '2019-11-03 04:48:03',
                'updated_at' => '2019-11-03 04:48:03',
            ),
        ));
        
        
    }
}