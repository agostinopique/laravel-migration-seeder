<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++){
            $new_train = new Train();
            $new_train->agency = $faker->name();
            $new_train->departure_station = 'Station' . $faker->name();
            $new_train->arrival_station = 'Station' . $faker->name();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_number = $faker->numberBetween(0, 10000);
            $new_train->carriage_number = $faker->randomDigitNotNull();
            $new_train->is_onTime = $faker->boolean();
            $new_train->save();
        }

    }
}
