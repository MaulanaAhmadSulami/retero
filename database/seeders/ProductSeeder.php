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

                'productTitle' => 'Monitor sakura',
                'image' => 'monitor_sakura.jpg',
                'category_id' => 1,
                'productType' => 'Monitor',
                'productDescription' => 'Ini monitor Sakura, The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra HD TV promises to give you four times the resolution of a regular 1080 P HD screen, Dolby Vision HDR plus, HDR 10 sound, as well as voice-activated commands. The TV is perfect for those looking for an extra device to a second room or a first-time smart TV. This Hisense A6G offers 8.3 million pixels, and a full array LED backlight creating a sharper, brighter, more colorful picture. Read to the end of this Hisense A6G review to learn what experts are saying.',
            ],

            [

                'productTitle' => 'Monitor Anses',
                'image' => 'hisensa.png',
                'category_id' => 1,
                'productType' => 'Monitor',
                'productDescription' => 'Ini monitor Anses, The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra HD TV promises to give you four times the resolution of a regular 1080 P HD screen, Dolby Vision HDR plus, HDR 10 sound, as well as voice-activated commands. The TV is perfect for those looking for an extra device to a second room or a first-time smart TV. This Hisense A6G offers 8.3 million pixels, and a full array LED backlight creating a sharper, brighter, more colorful picture. Read to the end of this Hisense A6G review to learn what experts are saying.',
            ],

            [

                'productTitle' => 'Monitor mase',
                'image' => 'monitor_mase.jpg',
                'category_id' => 1,
                'productType' => 'Monitor',
                'productDescription' => 'Ini monitor Mase, The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra HD TV promises to give you four times the resolution of a regular 1080 P HD screen, Dolby Vision HDR plus, HDR 10 sound, as well as voice-activated commands. The TV is perfect for those looking for an extra device to a second room or a first-time smart TV. This Hisense A6G offers 8.3 million pixels, and a full array LED backlight creating a sharper, brighter, more colorful picture. Read to the end of this Hisense A6G review to learn what experts are saying.',
            ],
            [

                'productTitle' => 'Monitor Samsul',
                'image' => 'monitor_samsul.jpg',
                'category_id' => 1,
                'productType' => 'Monitor',
                'productDescription' => 'Ini monitor Samsul, The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra HD TV promises to give you four times the resolution of a regular 1080 P HD screen, Dolby Vision HDR plus, HDR 10 sound, as well as voice-activated commands. The TV is perfect for those looking for an extra device to a second room or a first-time smart TV. This Hisense A6G offers 8.3 million pixels, and a full array LED backlight creating a sharper, brighter, more colorful picture. Read to the end of this Hisense A6G review to learn what experts are saying.',
            ],

            [
                'productTitle' => 'Laptop pu',
                'image' => 'dummyStock.png',
                'category_id' => 1,
                'productType' => 'Laptop',
                'productDescription' => 'Ini Laptop Pu, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Laptop ROG',
                'image' => 'laptop_rog.jpg',
                'category_id' => 1,
                'productType' => 'Laptop',
                'productDescription' => 'Ini Laptop ROG, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Laptop Acer',
                'image' => 'laptop_acer.jpg',
                'category_id' => 1,
                'productType' => 'Laptop',
                'productDescription' => 'Ini Laptop Asus, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Laptop MSI',
                'image' => 'laptop_msi.jpg',
                'category_id' => 1,
                'productType' => 'Laptop',
                'productDescription' => 'Ini Laptop MSI, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'GeForce RTX 3090',
                'image' => 'rtx_3090.jpg',
                'category_id' => 1,
                'productType' => 'VGA',
                'productDescription' => 'Ini VGA RTX 3090, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'GeForce RTX 3080',
                'image' => 'rtx_3080.jpg',
                'category_id' => 1,
                'productType' => 'VGA',
                'productDescription' => 'Ini VGA RTX 3080, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'AMD Radeon RX 6900 XT',
                'image' => 'radeon_rx6900.jpg',
                'category_id' => 1,
                'productType' => 'VGA',
                'productDescription' => 'Ini AMD Radeon RX 6900 XT, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'GeForce GTX 1660',
                'image' => 'gtx_1660.jpg',
                'category_id' => 1,
                'productType' => 'VGA',
                'productDescription' => 'Ini AMD Radeon 6900 XT, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Keyboard Sades Kunai',
                'image' => 'KUNAI.png',
                'category_id' => 2,
                'productType' => 'Keyboard',
                'productDescription' => 'Ini keyboard Sades Kunai, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Keyboard Astro Boy',
                'image' => 'kb_astroboy.jpg',
                'category_id' => 2,
                'productType' => 'Keyboard',
                'productDescription' => 'Ini keyboard Astro Boy, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Keyboard Hu Tao',
                'image' => 'kb_hutao.jpg',
                'category_id' => 2,
                'productType' => 'Keyboard',
                'productDescription' => 'Ini keyboard Hu Tao, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Keyboard Kazuha',
                'image' => 'kb_kazuha.jpg',
                'category_id' => 2,
                'productType' => 'Keyboard',
                'productDescription' => 'Ini keyboard Kazuha, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Headset HyperX Cloud Stinger',
                'image' => 'hyperXheadset.png',
                'category_id' => 2,
                'productType' => 'Headset',
                'productDescription' => 'Ini Headset HyperX Cloud Stinger, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Headset HyperX 10',
                'image' => 'hyperx_10.jpg',
                'category_id' => 2,
                'productType' => 'Headset',
                'productDescription' => 'Ini headset HyperX 10, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Headset Razer Kraken',
                'image' => 'headset_kraken.jpg',
                'category_id' => 2,
                'productType' => 'Headset',
                'productDescription' => 'Ini headset Razer Kraken, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Headset Razer Kraken 2',
                'image' => 'headset_kraken2.jpg',
                'category_id' => 2,
                'productType' => 'Headset',
                'productDescription' => 'Ini headset Razer Kraken 2, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],

            [
                'productTitle' => 'Mouse Logitech G102',
                'image' => 'logitech_g102.jpg',
                'category_id' => 2,
                'productType' => 'Mouse',
                'productDescription' => 'Ini Mouse Logitech G102, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],  

            [
                'productTitle' => 'Mouse Logitech G502X',
                'image' => 'logitech_g502x.jpg',
                'category_id' => 2,
                'productType' => 'Mouse',
                'productDescription' => 'Ini Mouse Logicteh G103, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],  

            [
                'productTitle' => 'Mouse Razer Deathadder',
                'image' => 'mouse_deathadder.jpg',
                'category_id' => 2,
                'productType' => 'Mouse',
                'productDescription' => 'Ini Mouse Razer Deathadder, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],  

            [
                'productTitle' => 'Mouse Genshin Impact Paimon',
                'image' => 'mouse_paimon.jpg',
                'category_id' => 2,
                'productType' => 'Mouse',
                'productDescription' => 'Ini Mouse Genshin Impact Paimon, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus necessitatibus eos ipsum provident molestiae possimus ea. Eaque dignissimos vitae, eius autem ducimus perspiciatis id, excepturi nisi totam in praesentium odio.',
            ],  

        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}
