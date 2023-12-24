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
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                DB::table('todos')->insert([
                    'user_id' => $i,
                    'title' => $faker->catchPhrase,
                    'description' => $faker->sentence(),
                    'is_completed' => false,
                ]);
            }
        }
    }
}
