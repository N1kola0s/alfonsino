<?php

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                'name' => 'Elementi',
                'p_iva' => '23433389777',
                'visibility' => true,
            ],
            [
                'name' => 'Masanielli',
                'p_iva' => '33333389888',
                'visibility' => false,
            ],
            [
                'name' => 'Spelunca',
                'p_iva' => '33333389888',
                'visibility' => false,
            ],
            [
                'name' => 'Pepe',
                'p_iva' => '22233389555',
                'visibility' => true
            ]

        ];

        foreach ($restaurants as $restaurant) {

            $new_restaurant = new Restaurant();
            $new_restaurant->name = $restaurant['name'];
            $new_restaurant->p_iva = $restaurant['p_iva'];
            $new_restaurant->visibility = $restaurant['visibility'];
            $new_restaurant->save();
        }
    }
}
