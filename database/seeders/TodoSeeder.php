<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 4; $i++) {
            $categoryId = DB::table('categories')->where('category_name', "Category $i")->value('id');

            for ($j = 1; $j <= 3; $j++) {
                DB::table('todos')->insert([
                    'category_id' => $categoryId,
                    'name' => $faker->catchPhrase,
                    'priority' => "medium",
                ]);
            }
        }
    }
}
