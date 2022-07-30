<?php

namespace Database\Seeders;

use App\Models\History_anwser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $patient = User::where('role_id', 3)->get('id');

        foreach ($patient as $data) {

            DB::table('history_anwsers')->insert(

                [
                    [

                        'user_id' => $data->id,
                        'history_id' => 1,
                        'option_id' => 1
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 2,
                        'option_id' => 2
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 3,
                        'option_id' => 1
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 4,
                        'option_id' => 1
                    ],


                    [

                        'user_id' => $data->id,
                        'history_id' => 5,
                        'option_id' => 2
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 6,
                        'option_id' => 1
                    ],

                    // social 
                    [

                        'user_id' => $data->id,
                        'history_id' => 7,
                        'option_id' => 1
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 8,
                        'option_id' => 1
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 9,
                        'option_id' => 1
                    ],


                    [

                        'user_id' => $data->id,
                        'history_id' => 10,
                        'option_id' => 7
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 11,
                        'option_id' => 8
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 12,
                        'option_id' => 2
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 12,
                        'option_id' => 15
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 13,
                        'option_id' => 1
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 14,
                        'option_id' => 16
                    ],

                    [

                        'user_id' => $data->id,
                        'history_id' => 15,
                        'option_id' => 1
                    ],

                ]

            );
        }
    }
}
