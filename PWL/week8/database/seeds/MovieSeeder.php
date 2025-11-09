<?php

namespace Database\Seeds;

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
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {
            DB::table('movie')->insert([
                'imdb' => $faker->randomNumber(5, true),
                'title' => substr($faker->words(3, true), 0, 50),
                'genre' => $faker->word(),
                'year' => $faker->date(),
                'description' => $faker->text(),
                'cover' => $faker->image(null,640, 480),
            ]);
        }
    }
}
