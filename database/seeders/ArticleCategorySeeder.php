<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('article_categories')->truncate();

        \Illuminate\Support\Facades\DB::table('article_categories')->insert([
            [
                'id' => 1,
                'name' => 'Tin tức',
            ],
            [
                'id' => 2,
                'name' => 'Bảo mật',
            ],
            [
                'id' => 3,
                'name' => 'Cho người dùng',
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
