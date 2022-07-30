<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;

class BlogCategorySeeder extends Seeder
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
           DB::table('blog_categories')->insert(
            [
                [
                    'id' => 1,
                    'blog_id' => 1,
                    'category_id' => 1
                ],
                [
                    'id' => 2,
                    'blog_id' => 2,
                    'category_id' => 2
                ],
                [
                    'id' => 3,
                    'blog_id' => 3,
                    'category_id' => 3
                ],
                [
                    'id' => 4,
                    'blog_id' => 4,
                    'category_id' => 4
                ],
                [
                    'id' => 5,
                    'blog_id' => 5,
                    'category_id' => 5
                ],
                [
                    'id' => 6,
                    'blog_id' => 6,
                    'category_id' => 5
                ],
                [
                    'id' => 7,
                    'blog_id' => 7,
                    'category_id' => 4
                ],
                [
                    'id' => 8,
                    'blog_id' => 8,
                    'category_id' => 3
                ],
                [
                    'id' => 9,
                    'blog_id' => 9,
                    'category_id' => 2
                ],
                [
                    'id' => 10,
                    'blog_id' => 10,
                    'category_id' => 1
                ],
                [
                    'id' => 11,
                    'blog_id' => 10,
                    'category_id' => 4
                ],
                [
                    'id' => 12,
                    'blog_id' => 6,
                    'category_id' => 2
                ]
            ]
        );
    }
}
