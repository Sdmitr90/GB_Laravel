<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        for ($i = 0; $i < 2; $i++) {
            $faker = Faker::create('ru_RU');
            $data[] = [
                'category_name' => $faker->country,
                'category_description' => $faker->sentence(rand(4, 10)),
            ];
        }
        return $data;
    }
}
