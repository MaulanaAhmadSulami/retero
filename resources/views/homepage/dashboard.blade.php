@extends('layouts.app')
@section('title', 'Retero the review website you can trust!')
@push('styles')
<style>
  #stroke {
    text-shadow:
    -3px -3px 0 #fff,
    3px -3px 0 #fff,
    -3px 3px 0 #fff,
    3px 3px 0 #fff;
    
    
    
    }

    #shadow {
        box-shadow: 0.6rem 0.6rem 0;
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

    #app-container {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    #content {
        flex: 1;
    }
</style>
@endpush

@section('content')
<div id="app-container">
    <div id="stroke" class="relative">

        <div class="p-4 border-b-4 bg-button flex justify-center items-center font-bold font-publicPixel">
            <h2 class="text-[20px]">
                Ulasan Terbaru
            </h2>
        </div>
    </div>

    <div class="p-10" id="content">
        <div class="p-10">
            @forelse($products as $index => $product)
            <div class="p-[100px] flex justify-center">
                <div class="flex {{ $index % 2 == 1 ? 'flex-row-reverse' : '' }}">
                    <div class="{{ $index % 2 == 1 ? 'ml-20' : 'mr-20' }} max-w-[500px] flex flex-col justify-between">
                        <h1 class="font-publicPixel text-[20px] text-left py-4">{{ $product->productTitle }}</h1>
                        <p class="font-ubuntuMonoRegular text-[17px] line-clamp-3">
                            {{ $product->productDescription }}
                        </p>
                        <div class="flex items-center justify-between my-2">
                            <div class="flex items-center ml-8">
                                <p class="font-ubuntuMonoRegular font-ubuntuMono text-[25px]"> Rating {{ $product->productRating }}</p>
                            </div>
                            <div>
                                <button id="shadow-btn" type="button" class="bg-button border-1 border-gray-300 py-1 px-2">
                                    <a class="font-ubuntuMonoBold text-[20px] tracking-tight" href="{{ route('homepage.productDetail', ['id' => $product->id]) }}"> <span id="stroke"> Lihat ulasan lebih lanjut</span></a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="w-[350px]">
                        <img id="shadow" class="border rounded-md" src="images/{{ $product->image }}" alt="Product image">
                    </div>
                </div>
            </div>
            @if($index < count($products) - 1) <div class="my-10">
        </div>
        @endif
        @empty
        <div class="p-10 flex justify-center items-center text-center h-screen">
            <div class="flex">
                <div>
                    <h1 class="font-publicPixel text-[50px] py-4">Belum ada ulasan terbaru!</h1>
                </div>
            </div>
        </div>
        @endforelse
    </div>
</div>


@if($products -> isNotEmpty())
<div class="py-8 flex justify-center mt-auto">
    <button id="shadow-btn" type="button" class="bg-button 1px py-2 px-4">
        <a id="stroke" class="font-publicPixel text-[20px]" href="{{ 'morereview' }}">Lihat Ulasan
            Lainnya</a>
    </button>
</div>
@endif
</div>


@endsection
