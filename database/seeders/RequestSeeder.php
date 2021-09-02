<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('requests')->truncate();

        \Illuminate\Support\Facades\DB::table('requests')->insert([
            [
                'id' => 1,
                'idUser' => 2,
                'giftId' => 2,
                'title' => 'Đồ bộ cho bé',
                'content' => 'Tôi muốn xin bộ đồ này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 2,
                'idUser' => 19,
                'giftId' => 19,
                'title' => 'Đầm cho bé',
                'content' => 'Tôi muốn xin cái đầm này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 3,
                'idUser' => 4,
                'giftId' => 4,
                'title' => 'Đồ bộ cho bé',
                'content' => 'Tôi muốn xin bộ đồ này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 4,
                'idUser' => 7,
                'giftId' => 7,
                'title' => 'Quần cho bé',
                'content' => 'Tôi muốn xin quần này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 5,
                'idUser' => 2,
                'giftId' => 22,
                'title' => 'Mũ cho bé',
                'content' => 'Tôi muốn xin mũ này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 6,
                'idUser' => 8,
                'giftId' => 8,
                'title' => 'Quần cho bé',
                'content' => 'Tôi muốn xin quần này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 7,
                'idUser' => 12,
                'giftId' => 12,
                'title' => 'Áo cho bé',
                'content' => 'Tôi muốn xin áo này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 17,
                'idUser' => 17,
                'giftId' => 6,
                'title' => 'Đầm cho bé',
                'content' => 'Tôi muốn xin đầm này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 9,
                'idUser' => 3,
                'giftId' => 23,
                'title' => 'Giày cho bé',
                'content' => 'Tôi muốn xin giày này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
            [
                'id' => 10,
                'idUser' => 8,
                'giftId' => 28,
                'title' => 'Dép cho bé',
                'content' => 'Tôi muốn xin dép này cho bé, bạn có thể cho tôi không.',
                'status' => 0,
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
