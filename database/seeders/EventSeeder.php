<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Container\Container;
use Faker\Generator;


class EventSeeder extends Seeder
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
        $img = array_diff(scandir(public_path('/images/events/')), array('....','...','..', '.') );

        for ($i=0; $i < 4; $i++) { 
            Event::create(
                    
                [
        
                    'name' => $this->faker->catchPhrase ,
                    'house_no' => $this->faker->secondaryAddress,
                    'road_number' => $this->faker->buildingNumber ,
                    'area' => $this->faker->streetName ,
                    'district' => $this->faker->city ,
                    'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                    'time' => $this->faker->time($format = 'H:i', $max = 'now') ,
                    
                    'description' => $this->faker->text($maxNbChars = 200)  ,
                    'img_url' => $img[$i+2]
                ]
        );
        }
    }
}
