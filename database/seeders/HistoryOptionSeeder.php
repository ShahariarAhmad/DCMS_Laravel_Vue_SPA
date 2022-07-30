<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history_options')->insert(
            [
                [
                    'id' => 1,
                    'history_id' => 1,
                    'option_id' => 1
                ],
                [
                    'id' => 2,
                    'history_id' => 1,
                    'option_id' => 2
                ],
                [
                    'id' => 3,
                    'history_id' => 2,
                    'option_id' => 1
                ],
                [
                    'id' => 4,
                    'history_id' => 2,
                    'option_id' => 2
                ],
                [
                    'id' => 5,
                    'history_id' => 3,
                    'option_id' => 1
                ],
                [
                    'id' => 6,
                    'history_id' => 3,
                    'option_id' => 2
                ],
                [
                    'id' => 7,
                    'history_id' => 4,
                    'option_id' => 1
                ],
                [
                    'id' => 8,
                    'history_id' => 4,
                    'option_id' => 2
                ],
                [
                    'id' => 9,
                    'history_id' => 5,
                    'option_id' => 1
                ],
                [
                    'id' => 10,
                    'history_id' => 5,
                    'option_id' => 2
                ],
                [
                    'id' => 11,
                    'history_id' => 6,
                    'option_id' => 1
                ],
                [
                    'id' => 12,
                    'history_id' => 6,
                    'option_id' => 2
                ],
                // social 
                [
                    'id' => 13,
                    'history_id' => 7,
                    'option_id' => 1
                ],
                [
                    'id' => 14,
                    'history_id' => 7,
                    'option_id' => 2
                ],
                [
                    'id' => 15,
                    'history_id' => 8,
                    'option_id' => 1
                ],
                [
                    'id' => 16,
                    'history_id' => 8,
                    'option_id' => 2
                ],
                [
                    'id' => 17,
                    'history_id' => 9,
                    'option_id' => 1
                ],
                [
                    'id' => 18,
                    'history_id' => 9,
                    'option_id' => 2
                ],
                [
                    'id' => 19,
                    'history_id' => 10,
                    'option_id' => 2
                ],
                [
                    'id' => 20,
                    'history_id' => 10,
                    'option_id' => 2
                ],
                [
                    'id' => 21,
                    'history_id' => 10,
                    'option_id' => 3
                ],
                [
                    'id' => 22,
                    'history_id' => 10,
                    'option_id' => 4
                ],
                [
                    'id' => 23,
                    'history_id' => 10,
                    'option_id' => 5
                ],
                [
                    'id' => 24,
                    'history_id' => 10,
                    'option_id' => 6
                ],
                [
                    'id' => 25,
                    'history_id' => 10,
                    'option_id' => 7
                ],
                [
                    'id' => 26,
                    'history_id' => 11,
                    'option_id' => 8
                ],
                [
                    'id' => 27,
                    'history_id' => 11,
                    'option_id' => 9
                ],
                [
                    'id' => 28,
                    'history_id' => 11,
                    'option_id' => 10
                ],
                [
                    'id' => 29,
                    'history_id' => 11,
                    'option_id' => 11
                ],
                [
                    'id' => 30,
                    'history_id' => 11,
                    'option_id' => 12
                ],
                [
                    'id' => 31,
                    'history_id' => 11,
                    'option_id' => 13
                ],
                [
                    'id' => 32,
                    'history_id' => 11,
                    'option_id' => 14
                ],
                [
                    'id' => 33,
                    'history_id' => 12,
                    'option_id' => 1
                ],
                [
                    'id' => 34,
                    'history_id' => 12,
                    'option_id' => 2
                ],
                [
                    'id' => 35,
                    'history_id' => 12,
                    'option_id' => 15
                ],
                [
                    'id' => 36,
                    'history_id' => 13,
                    'option_id' => 1
                ],
                [
                    'id' => 37,
                    'history_id' => 13,
                    'option_id' => 2
                ],
                [
                    'id' => 38,
                    'history_id' => 14,
                    'option_id' => 16
                ],
                [
                    'id' => 39,
                    'history_id' => 14,
                    'option_id' => 17
                ],
                [
                    'id' => 40,
                    'history_id' => 14,
                    'option_id' => 18
                ],
                [
                    'id' => 41,
                    'history_id' => 14,
                    'option_id' => 19
                ],
                [
                    'id' => 42,
                    'history_id' => 15,
                    'option_id' => 1
                ],
                [
                    'id' => 43,
                    'history_id' => 15,
                    'option_id' => 2
                ]

            ]
        );
    }
}
