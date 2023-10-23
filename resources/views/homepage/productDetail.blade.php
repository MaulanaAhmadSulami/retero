<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <style>
        #shadow {
            box-shadow: 0.7rem 0.7rem 0;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        #shadow:hover {
            transform: translate3d(0.25rem, 0.25rem, -0.25rem);
            box-shadow: none;
        }

        #stroke {
            text-shadow:
                2px -2px 0 #000000,
                2px -2px 0 #000000,
                -2px 2px 0 #000000,
                2px 2px 0 #000000;
        }

        #listProduct{
            list-style-type: circle;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        @include('navbar')
    </div>
    <div>
        <div class="grid place-items-center py-8">
            <div class="grid grid-cols-2 items-center text-center">
                <img id="shadow" src="images/dummyStock.png" class="h-[400px]" alt="">
                <div class="text-left mr-[120px]">
                    <h1 class="font-publicPixel text-[31.25px]">Hisensa A6G</h1>
                    <span class="font-ubuntuMonoRegular">
                        <iconify-icon icon="subway:refresh-time" class="text-xs"></iconify-icon> 22 Oktober 2023
                    </span>
                </div>
                <div class="max-w-[750px] mt-20 text-left">
                    <h1 id="stroke" class="text-[40px] font-publicPixel text-button">Ringkasan</h1>
                    <p class="font-ubuntuMonoRegular text-[20px] mt-5">
                        The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra
                        HD TV
                        promises to give you four times the resolution of a regular <span class="font-bold">1080
                            P
                            HD screen, Dolby Vision HDR plus, HDR 10 sound</span>, as well as <span
                            class="font-bold">voice-activated commands.</span> The TV is perfect for those
                        looking
                        for an extra device to a second room or a first-time smart TV. This Hisense A6G
                        offers <span class="font-bold"> 8.3 million pixels,</span> and a <span class="font-bold">full
                            array
                            LED backlight</span> creating a sharper, brighter, more colorful picture. Read
                        to the
                        end of this Hisense A6G review to learn what experts are saying.
                    </p>

                    <h1 id="stroke" class="text-[40px] font-publicPixel text-button py-10">Kelebihan</h1>
                    
                    <ul id="listProduct" class="list-inside text-[20px] mt-5">
                        <li>Minima unde sit aliquid aut omnis nobis. </li>
                        <li>Minima unde sit aliquid aut omnis nobis. </li>
                        <li>Minima unde sit aliquid aut omnis nobis. </li>
                        <li>Minima unde sit aliquid aut omnis nobis. </li>
                    </ul>
                    
                    <h1 id="stroke" class="text-[40px] font-publicPixel text-button py-10">Kekurangan</h1>
                    <ul id="listProduct" class="list-inside text-[20px] mt-5">
                        <li>Minima unde sit aliquid aut omnis nobis. </li>
                        <li>Minima unde sit aliquid aut omnis nobis. </li>
                        <li>Minima unde sit aliquid aut omnis nobis. </li>
                        <li>Minima unde sit aliquid aut omnis nobis. </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <hr class="py-8" />
        <div class="border rounded-2xl inline-block p-2">
            <p class="">
                <iconify-icon icon="basil:plus-solid" class="text-xl transfrom bot-1/2"></iconify-icon> Tambah Komentar
            </p>
        </div> --}}

    </div>
    <footer class="">
        @include('footer')
    </footer>

</body>

</html>