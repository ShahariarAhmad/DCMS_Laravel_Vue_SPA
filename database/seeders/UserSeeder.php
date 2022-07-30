<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Container\Container;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Generator;

class UserSeeder extends Seeder
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

        User::create(
            [
                
                'f_name' => 'Super',
                'l_name' => 'Admin',
                'age' =>25,
                'height' => '5"8\'',

                'email' => 'admin@nomail.com',
                'password' => Hash::make(12341234),
                'cell_number' => $this->faker->unique()->e164PhoneNumber(),
                'sex' => 1,
                'role_id' => 1,
                'avatar' => $this->faker->imageUrl(600, 600),
                    
            ]
        
        );


        for ($i=0; $i < 16; $i++) { 
            if ($i == 1) {
                User::create(
                    [
                        
                        'f_name' => $this->faker->unique()->firstNameMale(),
                        'l_name' => $this->faker->unique()->lastName(),
                        'age' => 45,
                        'height' => '5"8\'',

                        'email' => $this->faker->unique()->safeEmail(),
                        'password' => Hash::make(12341234),
                        'cell_number' => $this->faker->unique()->e164PhoneNumber(),
                        'sex' => 1,
                        'role_id' => 1,
                        'avatar' => $this->faker->imageUrl(600, 600),
                            
                    ]
                
                );
            }



            if ($i == 2 || $i == 3) {
                User::create(
                    [
                        
                        'f_name' => $this->faker->unique()->firstNameMale(),
                        'l_name' => $this->faker->unique()->lastName(),
                        'age' => 45,
                        'height' => '5"8\'',
                        'email' => $this->faker->unique()->safeEmail(),
                        'password' => Hash::make(12341234),
                        'cell_number' => $this->faker->unique()->e164PhoneNumber(),
                        'sex' => 1,
                        'role_id' => 2,
                        'avatar' => $this->faker->imageUrl(600, 600),
                            
                    ]
                
                );
            }


            if ($i == 4 || $i == 5) {
                User::create(
                    [
                        
                        'f_name' => $this->faker->unique()->firstNameMale(),
                        'l_name' => $this->faker->unique()->lastName(),
                        'age' => 45,
                        'height' => '5"8\'',
                        'email' => $this->faker->unique()->safeEmail(),
                        'password' => Hash::make(12341234),
                        'cell_number' => $this->faker->unique()->e164PhoneNumber(),
                        'sex' => 1,
                        'role_id' => 4,
                        'avatar' => $this->faker->imageUrl(600, 600),
                            
                    ]
                
                );
            }
      

            
            if ( $i > 5) {
                User::create(
                    [
                        
                        'f_name' => $this->faker->unique()->firstNameMale(),
                        'l_name' => $this->faker->unique()->lastName(),
                        'age' => 45,
                        'height' => '5"8\'',
                        'email' => $this->faker->unique()->safeEmail(),
                        'password' => Hash::make(12341234),
                        'cell_number' => $this->faker->unique()->e164PhoneNumber(),
                        'sex' => 1,
                        'role_id' => 3,
                        'avatar' => $this->faker->imageUrl(600, 600),
                            
                    ]
                
                );
            }
      
        
        }
        
    }
}
