@extends('layouts.app')
@section('title', 'Dashboard')
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
</style>
@endpush

@section('content')
<div>
    <div id="stroke" class="relative">

        <div class="p-4 border-b-4 bg-button flex justify-center items-center font-bold font-publicPixel">
            <h2 class="text-[20px]">
                Ulasan Terbaru
            </h2>
        </div>
    </div>

    <div class="p-10">
        <div class="p-10">
            @foreach($products as $index => $product)
            <div class="p-[100px] flex justify-center">
                <div class="flex {{ $index % 2 == 1 ? 'flex-row-reverse' : '' }}">
                    <div class="{{ $index % 2 == 1 ? 'ml-20' : 'mr-20' }} max-w-[500px]">
                        <h1 class="font-publicPixel text-[20px] text-left py-4">{{ $product->productTitle }}</h1>
                        <p class="font-ubuntuMonoRegular text-[17px]">
                            {{ $product->productDescription }}
                        </p>
                    </div>

                    <div class="w-[350px]">
                        <a href="{{ route('homepage.productDetail', ['id' => $product->id]) }}"> <img id="shadow" src="images/{{ $product->image }}"
                                alt="Product image"></a>
                    </div>
                </div>
            </div>
            @if($index < count($products) - 1) 
            <div class="my-10">
            @endif
        </div>
        @endforeach

    </div>
</div>

<div class="py-8 flex justify-center">
    <button id="shadow-btn" type="submit" class="bg-button 1px py-2 px-4">
        <a id="stroke" class="font-publicPixel text-[20px]" href="{{ 'morereview' }}">Lihat Ulasan
            Lainnya</a>
    </button>
</div>


</div>
@endsection