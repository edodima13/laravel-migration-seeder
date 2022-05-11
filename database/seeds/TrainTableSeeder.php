<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $train = new Train();

            $train-> company = $faker->company();
            $train-> arrival_station = $faker->city();
            $train-> departure_station = $faker->city();
            $train-> departure = $faker->dateTimeBetween('-1 week','+1 week');
            $train-> arrival = $faker->dateTimeBetween('-1 week','+1 week');
            $train-> code = $faker->bothify('??-######');
            $train-> carriages_number = $faker->numberBetween(3,20);
            $train-> in_time = $faker->boolean();
            $train-> deleted = $faker->numberBetween(1,0);

            $train->save();
        }
    }
}
