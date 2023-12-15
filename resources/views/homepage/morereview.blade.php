@extends('layouts.app')
@section('title', 'Reviews - Retero')
@push('styles')
<style>
    #stroke {
        text-shadow:
            -3px -3px 0 #fff,
            3px -3px 0 #fff,
            -3px 3px 0 #fff,
            3px 3px 0 #fff;

        /* color:rgb(0, 0, 0); */

        /* -webkit-text-stroke-width: 3px; */

    }

    #shadow-btn {
        box-shadow: 0.2rem 0.3rem 0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    #shadow-btn:hover {
        transform: translate3d(0.25rem, 0.25rem, -0.25rem);
        box-shadow: none;
    }

    #card-effect {
        text-shadow:
            -1px -1px 0 #fff,
            1px -1px 0 #fff,
            -1px 1px 0 #fff,
            1px 1px 0 #fff;
    }

    #card-shadow {
        box-shadow: 0.2rem 0.3rem 0;
    }

    .max-w-max {
        max-width: 50%;
    }

    .swiper-slide {
        width: 500px;
    }

    .mySwiper {
        display: flex;
        justify-content: center;
    }

    
    
</style>
@endpush

@section('content')
<div>
    <div id="stroke" class="relative">

        <div class="p-4 bg-button flex justify-center items-center h-32 font-bold font-publicPixel">
            <h2 class="text-[35px]">
                Ulasan Lainnya
            </h2>
        </div>
    </div>
</div>

<div class="p-10">
    <div class="flex flex-col items-center">
        <div class="w-full max-w-max">
            @foreach($productsByType as $productType => $products)
                <h2 class="mb-8 mt-20 flex text-left font-ubuntuMonoBold text-[25px]">{{ $productType }}</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper borer">
                        @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div id=card-shadow class="border  shadow-md 2 p-4 w-[250px] flex flex-col justify-between  ">
                                    <img src="{{ Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('images/' . $product->image) }}"
                                        alt="Image Unavailable" class="w-full h-32 object-cover">
                                    <div class="mt-2 font-ubuntuMonoBold text-center border-b py-2 mb-4">{{
                                        $product->productTitle }}</div>
                                    <button id="shadow-btn" type="button" class="bg-button flex self-end">
                                        <a href="{{ route('homepage.productDetail', ['id' => $product->id]) }}" id="card-effect"
                                            class="font-ubuntuMonoBold px-1">Baca
                                            Ulasan</a>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-10">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swipers = document.querySelectorAll('.mySwiper');
        swipers.forEach(function(swiper) {
            new Swiper(swiper, {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: swiper.querySelector('.swiper-pagination'),
                    clickable: true,
                },
                navigation: {
                    nextEl: swiper.querySelector('.swiper-button-next'),
                    prevEl: swiper.querySelector('.swiper-button-prev'),
                },
            });
        });
    });
</script>
@endsection