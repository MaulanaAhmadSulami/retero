<?php

namespace Database\Seeders;

use App\Models\ProductAdvantages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductAdvantagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        $products = Product::all();

        if($products->isEmpty()){
            $this->command->info('No products found!');
            return;
        }

        $advantagesArray = [
            [
                'advantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur  adipisicing elit. Quisquam, voluptatum.',
            ],

            [
                'advantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur  adipisicing elit. Quisquam, voluptatum. yang kedua nih',
            ],

            [
                'advantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. yang ketiga nih',
            ],
            
            [
                'advantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. yang keempat nih',
            ]
        ];

        foreach($products as $index => $product){
            if(isset($advantagesArray[$index])){
                $product->advantages()->create([
                    'advantageDescription' => $advantagesArray[$index]['advantageDescription']
                ]);
            }
        }
    }
}
