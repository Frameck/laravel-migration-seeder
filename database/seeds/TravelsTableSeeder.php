<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newTravel = new Travel();
            $newTravel->valid_from = $faker->dateTime('now', null);
            $newTravel->valid_to = $faker->dateTime('now', null);
            $newTravel->title = $faker->sentence(6);
            $newTravel->location = $faker->address() . ', ' . $faker->country();
            $newTravel->description = $faker->text(50);
            $newTravel->price_per_night = $faker->numberBetween(30, 200);
            $newTravel->save();
        }
    }
}
