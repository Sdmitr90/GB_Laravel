<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(){
        $data = [];
        for($i = 0; $i < 10; $i++) {
            $faker = Faker::create('ru_RU');
            $data[] = [
                'categories_id' => $faker->numberBetween($min = 1, $max = 2),
                'news_name' => $faker->sentence(rand(1, 10)),
                'news_description' => $faker->sentence(rand(33, 10)),
            ];
        }
    return $data;
    }
}
