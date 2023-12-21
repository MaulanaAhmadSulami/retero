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

        text-shadow:
            -3px -3px 0 #fff,
            3px -3px 0 #fff,
            -3px 3px 0 #fff,
            3px 3px 0 #fff;



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
        
    .swiper {
        width: 60rem;
        height: 23rem;
        margin: 0 auto;
    }

</style>
@endpush

@section('content')
<div>
    <div id="stroke" class="relative">

        <div class="p-4 bg-button flex justify-center items-center h-32 font-bold font-publicPixel ">
            <h2 class="text-[35px]">
                Ulasan Lainnya
            </h2>
        </div>

    </div>
</div>

<div class="flex justify-center">
    <div class="container overflow-x-auto grid mb-10 mt-4 ">
        {{-- cards product --}}
        @foreach($productsByType as $productType => $products)

        {{-- ini aku opacity in 0% karena aku bingung kasih gap vertikal dari grid ke grid --}}
        <h2 class="text-left w-[63%] mx-auto font-ubuntuMonoBold text-[25px]" style="opacity: 0%">{{ $productType }}</h2>

        <div class="container-section border-t-2 border-[#fbbf24] py-6 w-[65%] mx-auto shadow-md">
            <div class="swiper mySwiper md:grid-cols-3 mx-auto ">
                {{-- card product --}}
                <h2 class="text-left pl-6 pb-2 mx-auto font-ubuntuMonoBold text-[25px]">{{ $productType }}</h2>
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                    <div class="swiper-slide pb-12 pl-6">
                        <div id=card-shadow class="border p-4 mb-2 flex flex-col h-full">
    
                            {{-- image container --}}
                            <img src="{{ Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('images/' . $product->image) }}"
                                alt="Image Unavailable" class="w-full h-32 object-cover">
                            
                            {{-- product title --}}
                            <div class="flex-grow mt-2 font-bold text-center py-2">
                                <span class="border-b-2 border-[#FFC800] text-[21px]">
                                    {{ $product->productTitle }}
                                </span>
                            </div>
    
                            <button id="shadow-btn" type="button" class="bg-button flex self-center my-4  px-2">
                                <a href="{{ route('homepage.productDetail', ['id' => $product->id]) }}" id="card-effect"
                                    class="font-ubuntuMonoBold px-1">
                                    Baca Ulasan</a>
                            </button>
                        </div>
                    </div>
                    @endforeach
    
                </div>
    
                {{-- swiper --}}
                <div class="swipper mt-10">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swipers = document.querySelectorAll('.mySwiper');
        swipers.forEach(function(swiper) {
            new Swiper(swiper, {
                slidesPerView: 4,
                spaceBetween: 10,
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