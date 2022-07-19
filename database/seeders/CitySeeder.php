<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->city = 'Nasr City';
        $city->create_user_id = 1;
        $city->save();

        $city = new City();
        $city->city = '5th Settlement';
        $city->create_user_id = 1;
        $city->save();

        $city = new City();
        $city->city = 'Sheikh Zayed';
        $city->create_user_id = 1;
        $city->save();

        $city = new City();
        $city->city = '6th of October';
        $city->create_user_id = 1;
        $city->save();

        $city = new City();
        $city->city = 'Heliopolis';
        $city->create_user_id = 1;
        $city->save();

         $city = new City();
         $city->city = 'Kasbah alawdia';
         $city->create_user_id = 1;
         $city->save();

         $city = new City();
         $city->city = 'El Battan';
         $city->create_user_id = 1;
         $city->save();

         $city = new City();
         $city->city = 'Badaro';
         $city->create_user_id = 1;
         $city->save();

         $city = new City();
         $city->city = 'Sinaiyah Qadeem';
         $city->create_user_id = 1;
         $city->save();
    }
}
