<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'position' => 'Frontend Web Developer'
        ]);
        Category::create([
            'position' => 'Backend Web Developer'
        ]);
        Category::create([
            'position' => 'Fullstack Web Developer'
        ]);
        Category::create([
            'position' => 'Android Developer'
        ]);
        Category::create([
            'position' => 'Digital Marketing'
        ]);
        Category::create([
            'position' => 'Data Siences'
        ]);

        $faker = Faker::create('id_ID');
        $faker->seed(999);
        for ($i=1; $i<=100; $i++) {
            $width = 100;
            $height = 100;
            Product::create ([
                'code' => $faker->unique()->numerify('10######'),
                'name' => $faker->firstName()." ".$faker->lastName(),
                'categories_id' => $faker->numberBetween(1,6),
                'stock' => $faker->randomDigit,
                'varian' => $faker->text,
                'description' => $faker->text,
                'image' => $faker->imageUrl($width, $height, 'cats')
            ]);
        }

    }

}
