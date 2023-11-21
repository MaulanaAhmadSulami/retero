<?php

namespace Database\Seeders;

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

        $disadvantages = [
            [
                'product_id' => 1,
                'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. || Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur  || adipisicing elit. Quisquam, voluptatum. lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            ],
            [
                'product_id' => 2,
                'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. || Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur || adipisicing elit. Quisquam, voluptatum. yang kedua nih',
            ],
            [
                'product_id' => 3,
                'disadvantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. yang ketiga nih',
            ],
        ];
        
        foreach($disadvantages as $disadvantage){
            Productdisadvantages::create($disadvantage);
        }
    }
}
