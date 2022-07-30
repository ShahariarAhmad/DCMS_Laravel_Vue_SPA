<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Container\Container;
use Faker\Generator;

class TransactionSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = ['pending', 'approved', 'withdrawn', 'notfound'];
        $paymentMethod = ['bkash', 'nagad', 'dbbl', 'rocket'];



        for ($i = 1; $i < 501; $i++) {

            // For diet 
            if ($i > 0 & $i < 12) {
                $user = 1;
            } else if ($i > 11 & $i < 23) {
                $user = 2;
            } else if ($i > 22 & $i < 34) {
                $user = 3;
            } else if ($i > 33 & $i < 45) {
                $user = 4;
            } else if ($i > 44 & $i < 56) {
                $user = 5;
            } else if ($i > 55 & $i < 67) {
                $user = 6;
            } else if ($i > 66 & $i < 78) {
                $user = 7;
            } else if ($i > 77 & $i < 89) {
                $user = 8;
            } else if ($i > 88 & $i < 100) {
                $user = 9;
            } else if ($i > 99 & $i < 111) {
                $user = 10;
            } else if ($i > 110 & $i < 122) {
                $user = 11;
            } else if ($i > 121 & $i < 133) {
                $user = 12;
            } else if ($i > 131 & $i < 144) {
                $user = 13;
            } else if ($i > 143 & $i < 155) {
                $user = 14;
            } else if ($i > 154 & $i < 166) {
                $user = 15;
            }

            // ================



            // for appointment 

            else if ($i > 165 & $i < 177) {
                $user = 1;
            } else if ($i > 176 & $i < 188) {
                $user = 2;
            } else if ($i > 187 & $i < 199) {
                $user = 3;
            } else if ($i > 198 & $i < 210) {
                $user = 4;
            } else if ($i > 209 & $i < 221) {
                $user = 5;
            } else if ($i > 220 & $i < 232) {
                $user = 6;
            } else if ($i > 231 & $i < 243) {
                $user = 7;
            } else if ($i > 242 & $i < 254) {
                $user = 8;
            } else if ($i > 254 & $i < 265) {
                $user = 9;
            } else if ($i > 264 & $i < 276) {
                $user = 10;
            } else if ($i > 275 & $i < 287) {
                $user = 11;
            } else if ($i > 286 & $i < 298) {
                $user = 12;
            } else if ($i > 297 & $i < 309) {
                $user = 13;
            } else if ($i > 308 & $i < 320) {
                $user = 14;
            } else if ($i > 319 & $i < 331) {
                $user = 15;
            }


            // Diet request  





            else if ($i > 330 & $i < 342) {
                $user = 1;
            } else if ($i > 341 & $i < 353) {
                $user = 2;
            } else if ($i > 352 & $i < 364) {
                $user = 3;
            } else if ($i > 363 & $i < 375) {
                $user = 4;
            } else if ($i > 374 & $i < 386) {
                $user = 5;
            } else if ($i > 385 & $i < 397) {
                $user = 6;
            } else if ($i > 396 & $i < 408) {
                $user = 7;
            } else if ($i > 407 & $i < 419) {
                $user = 8;
            } else if ($i > 418 & $i < 430) {
                $user = 9;
            } else if ($i > 429 & $i < 441) {
                $user = 10;
            } else if ($i > 440 & $i < 452) {
                $user = 11;
            } else if ($i > 451 & $i < 463) {
                $user = 12;
            } else if ($i > 462 & $i < 474) {
                $user = 13;
            } else if ($i > 473 & $i < 485) {
                $user = 14;
            } else if ($i > 484 & $i < 496) {
                $user = 15;
            } else {
                $user = 4;
            }


            Transaction::create(

                [

                    'trix_id' => $this->faker->unique()->ean13,
                    'amount' => 500,
                    'sent_to' => '+88-0171-0000-111',
                    'sent_from' => $this->faker->unique()->e164PhoneNumber,
                    'user_id' => $user,
                    'payment_status' => $status[array_rand($status)],
                    'payment_method' => $paymentMethod[array_rand($paymentMethod)],

                    'handler_id' => 2
                ]
            );
        }
    }
}
