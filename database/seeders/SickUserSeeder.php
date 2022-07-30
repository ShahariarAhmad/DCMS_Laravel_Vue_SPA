<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SickUserSeeder extends Seeder
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


            DB::table('sick_user')->insert(
                [
                    [
                        'sick_id' => 1,
                        'user_id' => $data->id,

                    ],
                    [
                        'sick_id' => 2,
                        'user_id' => $data->id,
                    ],

                    [
                        'sick_id' => 5,
                        'user_id' => $data->id,

                    ],

                    [
                        'sick_id' => 7,
                        'user_id' => $data->id,
                    ],
                    [
                        'sick_id' => 8,
                        'user_id' => $data->id,
                    ],

                    [

                        'sick_id' => 12,
                        'user_id' => $data->id,
                    ],

                    [

                        'sick_id' => 17,
                        'user_id' => $data->id,

                    ],
                    [

                        'sick_id' => 18,
                        'user_id' => $data->id,

                    ],

                    [

                        'sick_id' => 20,
                        'user_id' => $data->id,

                    ],
                    [

                        'sick_id' => 21,
                        'user_id' => $data->id,

                    ],

                    [

                        'sick_id' => 26,
                        'user_id' => $data->id,

                    ],

                    [

                        'sick_id' => 29,
                        'user_id' => $data->id,

                    ],
                    [

                        'sick_id' => 51,
                        'user_id' => $data->id,

                    ],

                    [
                        'sick_id' => 56,
                        'user_id' => $data->id,

                    ],
                    [
                        'sick_id' => 57,
                        'user_id' => $data->id,

                    ],

                    [
                        'sick_id' => 67,
                        'user_id' => $data->id,

                    ],
                    [
                        'sick_id' => 64,
                        'user_id' => $data->id,

                    ],

                    [
                        'sick_id' => 66,
                        'user_id' => $data->id,

                    ],
                    [
                        'sick_id' => 67,
                        'user_id' => $data->id,

                    ],

                    [
                        'sick_id' => 81,
                        'user_id' => $data->id,

                    ],
                    [
                        'sick_id' => 82,
                        'user_id' => $data->id,

                    ],

                    [
                        'sick_id' => 89,
                        'user_id' => $data->id,

                    ],


                    [
                        'sick_id' => 97,
                        'user_id' => $data->id,
                    ]

                ]
            );
        }
    }
}
