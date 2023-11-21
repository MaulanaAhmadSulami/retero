<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [

            [

                'productTitle' => 'Hisensa A6G',
                'image' => 'hisensa.png',
                'productType' => 'TV',
                'productDescription' => 'Ini TV, The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra HD TV promises to give you four times the resolution of a regular 1080 P HD screen, Dolby Vision HDR plus, HDR 10 sound, as well as voice-activated commands. The TV is perfect for those looking for an extra device to a second room or a first-time smart TV. This Hisense A6G offers 8.3 million pixels, and a full array LED backlight creating a sharper, brighter, more colorful picture. Read to the end of this Hisense A6G review to learn what experts are saying.',
                'productRating' => 7.5,
            ],

            [

                'productTitle' => 'Bluetooth anjayyy',
                'image' => 'dummyStock.png',
                'productType' => 'Bluetooth',
                'productDescription' => 'Ini Bluetooth, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
                'productRating' => 8.2,
            ],
            [
                'productTitle' => 'Keyboard Sades Kunai',
                'image' => 'KUNAI.png',
                'productType' => 'Keyboard',
                'productDescription' => 'Ini keyboard, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
                'productRating' => 8.0,
            ]
        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
