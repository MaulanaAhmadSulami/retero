<?php

namespace Database\Seeders;

use App\Models\ProductAdvantages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $advantages = [
            [
                'product_id' => 1,
                'advantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur  adipisicing elit. Quisquam, voluptatum.',
            ],
            [
                'product_id' => 2,
                'advantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur  adipisicing elit. Quisquam, voluptatum. yang kedua nih',
            ],
            [
                'product_id' => 3,
                'advantageDescription' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam, voluptatum., lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. yang ketiga nih',
            ]

        ];

        foreach($advantages as $advantage){
            ProductAdvantages::create($advantage);
        }
    }
}
