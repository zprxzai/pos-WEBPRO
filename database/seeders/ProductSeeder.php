<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $categories = \App\Models\Category::all();
        foreach ($categories as $category) {
        for ($i = 0; $i < 10; $i++) {
            \App\Models\Product::create([
                'category_id' => $category->id,
                'code' => $faker->unique()->word,
                'name' => $faker->word,
                'description' => $faker->text,
                'stock' => $faker->numberBetween(1, 100),
                'price' => $faker->randomFloat(2, 1000, 10000),
            ]);
        }
    }
}
}