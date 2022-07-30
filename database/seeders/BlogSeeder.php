<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;

class BlogSeeder extends Seeder
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
        $status = [0,1];
        $img = array_diff(scandir(public_path('/images/articles/')), array('....','...','..', '.') );
        for ($i = 2; $i < 19; $i++) {
            Blog::create(

                [
                    'title' => $this->faker->title,
                    'article' =>  $this->faker->text,
                    'img_url' =>  $img[$i],

                    // 'feautured' => $status[array_rand($status)],
                    'status' =>  $status[array_rand($status)],
                    'user_id' => 1,
                   

                ]

            );
        }

    }
}
