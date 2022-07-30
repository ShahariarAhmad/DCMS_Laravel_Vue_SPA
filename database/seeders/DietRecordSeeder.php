<?php

namespace Database\Seeders;

use App\Models\Diet;
use App\Models\Diet_record;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DietRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  

    {
    
        $transaction = Transaction::skip(0)->take(165)->orderBy('id')->get(['id', 'user_id']);
    
        $did = 1;
    
        foreach ($transaction as $data) {
          
        
                
                Diet_record::create(

                    [
                        
                        'user_id' => $data->user_id,
                        'transaction_id' => $data->id,
                        'date_of_submission' => now()->format('d-m-Y'),
                        'diet_id' =>  $did++
                    ]

                );
          
            }
        
    }
}
