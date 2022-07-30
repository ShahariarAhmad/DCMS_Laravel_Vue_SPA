<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;

class AboutSeeder extends Seeder
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
        $img = array_diff(scandir(public_path('/images/about/')), array('....','...','..', '.') );
        $ser = array_diff(scandir(public_path('/images/service/')), array('....','...','..', '.') );

        About::create(
            [
                'id' => 1,
                'profile_img' => $img[2],
                'name' => 'Nujhat Ahmad',
                'degree' => 'Nutritionist',

                'brife_description' => $this->faker->text($maxNbChars = 200),

                'service_img' => $ser[2],
                'service_title' => 'Where I give my services',

                'service_description' => $this->faker->text($maxNbChars = 400)

            ]
        );

    }
}
