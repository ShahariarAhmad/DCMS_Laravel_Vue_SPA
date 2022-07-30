<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use App\Models\Transaction;

use Illuminate\Container\Container;

class AppointmentSeeder extends Seeder
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


    // ]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]

    {
        $transaction = Transaction::skip(165)->take(330)->orderBy('id')->get(['id', 'user_id']);
        $chamber = [1,2,3];
        $handler = [1,2];
        $present = [0,1];

        $tid = 0;

        foreach ($transaction as $data) {



            Appointment::create(

                [

                    'desired_serial_date' =>    ($data->id % 2 == 0)    ?  now()->format("Y-m-d") : now()->addDays(1)->format("Y-m-d"),
                    // 'last_visit_date' => now()->format("Y-m-d"),
                    // 'cause' => 'visit',
                    'present' => $present[array_rand($present)],
                    'given_serial_no' => $tid++,
                    // 'appointed_date' => now()->addDays(2)->format("Y-m-d"),
                    'transaction_id' =>  $data->id,
                    'chamber_id' => $chamber[array_rand($chamber)],
                    'handler_id' => $handler[array_rand($handler)],
                ]

            );
        }
    }
}
