@extends('layouts.app')
@section('title', 'Detail')
@push('styles')
<style>
    #shadow {
        box-shadow: 0.5rem 0.5rem 0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    #shadow:hover {
        transform: translate3d(0.25rem, 0.25rem, -0.25rem);
        box-shadow: none;
    }

    #stroke {
        text-shadow:
            -3px -3px 0 #000,
            3px -3px 0 #000,
            -3px 3px 0 #000,
            3px 3px 0 #000;
    }

    #listProduct {
        list-style-type: circle;
    }
</style>
@endpush

@section('content')
<div>
    <div class="grid place-items-center">
        <div class="grid grid-cols-2 items-center text-center">
            <a href="https://www.amazon.com/dp/B08Z9WT6PQ?tag=gadgetreviewc-20&th=1&geniuslink=true">
                <img id="shadow" src="{{ asset('images/' . $product->image) }}" class="w-[500px]" alt="Product image">
            </a>
            <div class="text-left mr-[120px]">
                <h1 class="font-publicPixel text-[31.25px]">{{ $product->productTitle }}</h1>
                <span class="font-ubuntuMonoRegular">
                    <iconify-icon icon="subway:refresh-time" class="text-xs"></iconify-icon> 22 Oktober 2023
                </span>
            </div>
            <div class="max-w-[750px] mt-20 text-left tracking-wide">
                <h1 id="stroke" class="text-[40px] font-publicPixel text-button tracking-widest">Ringkasan</h1>
                <p class="font-ubuntuMonoRegular text-[20px] mt-5">
                    {{ $product->productDescription  }}
                </p>

                <h1 id="stroke" class="text-[40px] font-publicPixel text-button py-10 tracking-widest">Kelebihan</h1>

                <ul id="listProduct" class="list-inside text-[20px] mt-5">
                @foreach ($product->advantages as $advantage )
                    <li>{{ $advantage->advantageDescription }}</li>
                @endforeach
                </ul>

                <h1 id="stroke" class="text-[40px] font-publicPixel text-button py-10 tracking-widest">Kekurangan</h1>
                <ul id="listProduct" class="list-inside text-[20px] mt-5">
                    @foreach ($product->disadvantages as $disadvantage )
                        <li>{{ $disadvantage->disadvantageDescription }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="border rounded-2xl inline-block p-2 mt-10 flex justify-content-end">
            <button type="submit">
                <iconify-icon icon="basil:plus-solid" class="text-xl transfrom bot-1/2"></iconify-icon> Tambah komentar
            </button>
        </div>
    </div>
</div>
@endsection


</html>