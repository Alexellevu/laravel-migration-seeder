<?php

use App\holiday;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i =0; $i <10; $i++){

            $holiday =new holiday();
            $holiday->city = $faker->city();
            $holiday->country = $faker->countryCode();
            $holiday->price = $faker->randomFloat(2, 400, 10000);
            $holiday->hotel = $faker->randomElements(['Exelsior','Plaza','Hotel Top','Holiday','Central'])[0];
            $holiday->image_url = $faker->imageUrl(360, 360,'place',true,null,true);
            $holiday->save();
        }

    }
}
