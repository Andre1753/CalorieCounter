<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            Food::create([
                'id' => 1,
                'name' => 'Arroz',
                'amount' => 100,
                'unit' => 'g',
                'carbohydrate' => 28,
                'protein' => 2.7,
                'fat' => 0.3
            ]);

            Food::create([
                'id' => 2,
                'name' => 'Frango',
                'amount' => 100,
                'unit' => 'g',
                'carbohydrate' => 2,
                'protein' => 25,
                'fat' => 2
            ]);

            Food::create([
                'id' => 3,
                'name' => 'Macarrão Integral Vilma',
                'amount' => 100,
                'unit' => 'g',
                'carbohydrate' => 72.5,
                'protein' => 12.25,
                'fat' => 1.5
            ]);

            Food::create([
                'id' => 4,
                'name' => 'Mandioquinha',
                'amount' => 100,
                'unit' => 'g',
                'carbohydrate' => 25,
                'protein' => 0.9,
                'fat' => 0.2
            ]);

            Food::create([
                'id' => 5,
                'name' => 'Patinho',
                'amount' => 100,
                'unit' => 'g',
                'carbohydrate' => 1,
                'protein' => 31.9,
                'fat' => 4.6,
            ]);

            Food::create([
                'id' => 6,
                'name' => 'Pão de Queijo',
                'amount' => 100,
                'unit' => 'g',
                'carbohydrate' => 45,
                'protein' => 10,
                'fat' => 21,
            ]);
            
        } catch (\Exception $exception){}     
        
    }
}
