<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Productdisadvantages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductdisadvantagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // $disadvantages = [
        //     [
        //         'product_id' => 1,
        //         'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. || Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur  || adipisicing elit. Quisquam, voluptatum. lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        //     ],
        //     [
        //         'product_id' => 2,
        //         'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. || Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur || adipisicing elit. Quisquam, voluptatum. yang kedua nih',
        //     ],
        //     [
        //         'product_id' => 3,
        //         'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. yang ketiga nih',
        //     ],
        // ];

        $products = Product::all();

        if($products->isEmpty()){
            $this->command->info('No products found!');
            return;
        }

        $disadvantagesArray = [
            [
                'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur  adipisicing elit. Quisquam, voluptatum.',
            ],
            [
                'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur  adipisicing elit. Quisquam, voluptatum. yang kedua nih',
            ],
            [
                'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. yang ketiga nih',
            ],
            [
                'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. yang keempat nih',
            ]
        ];

        foreach($products as $index => $product){
            if(isset($disadvantagesArray[$index])){
                $product->disadvantages()->create([
                    'disadvantageDescription' => $disadvantagesArray[$index]['disadvantageDescription']
                ]);
            }
        }
      
    }
}
