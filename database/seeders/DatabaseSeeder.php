<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

use Illuminate\Container\Container;
use ZipArchive;

class DatabaseSeeder extends Seeder
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
        if (PHP_OS === 'WINNT')
        {
            exec(sprintf("rd /s /q %s", escapeshellarg(public_path('images'))));
        }
        else
        {
            exec(sprintf("rm -rf %s", escapeshellarg(public_path('images'))));
        }

            $zip = new ZipArchive;
        if ($zip->open( resource_path('seeder/images.zip')) === TRUE) {
            $zip->extractTo( public_path());
            $zip->close();
          
// Seeders 

            $this->call([

                RoleSeeder::class,
                UserSeeder::class,
                ChamberSeeder::class,
                AboutSeeder::class,
                BannerSeeder::class,
                EventSeeder::class,
                GallerySeeder::class,
                LogoSeeder::class,
                BlogSeeder::class,
                CategorySeeder::class,
                BlogCategorySeeder::class,
                ContactSeeder::class,
                TransactionSeeder::class,
                DietRequestSeeder::class,
                DietSeeder::class,
                DietRecordSeeder::class,
                EventSeeder::class,
                GallerySeeder::class,
                HandlerSeeder::class,
                AppointmentSeeder::class,
                HistorySeeder::class,
                OptionSeeder::class,
                HistoryOptionSeeder::class,
                HistoryAnswerSeeder::class,
                ServiceSectionInboxSeeder::class,
                ServiceSeeder::class,
                SickSeeder::class,
                SickUserSeeder::class,
                SocialMediaSeeder::class,
    
            ]);
        }

        
        
      
    }
}
