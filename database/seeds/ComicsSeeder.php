<?php

use App\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newComicData = [
                'title' => $faker->word,
                'author' => $faker->word,
                'year' => $faker->year,
                'review' => $faker->text,
                'vote' => $faker->numberBetween($min = 1, $max = 5),
                'path' => $faker ->imageUrl($width = 640, $height = 480)
            ];

            $comic = new Comic;
            $comic->fill($newComicData);
            $comic->save();
        }
    }
}
