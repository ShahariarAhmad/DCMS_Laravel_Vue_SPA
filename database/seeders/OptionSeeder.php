<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert(
            [
                [
                    'id' => 1,
                    'list' => 'হ্যা'
                ],
                [
                    'id' => 2,
                    'list' => 'না'
                ],
                [
                    'id' => 3,
                    'list' => 'মাঝে মাঝে'
                ],
                [
                    'id' => 4,
                    'list' => 'গাঁজা'
                ],
                [
                    'id' => 5,
                    'list' => 'কোকেইন'
                ],
                [
                    'id' => 6,
                    'list' => 'ওপিয়ড'
                ],
                [
                    'id' => 7,
                    'list' => 'অন্যান'
                ],
                [
                    'id' => 8,
                    'list' => 'পি.এস.সি'
                ],
                [
                    'id' => 9,
                    'list' => 'জে.এস.সি'
                ],
                [
                    'id' => 10,
                    'list' => 'এস.এস.সি'
                ],
                [
                    'id' => 11,
                    'list' => 'ইন্টারমিডিয়েট'
                ],
                [
                    'id' => 12,
                    'list' => 'অনার্স'
                ],
                [
                    'id' => 13,
                    'list' => 'মাস্টার্স'
                ],
                [
                    'id' => 14,
                    'list' => 'পিএইচডি'
                ],
                [
                    'id' => 15,
                    'list' => 'অবসর প্রাপ্ত'
                ],
                [
                    'id' => 16,
                    'list' => 'অবিবাহিত'
                ],
                [
                    'id' => 17,
                    'list' => 'বিবাহিত'
                ],
                [
                    'id' => 18,
                    'list' => 'তালাক হয়েছে'
                ],
                [
                    'id' => 19,
                    'list' => 'বিধবা'
                ]
            ]
        );

    }
}
