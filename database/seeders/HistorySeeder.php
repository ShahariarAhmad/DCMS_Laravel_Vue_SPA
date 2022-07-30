<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('histories')->insert(
            [
                [
                    'id' => 1,
                    'question' => 'আপনার ডায়বেটিক আছে ?',
                    'type' => 'medical'
                ],
                [
                    'id' => 2,
                    'question' => 'উচ্চ রক্তচাপ আছে ?',
                    'type' => 'medical'
                ],
                [
                    'id' => 3,
                    'question' => 'রক্তে উচ্চ শর্করার সমস্যা আছে ?',
                    'type' => 'medical'
                ],
                [
                    'id' => 4,
                    'question' => 'আপনার কি ক্যান্সার আছে ?',
                    'type' => 'medical'
                ],
                [
                    'id' => 5,
                    'question' => 'আপনার কি আথ্রাইটিস আছে ?',
                    'type' => 'medical'
                ],

                [
                    'id' => 6,
                    'question' => 'গত ৬ মাসে হাস্পাতালে ভর্তি হয়েছিলেন ?',
                    'type' => 'medical'
                ],
                [
                    'id' => 7,
                    'question' => 'আপনি ধূমপান করেন ?',
                    'type' => 'social'
                ],
                [
                    'id' => 8,
                    'question' => 'আপনি vaping করেন ?',
                    'type' => 'social'
                ],
                [
                    'id' => 9,
                    'question' => 'অ্যালকোহলিক পানীয় পান করেন ?',
                    'type' => 'social'
                ],
                [
                    'id' => 10,
                    'question' => 'আপনি নেশা করেন ?',
                    'type' => 'social'
                ],
                [
                    'id' => 11,
                    'question' => 'আপনার সর্বোচ্চ শিক্ষাগত যোগ্যতা ?',
                    'type' => 'social'
                ],
                [
                    'id' => 12,
                    'question' => 'আপনি কি বেকার ?',
                    'type' => 'social'
                ],
                [
                    'id' => 13,
                    'question' => 'আপনি কি ব্যায়াম করেন ?',
                    'type' => 'social'
                ],
                [
                    'id' => 14,
                    'question' => 'আপনার বৈবাহিক অবস্থা কি ?',
                    'type' => 'social'
                ],
                [
                    'id' => 15,
                    'question' => 'আপনার সন্তান আছে ?',
                    'type' => 'social'
                ]

            ]
        );
    }
}
