<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Trenitalia']);
            $train->start_station = $faker->city();
            $train->destination_station = $faker->city();
            $train->time_start = $faker->time('H:i');
            $train->time_arrive = $faker->time('H:i', 'now');
            $train->code_train = $faker->bothify('?###??');
            $train->n_carrozze = $faker->randomDigitNotNull();
            $train->in_time = $faker->randomElements([false, true]);
            $train->_deleted = $faker->randomElements([false, true]);
            $train->save();
        }
    }
}
