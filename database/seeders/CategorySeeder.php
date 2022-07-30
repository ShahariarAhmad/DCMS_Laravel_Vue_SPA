<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;

class CategorySeeder extends Seeder
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
        DB::table('categories')->insert(
            [
                [
                    'category' => 'ডায়েট'
                ],
                [
                    'category' => 'ডায়বেটিক'
                ],
                [
                    'category' => 'সাস্থ্য বিষয়ক টিপস'
                ],
                [
                    'category' => 'বয়ঃসন্ধি'
                ],
                [
                    'category' => 'স্থূলতা'
                ]

            ]
        );
    }
}
