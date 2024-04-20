<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    /**
     * Run the database seeds.
     *
     * @return void
     */
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $name = $faker->unique()->word;
            $description = $faker->sentence;
            $price = $faker->randomFloat(2, 10, 100);
            $price2 = $faker->optional()->randomFloat(2, 10, 100);
            $price3 = $faker->optional()->randomFloat(2, 10, 100);
            $image = $faker->imageUrl();

            Product::create([
                'store_id' => 1, // Assuming store_id
                'category_id' => 1, // Assuming category_id
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'price2' => $price2,
                'price3' => $price3,
                'image' => $image,
            ]);
        }
    }

}
