<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 100; $i++) {
            DB::table('movie')->insert([
                'imdb' => $faker->uuid(),
                'title' => $faker->words(3, true),
                'genre' => $faker->word(),
                'year' => $faker->date('Y'),
                'description' => $faker->text(),
                'cover' => $faker->imageUrl(640, 480, 'animals'),
            ]);
        }
    }
}
