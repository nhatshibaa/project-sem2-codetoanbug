<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('articles')->truncate();

        \Illuminate\Support\Facades\DB::table('articles')->insert([
            [
                'id' => 1,
                'idArticle' => 1,
                'titles' => 'Tin tức',
                'images' => '',
                'contents' => 'Trang web mới với nhiều chức năng quen thuộc với người dùng.',
            ],
            [
                'id' => 2,
                'idArticle' => 2,
                'titles' => 'Bảo mật',
                'images' => '',
                'contents' => 'Cảnh báo có một số đối tượng lợi dụng trang web để trục lợi mong người dùng cẩn thận.',
            ],
            [
                'id' => 3,
                'idArticle' => 1,
                'titles' => 'Cho người dùng',
                'images' => '',
                'contents' => 'Chúng tôi đã cập nhật thêm nhiều chức năng để phù hợp cho tất cả mọi người có thể truy cập trang web dễ dàng.',
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
