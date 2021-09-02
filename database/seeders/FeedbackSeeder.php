<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('feedback')->truncate();

        \Illuminate\Support\Facades\DB::table('feedback')->insert([
            [
                'idUser' => 1,
                'content' => 'Có nhiều chức năng phù hợp người dùng',
            ],
            [
                'idUser' => 2,
                'content' => 'Có ít sản phẩm trao đổi',
            ],
            [
                'idUser' => 4,
                'content' => 'Tôi nghĩ trang web nên thêm yêu cầu đồ cho mọi người.',
            ],[
                'idUser' => 3,
                'content' => 'Giao diện đẹp.',
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
