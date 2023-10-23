<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retero Homepage</title>
    <link rel="icon" type="image/svg+xml" href="image/retero.png" />
    @vite('resources/css/app.css')

    <style>
        #stroke {
            text-shadow:
                -2px -2px 0 #ffffff,
                2px -2px 0 #ffffff,
                -2px 2px 0 #ffffff,
                2px 2px 0 #ffffff;

                /* color:rgb(0, 0, 0); */

            /* -webkit-text-stroke-width: 3px; */

        }

        #shadow {
            box-shadow: 1rem 1rem 0;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        #shadow:hover {
            transform: translate3d(0.25rem, 0.25rem, -0.25rem);
            box-shadow: none;
        }
        #shadow-btn {
            box-shadow: 0.5rem 0.5rem 0;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        #shadow-btn:hover {
            transform: translate3d(0.25rem, 0.25rem, -0.25rem);
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        @include('navbar')
    </div>

    <div>

        <div id="stroke" class="relative">

            <div
                class="p-4 border-4 border-button bg-button flex justify-center items-center font-bold font-publicPixel">
                <h2 class="text-[39.06px]">
                    Ulasan Terbaru
                </h2>
            </div>
        </div>

        <div class="p-10">
            <div class="p-10">
                <div class="p-10 flex justify-center">
                    <div class="flex">
                        <div class="max-w-[750px] mr-20">
                            <h1 class="font-publicPixel text-[30px] text-left py-4">Hisensa A6G</h1>
                            <p class="font-ubuntuMonoRegular text-[25px]">
                                The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra
                                HD TV
                                promises to give you four times the resolution of a regular <span class="font-bold">1080
                                    P
                                    HD screen, Dolby Vision HDR plus, HDR 10 sound</span>, as well as <span
                                    class="font-bold">voice-activated commands.</span> The TV is perfect for those
                                looking
                                for an extra device to a second room or a first-time smart TV. This Hisense A6G
                                offers <span class="font-bold"> 8.3 million pixels,</span> and a <span
                                    class="font-bold">full array
                                    LED backlight</span> creating a sharper, brighter, more colorful picture. Read
                                to the
                                end of this Hisense A6G review to learn what experts are saying. 
                            </p>
                        </div>
                        <div class="w-full">
                            <a href="{{ 'productDetail' }}"> <img id="shadow" src="images/dummyStock.png" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="p-10">
            <div class="p-10">
                <div class="flex justify-center">
                    <div class="flex">
                        <div class="w-full">
                            <a href="{{ 'productDetail' }}"> <img id="shadow" src="images/dummyStock.png" alt=""></a>
                        </div>
                        <div class="max-w-[750px] mx-20">
                            <h1 class="font-publicPixel text-[30px] py-4">Hisensa A6G</h1>
                            <p class="font-ubuntuMonoRegular text-[25px]">
                                The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra
                                HD TV
                                promises to give you four times the resolution of a regular <span class="font-bold">1080
                                    P
                                    HD screen, Dolby Vision HDR plus, HDR 10 sound</span>, as well as <span
                                    class="font-bold">voice-activated commands.</span> The TV is perfect for those
                                looking
                                for an extra device to a second room or a first-time smart TV. This Hisense A6G
                                offers <span class="font-bold"> 8.3 million pixels,</span> and a <span
                                    class="font-bold">full array
                                    LED backlight</span> creating a sharper, brighter, more colorful picture. Read
                                to the
                                end of this Hisense A6G review to learn what experts are saying.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="p-10">
            <div class="p-10">
                <div class="flex justify-center">
                    <div class="flex">
                        <div class="max-w-[750px] mr-20">
                            <h1 class="font-publicPixel text-[30px] text-left py-4">Hisensa A6G</h1>
                            <p class="font-ubuntuMonoRegular text-[25px]">
                                The Hisense A6G is the brand’s budget tier Smart TV released in 2021. This 4K ultra
                                HD TV
                                promises to give you four times the resolution of a regular <span class="font-bold">1080
                                    P
                                    HD screen, Dolby Vision HDR plus, HDR 10 sound</span>, as well as <span
                                    class="font-bold">voice-activated commands.</span> The TV is perfect for those
                                looking
                                for an extra device to a second room or a first-time smart TV. This Hisense A6G
                                offers <span class="font-bold"> 8.3 million pixels,</span> and a <span
                                class="font-bold">full array
                                LED backlight</span> creating a sharper, brighter, more colorful picture. Read
                                to the
                                end of this Hisense A6G review to learn what experts are saying.
                            </p>
                        </div>
                        <div class="w-full">
                            <a href="{{ 'productDetail' }}"> <img id="shadow" src="images/dummyStock.png" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>

            
        </div>


        <div class="py-8 flex justify-center">
            <button id="shadow-btn" type="submit" class="bg-button 1px py-2 px-4">
                <a id="stroke" class="font-publicPixel text-[20px]" href="{{ '/' }}">Lihat Ulasan Lainnya</a>
            </button>
        </div>
        
        <footer>

            @include('footer')
        </footer>
    </div>
</body>


{{-- @if($reviews->isEmpty())
<p>No Reviews available as of now.</p>
@else

@foreach($reviews as $review)
<div class="flex mb-10">
    <div class="w-1/3">
        {{-- ini ntar dibedain directory buat ambil images --}}
        {{-- <img src="{{ asset('assetImages/' . $review->image) }}" alt="Review Image" class="rounded-md">
    </div>

    <div class="w-2/3 pl-5">
        <h2 class="font-bold text-xl mb-2">{{ $review->productTitle }}</h2>
        <p>{{ $review->productDescription }}</p>
        <div class="mt-4">
            <span class="text-yellow-500 font-bold text-3xl">{{ $review->rating }}</span>
            <a href="{{ route('review.show', $review->id) }}" class="text-blue-500">Read
                more</a>
        </div>
    </div>
</div> --}}
{{-- @endforeach --}}
{{-- @endif --}}

</html>