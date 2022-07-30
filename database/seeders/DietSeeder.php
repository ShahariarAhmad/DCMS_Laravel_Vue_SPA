<?php

namespace Database\Seeders;

use App\Models\Diet;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;


class DietSeeder extends Seeder
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
        $transaction = Transaction::skip(0)->take(165)->get(['id', 'user_id']);
        $draft = [0,1];

        foreach ($transaction as $data) {

            Diet::create(
                [

                    'date' => "শনিবার, রবিবার, সোমবার, মঙ্গলবার, বুধবার, বৃহস্পতি, শুক্রবার",
                    'diet_chart' => '{"0": {"date": "মঙ্গলবার, বুধবার, বৃহস্পতি, শুক্রবার", "name": "সেদ্ধ ডিম (সাদা অংশ), জাম্বুরা, রুটি, ভেজিটেবল সুপ", "time": "সকাল ৮:০০", "amount": "১ টি, ১ বাটি, ২টি, ১ কাপ"}, "1": {"date": "মঙ্গলবার, বুধবার, বৃহস্পতি, শুক্রবার", "name": "এক কাপ গ্রিন টি চিনি ছাড়া , আপেল U+0030 কমলা", "time": "সকাল ১১:০০", "amount": "কোন ক্যালরি নেই, ১ টি"}, "2": {"date": "মঙ্গলবার, বুধবার, বৃহস্পতি, শুক্রবার", "name": "ভাত U+0030 রুটি,মিক্স্ড ভেজিটেবল, ডাল  U+0030  মাছ ", "time": "দুপুর ২:০০", "amount": "১ কাপ U+0030 ২ টি, ১ বাটি, ১ কাপ U+0030 এক টুকরা"}, "3": {"date": "মঙ্গলবার, বুধবার, বৃহস্পতি, শুক্রবার", "name": "গ্রিন টি, ক্রিম ছাড়া বিস্কিট", "time": "বিকেল ৫:০০", "amount": "১ কাপ (চিনি ছাড়া), ২টি"}, "4": {"date": "মঙ্গলবার, বুধবার, বৃহস্পতি, শুক্রবার", "name": "ডাবের পানি U+0030 পেস্তা বাদাম", "time": "সন্ধ্যা ৭:০০", "amount": "১ টি  U+0030 ৮-১০ টি"}, "5": {"date": "মঙ্গলবার, বুধবার, বৃহস্পতি, শুক্রবার", "name": "ভাত U+0030 রুটি, সালাদ, সবজি U+0030 টক দই", "time": "রাত ৮:৩০", "amount": "১ কাপ U+0030 ২ টি, ১ কাপ, ১ কাপ U+0030 আধা কাপ"}}',
                    'user_id' => $data->user_id,
                    'transaction_id' =>  $data->id,
                    'draft' => $draft[array_rand($draft)],
                    'note' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium consequatur explicabo dolorem impedit pariatur possimus eius fuga modi qui, odio nostrum reprehenderit repellat ex ipsum tempore illo veritatis accusantium officia.',
                    'q_one' => 'ya',
                    'q_two' => 'na',
                    'q_three' => 'yo',
                    'q_four' => 'lo',
                    'q_five' => 'lo',
                    'q_six' => 'lo',

                ]
            );
        }
    }
}
