<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('admins')->truncate();

        \Illuminate\Support\Facades\DB::table('admins')->insert([
            [
                'id' => 1,
                'username' => 'phamducduy',
                'password' => 'phamducduy',
                'fullName' => 'Phạm Đức Duy',
                'email' => 'duypdth2009006@fpt.edu.vn',
            ],
            [
                'id' => 2,
                'username' => '',
                'password' => '',
                'fullName' => '',
                'email' => '',
            ],
            [
                'id' => 3,
                'username' => '',
                'password' => '',
                'fullName' => '',
                'email' => '',
            ],
            [
                'id' => 4,
                'username' => '',
                'password' => '',
                'fullName' => '',
                'email' => '',
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
