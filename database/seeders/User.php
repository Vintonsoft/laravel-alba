<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = [
            [
                'role_ID'       =>      '1',
                'name'          =>      'Admin',
                'surname'       =>      'Admin',
                'email'         =>      'WVdSdGFXNUFhRzkwYldGcGJDNWpiMjA9',
                'phone'         =>      '05348162256',
                'password'      =>      '$2y$10$Sq.9MGnx.74ZLscJt6TreOgQLlD4z1iz/T30FBJXqmMXXIge0faKG',
            ],
            [
                'role_ID'       =>      '2',
                'name'          =>      'User',
                'surname'       =>      'User',
                'email'         =>      'ZFhObGNrQm9iM1J0WVdsc0xtTnZiUT09',
                'phone'         =>      '05501101010',
                'password'      =>      '$2y$10$yUIaigQrFBkYUH/TTdDxMOWT/QfdPsgOb8PMKQ4kkAhtaQYQmoXWu',
            ]
        ];
        DB::table('users')->insert($users);
    }
}
