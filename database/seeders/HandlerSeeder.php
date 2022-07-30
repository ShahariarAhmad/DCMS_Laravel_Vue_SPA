<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HandlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('handlers')->insert(
            [
                [
                    'id' => 1,
                    'user_id' => 1
                ],


                [
                    'id' => 2,
                    'user_id' => 2
                ]
            ]
        );

    }
}
