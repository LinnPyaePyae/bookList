<?php

namespace Database\Seeders;

use App\Models\Tbl_Book;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                "book_uniq_id" => "BK001",
                "book_name" => "Ba Wa Mone Tine",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/43/d6/0a/43d60ab03717ee70e3e091a8533a9126.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK002",
                "book_name" => "Mone Yawe Ma Hu",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/6a/dc/b9/6adcb94cc731fadcfaa560a1f98e2362.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK003",
                "book_name" => "Myawaddy Magazine",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/f7/6d/7e/f76d7e77911de0b0dde1efd3b64956bc.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK004",
                "book_name" => "Chit Thaw A Nyo",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/66/29/b7/6629b7b10b2d2f722201178268f10e4a.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK005",
                "book_name" => "Chindwin Gone Yee",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/1b/9b/c1/1b9bc15f378245a6435316fc37a06e14.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK006",
                "book_name" => "Ma Eain Kan",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/3b/a0/35/3ba0353715689e73ca22a1fec02a8682.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK007",
                "book_name" => "Mya Kyar Phyu",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/f5/3e/09/f53e09defe8d5d08280e2325a7ca0095.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK008",
                "book_name" => "Myaing",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/cf/ee/f7/cfeef769cf34ff036a4dbedecebc6780.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK009",
                "book_name" => "Ta Pyay Thu Ma Shwe Htar",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/c2/86/1a/c2861adfca1d6b0501c99c19edca47dc.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "book_uniq_id" => "BK0010",
                "book_name" => "Lwan Ya Aung",
                "user_id" => 1,
                "co_id" => rand(1, 10),
                "publisher_id" => rand(1, 10),
                "cover_photo" => "https://i.pinimg.com/564x/3e/6d/2d/3e6d2daf2fc8a69a01f157153c11e866.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]

        ];

        Tbl_Book::insert($arr);
    }
}
