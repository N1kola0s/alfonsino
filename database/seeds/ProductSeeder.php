<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $new_product = new Product();
            $new_product->name = $faker->word(7);
            $new_product->restaurant_id = $faker->numberBetween(1, 4);
            $new_product->price = $faker->randomFloat(2, 10, 20);
            $new_product->visibility = $faker->boolean();
            $new_product->save();
        }
        

    }
}
