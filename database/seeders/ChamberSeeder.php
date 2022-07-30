<?php

namespace Database\Seeders;

use App\Models\Chamber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;

class ChamberSeeder extends Seeder
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
        $img = array_diff(scandir(public_path('/images/chambers/')), array('....','...','..', '.') );

        for ($i=0; $i < 5; $i++) { 
            Chamber::create(
                    
                [
        
                    'name' => $this->faker->catchPhrase ,
                    'house_no' => $this->faker->secondaryAddress,
                    'road_number' => $this->faker->buildingNumber ,
                    'area' => $this->faker->streetName ,
                    'district' => $this->faker->city ,
                    'day' => 'Sat - Mon' ,

                    'time' => $this->faker->time($format = 'H:i', $max = 'now') ,
                    // 'c_m_position' => $i,
                    'img_url' => $img[$i+2]
                ]
        );
        }
    }
}
