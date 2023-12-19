@extends('layouts.app')
@section('title', 'Retero - Products')
@push('styles')
<style>
    #card-shadow {
        box-shadow: 0.3rem 0.3rem 0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    #button-shadow {
        box-shadow: 0.2rem 0.2rem 0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    #button-shadow:hover {
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

    #stroke {
        text-shadow:
            -3px -3px 0 #000,
            3px -3px 0 #000,
            -3px 3px 0 #000,
            3px 3px 0 #000;
    }
</style>
@endpush

@section('content')
    <div class="flex justify-center items-center">
        <div class="max-w-7xl space-y-6 my-6">
            @foreach ($products as $product)
            <div id="card-shadow" class="border shadow-md overflow-hidden flex gap-4">
                <div class="w-[20%] border-r p-4">
                    <img class="w-full object-cover" src="{{ asset('images/' . $product->image) }}" alt="Product image">
                </div>
                <div class="w-full p-4 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl font-bold">{{ $product->productTitle }}</h1>
                        <p class="text-lg text-gray-600">{{ $product->productDescription }}</p>
                    </div>
                    <div class="flex justify-end">
                        <button id="button-shadow" type="button" class="bg-button flex self-center my-4  px-2">
                            <a href="{{ route('homepage.productDetail', ['id' => $product->id]) }}" id="card-effect" class="font-ubuntuMonoBold px-1 text-[20px]">Lihat ulasan lebih lanjut</a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
