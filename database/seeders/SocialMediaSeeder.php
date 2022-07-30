<?php

namespace Database\Seeders;

use App\Models\Social_media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Social_media::create(
            [

                'id' => 1,
                'f_link' => 'www.fb.com',
                'y_link' => 'www.youtube.com',
                'l_link' => 'www.linkedin.com'


            ]
        );

    }
}
