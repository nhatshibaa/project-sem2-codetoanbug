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
                'category_name' => 'Mũ',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 2,
                'category_name' => 'Áo',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 3,
                'category_name' => 'Quần',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 4,
                'category_name' => 'Giày, dép',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 5,
                'category_name' => 'Đồ bộ',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
            [
                'id' => 6,
                'category_name' => 'Váy',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
                'createBy' => 1,
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
