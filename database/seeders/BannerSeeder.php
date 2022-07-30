<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;

class BannerSeeder extends Seeder
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
        $img = array_diff(scandir(public_path('/images/banner/home/')), array('....','...','..', '.') );

        DB::table('banners')->insert(
            [
                [
                    'id' => 1,
                    'title' => 'Hi, I am Nujhat Ahmad.',
                    'subtitle' => 'It is a long estasdblished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.',
                    'button_text' => 'na',
                    'placement' => 'home',
                    'link' => 'www/links/',
                    'bg_image' => $img[2]
                ],
                // [
                //     'id' => 2,
                //     'title' => 'Hi, I am Nujhat Ahmad.',
                //     'subtitle' => 'It is a long established factgd that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.',
                //     'button_text' => 'Appointment',
                //     'placement' => 'about_o',
                //     'link' => 'www/links/',
                //     'bg_image' => $this->faker->imageUrl($width = 1920, $height = 1080)
                // ],
                // [
                //     'id' => 3,
                //     'title' => 'Hi, I am Nujhat Ahmad.',
                //     'subtitle' => 'It is a long established fasact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.',
                //     'button_text' => 'diet',
                //     'placement' => 'about_t',
                //     'link' => 'www/links/',
                //     'bg_image' => $this->faker->imageUrl($width = 1920, $height = 1080)
                // ]
            ]
        );
    }
}
