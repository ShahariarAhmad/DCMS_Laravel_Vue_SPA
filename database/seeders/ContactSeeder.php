<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;

class ContactSeeder extends Seeder
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
        Contact::create(
            [

                'height' => '700',
                'width' => '100%', // delete column
                'api_key' => 'http://dcms.test/phpmyadmin/',
                'title' => 'Where I give my services',
                'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem beatae vitae nemo animi veniam eaque aliquid. Fuga omnis hic dolorum aliquam reiciendis! Ipsam delectus facilis iusto mollitia deleniti ut corporis!',
                'image' => $this->faker->imageUrl(1920, 1080)
            ]
        );
    }
}
