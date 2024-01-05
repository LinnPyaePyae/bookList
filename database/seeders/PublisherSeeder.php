<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = [
            [
                "name" => "Sin Phyu Kyune Kyaw Hlaing Oo",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "Khin Swe Oo",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "Min Ko Naing",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "Moe Moe(Innlya)",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "Naing Zaw(Lazy Club)",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "Naing Naing Sanay",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "Than Win Hlaing",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "Yar Pyae U Soe Nyunt",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "Chit Oo Nyo",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                "name" => "A Kyi Taw",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]
        ];
        Publisher::insert($arr);
    }
}
