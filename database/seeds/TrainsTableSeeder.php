<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i ++){
            $train = new Train();  
            $train->company = $faker->word(1, true);
             $train->departure_date =$faker->dateTimeBetween('now', '+1 days'); ;
             $train->departure_station = $faker-> city();
             $train->arrival_station =  $faker-> city();
             $train->departure_time = $faker-> time();
             $train->arrival_time = $faker-> time(); 
             $train->train_code = $faker-> regexify('[A-Z]{5}'); 
             $train->carriages = $faker->randomNumber(2, true);
             $train->is_onTime = $faker-> boolean(); ; 
             $train->is_deleted = $faker->boolean();
             $train->save();
        }
    }
}