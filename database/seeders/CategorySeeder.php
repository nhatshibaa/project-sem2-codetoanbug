<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();

        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Mũ',
                'createAt' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Áo',
                'createAt' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Quần',
                'createAt' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Giày, dép',
                'createAt' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Đồ bộ',
                'createAt' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Váy',
                'createAt' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
