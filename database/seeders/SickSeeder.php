<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SickSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sicks')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'জ্বর',
                    'category' => 'common',


                ],
                [
                    'id' => 2,
                    'name' => 'ঠাণ্ডা',
                    'category' => 'common',

                ],
                [
                    'id' => 3,
                    'name' => 'সব সময় শরীর খারাপ লাগা',
                    'category' => 'common',

                ],
                [
                    'id' => 4,
                    'name' => 'সব সময় ক্লান্তি অনুভব করা',
                    'category' => 'common',

                ],
                [
                    'id' => 5,
                    'name' => 'ওজন বৃদ্ধি',
                    'category' => 'common',

                ],
                [
                    'id' => 6,
                    'name' => 'ওজন কমে যাওয়া',
                    'category' => 'common',

                ],
                [
                    'id' => 7,
                    'name' => 'বুকে ব্যাথা',
                    'category' => 'heart_and_blood',
                ],
                [
                    'id' => 8,
                    'name' => 'বুক ধড়ফড় করা',
                    'category' => 'heart_and_blood',
                ],
                [
                    'id' => 9,
                    'name' => 'হৃদ স্পন্দন স্বাভাবিকের চেয়ে বেশি',
                    'category' => 'heart_and_blood',
                ],
                [
                    'id' => 10,
                    'name' => 'হৃদ স্পন্দন স্বাভাবিকের চেয়ে কম',
                    'category' => 'heart_and_blood',

                ],
                [
                    'id' => 11,
                    'name' => 'ব্যায়াম করলে পায়ে ব্যাথা হয়',
                    'category' => 'heart_and_blood',

                ],
                [
                    'id' => 12,
                    'name' => 'পা ফোলা ভাব',
                    'category' => 'heart_and_blood',

                ],
                [
                    'id' => 13,
                    'name' => 'জয়েন্টে ব্যাথা',
                    'category' => 'musculoskeletal',

                ],
                [
                    'id' => 14,
                    'name' => 'ঘাড়ে ব্যাথা',
                    'category' => 'musculoskeletal',

                ],
                [
                    'id' => 15,
                    'name' => 'জয়েন্ট ফুলে যাওয়া',
                    'category' => 'musculoskeletal',

                ],
                [
                    'id' => 16,
                    'name' => 'জয়েন্ট শক্ত হয়ে যাওয়া',
                    'category' => 'musculoskeletal',

                ],
                [
                    'id' => 17,
                    'name' => 'পেশিতে ব্যাথা',
                    'category' => 'musculoskeletal',

                ],
                [
                    'id' => 18,
                    'name' => 'পিঠ ব্যাথা',
                    'category' => 'musculoskeletal',

                ],
                [
                    'id' => 19,
                    'name' => 'অসাড়তা',
                    'category' => 'nervous_system',


                ],
                [
                    'id' => 20,
                    'name' => 'দূর্বলতা',
                    'category' => 'nervous_system',


                ],
                [
                    'id' => 21,
                    'name' => 'মাথা ঘুরা',
                    'category' => 'nervous_system',



                ],
                [
                    'id' => 22,
                    'name' => 'অজ্ঞান',
                    'category' => 'nervous_system',

                ],
                [
                    'id' => 23,
                    'name' => 'বিভ্রান্তি',
                    'category' => 'nervous_system',

                ],
                [
                    'id' => 24,
                    'name' => 'মাথা ব্যাথা',
                    'category' => 'nervous_system',

                ],
                [
                    'id' => 25,
                    'name' => 'চোখে ব্যাথা',
                    'category' => 'eye',

                ],
                [
                    'id' => 26,
                    'name' => 'লাল চোখ',
                    'category' => 'eye',

                ],
                [
                    'id' => 27,
                    'name' => 'দৃষ্টি শক্তির সমস্যা',
                    'category' => 'eye',

                ],
                [
                    'id' => 28,
                    'name' => 'চোখ দিয়ে কেতুর বের হওয়া',
                    'category' => 'eye',

                ],
                [
                    'id' => 29,
                    'name' => 'শুষ্ক চোখ',
                    'category' => 'eye',

                ],
                [
                    'id' => 30,
                    'name' => 'চোখ চুলকায়',
                    'category' => 'eye',

                ],
                [
                    'id' => 31,
                    'name' => 'কানে ব্যাথা',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 32,
                    'name' => 'কানে কম শোনা',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 33,
                    'name' => 'নাক দিয়ে রক্ত পড়া',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 34,
                    'name' => 'নাক দিয়ে পানি পড়া',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 35,
                    'name' => 'নাক দিয়ে শ্লেষ্মা বের হওয়া',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 36,
                    'name' => 'চোখ চুলকায়',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 37,
                    'name' => 'গলা ব্যাথা',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 38,
                    'name' => 'কর্কশতা',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 39,
                    'name' => 'নাক ডাকা',
                    'category' => 'nose_ear_throat',

                ],
                [
                    'id' => 40,
                    'name' => 'ঘা',
                    'category' => 'skin',

                ],
                [
                    'id' => 41,
                    'name' => 'ফুসকুড়ি',
                    'category' => 'skin',

                ],
                [
                    'id' => 42,
                    'name' => 'চুলকানি',
                    'category' => 'skin',

                ],
                [
                    'id' => 43,
                    'name' => 'তিলের পরিবর্তন',
                    'category' => 'skin',

                ],
                [
                    'id' => 44,
                    'name' => 'অস্বাভাবিক বৃদ্ধি',
                    'category' => 'skin',

                ],
                [
                    'id' => 45,
                    'name' => 'Erection problems',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 46,
                    'name' => 'অন্ডকোষে পিণ্ড',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 47,
                    'name' => 'লিঙ্গ থেকে স্রাব',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 48,
                    'name' => 'স্তনে পিন্ড',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 49,
                    'name' => 'স্তনবৃন্ত স্রাব',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 50,
                    'name' => 'অস্বাভাবিক স্তনবৃন্ত ময়লা',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 51,
                    'name' => 'অনিয়মিত রক্তক্ষরণ',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 52,
                    'name' => 'bad cramps',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 53,
                    'name' => 'শ্রোণী ব্যাথা',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 54,
                    'name' => 'যৌন মিলনের সময় ব্যাথা হওয়া',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 55,
                    'name' => 'প্রসাব শেষে জ্বালা পোড়া',
                    'category' => 'reproductive',

                ],
                [
                    'id' => 56,
                    'name' => 'কাশি',
                    'category' => 'breathing',

                ],
                [
                    'id' => 57,
                    'name' => 'শ্বাসকষ্ট',
                    'category' => 'breathing',

                ],
                [
                    'id' => 58,
                    'name' => 'শ্বাসনালীতে আংশিক প্রতিবন্ধকতা',
                    'category' => 'breathing',

                ],
                [
                    'id' => 59,
                    'name' => 'ব্যায়াম করার সময় শ্বাস কষ্ট',
                    'category' => 'breathing',

                ],
                [
                    'id' => 60,
                    'name' => 'শুয়ে থাকার সময় শ্বাস কষ্ট',
                    'category' => 'breathing',

                ],
                [
                    'id' => 61,
                    'name' => 'নাক ডাকা',
                    'category' => 'breathing',

                ],
                [
                    'id' => 62,
                    'name' => 'পেট ব্যাথা',
                    'category' => 'gastrontestinal',

                ],
                [
                    'id' => 63,
                    'name' => 'পেট খারাপ',
                    'category' => 'gastrontestinal',

                ],
                [
                    'id' => 64,
                    'name' => 'বমি',
                    'category' => 'gastrontestinal',



                ],
                [
                    'id' => 65,
                    'name' => 'ডায়রিয়া',
                    'category' => 'gastrontestinal',



                ],
                [
                    'id' => 66,
                    'name' => 'কোষ্ঠ কাঠিন্য',
                    'category' => 'gastrontestinal',

                ],
                [
                    'id' => 67,
                    'name' => 'বুক জ্বালা',
                    'category' => 'gastrontestinal',

                ],
                [
                    'id' => 68,
                    'name' => 'মল রক্ত',
                    'category' => 'gastrontestinal',

                ],
                [
                    'id' => 69,
                    'name' => 'নিজের বা অন্যের ক্ষতি করার চিন্তাভাবনা',
                    'category' => 'psychiatric',


                ],
                [
                    'id' => 70,
                    'name' => 'ঘুমের সমস্যা',
                    'category' => 'psychiatric',


                ],
                [
                    'id' => 81,
                    'name' => 'দুশ্চিন্তা',
                    'category' => 'psychiatric',


                ],
                [
                    'id' => 82,
                    'name' => 'বিষণ্ণতা',
                    'category' => 'psychiatric',


                ],
                [
                    'id' => 83,
                    'name' => 'ব্যাক্তিতবের পরিবর্তন',
                    'category' => 'psychiatric',

                ],
                [
                    'id' => 84,
                    'name' => 'আবেগ সম্পর্কিত সমস্যা',
                    'category' => 'psychiatric',

                ],
                [
                    'id' => 85,
                    'name' => 'সামান্য আঘাতেই রক্তপাত হয়',
                    'category' => 'blood',

                ],
                [
                    'id' => 86,
                    'name' => 'অল্পতেই ঘা হয়',
                    'category' => 'blood',

                ],
                [
                    'id' => 87,
                    'name' => 'গাড়ের দিকের গ্রন্থি গুলো ফোলা',
                    'category' => 'blood',

                ],

                [
                    'id' => 88,
                    'name' => 'গরম ঝলকানি',
                    'category' => 'endocrine',

                ],

                [
                    'id' => 89,
                    'name' => 'পেশী দূর্বলতা',
                    'category' => 'endocrine',

                ],

                [
                    'id' => 90,
                    'name' => 'স্বর পরিবর্তন',
                    'category' => 'endocrine',

                ],

                [
                    'id' => 91,
                    'name' => 'সাধারন শারীরিক পরিবর্তন',
                    'category' => 'endocrine',

                ],

                [
                    'id' => 92,
                    'name' => 'সাধারণ শারীরিক দূর্বলতা',
                    'category' => 'endocrine',

                ],

                [
                    'id' => 93,
                    'name' => 'প্রাস্রাব করার সময় ব্যাথা হয়',
                    'category' => 'genital_and_urinary',

                ],

                [
                    'id' => 94,
                    'name' => 'অস্বাভাবিক প্রস্রাব',
                    'category' => 'genital_and_urinary',

                ],

                [
                    'id' => 95,
                    'name' => 'রাতে প্রায় সময় প্রস্রাব করা হয়',
                    'category' => 'genital_and_urinary',

                ],

                [
                    'id' => 96,
                    'name' => 'তিলের পরিবর্তন',
                    'category' => 'genital_and_urinary',


                ],

                [
                    'id' => 97,
                    'name' => 'যৌনাঙ্গে ঘা',
                    'category' => 'genital_and_urinary',


                ]

            ]
        );
    }
}
