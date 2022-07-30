<?php

namespace Database\Seeders;

use App\Models\Diet_request;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;


class DietRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaction = Transaction::skip(330)->take(170)->orderBy('id')->get('id');

      
        foreach ($transaction as $data) {

           

                Diet_request::create(

                    [

                        'transaction_id' => $data->id,
                        'q_one' => 'ko',
                        'q_two' => 'mo',
                        'q_three' => 'so',
                        'q_four' => 'pa',
                        'q_five' => 'pa',
                        'q_six' => 'pa',

                        'send' => 'y'
                    ]
                );
       
        }
    }
}
