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

    .text-clamp {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
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

    .card-product-desc,
    .card-product-img {
        flex: 1;
    }


</style>
@endpush

@section('content')

<div id="background" class="font-publicPixel bg-cover bg-no-repeat py-4">
    
    <div id="stroke" class="title p-4 border-b-4 bg-button flex justify-center font-bold">
        <h2 class="text-[24px]">
            Ulasan Terbaru
        </h2>
    </div>

    <div id="content" class="content-container">
        @forelse ($products as $index => $product)
        <div class="card-container w-[40%] flex mx-auto justify-center py-10">
            <div class="flex {{ $index % 2 == 1 ? 'flex-row-reverse' : 'mr-20' }} items-center">
                {{-- left part --}}
                <div class="{{ $index % 2 == 1 ? 'ml-20' : 'mr-20' }} w-[50%]" >
                    <div class="card-product-desc items-center py-4">
                        <h1 class="text-[20px] py-6">
                            {{ $product->productTitle }}
                        </h1>
                        <p class="text-[18px] font-ubuntuMonoRegular py-6 line-clamp-2 ">
                            {{ $product->productDescription }}
                        </p>
                        <div class="py-8">
                            <button id="shadow-btn" type="button" class="bg-button border-1 py-2 px-4">
                                <a class="font-ubuntuMonoBold text-[20px] tracking-tight" href="{{ route('homepage.productDetail', ['id' => $product->id]) }}"> <span id="stroke"> Lihat ulasan lebih lanjut</span></a>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- right part --}}
                <div class="card-product-img">
                    <img id="shadow" class="border" 
                        src="{{ Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('images/' . $product->image) }}" 
                        alt="Product image">
                </div>
            </div>
        </div>            
        @if ($index < count($products) - 1) 
            <div class="my-10"></div>
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
        
        @if($products -> isNotEmpty())
        <div class="py-8 flex justify-center mt-auto">
            <button id="shadow-btn" type="button" class="bg-button py-2 px-4 my-4">
                <a id="stroke" class="font-publicPixel text-[14px]" href="{{ route('homepage.morereview')}}">
                    Lihat Ulasan Lainnya
                </a>
            </button>
        </div>
        @endif
    </div>

</div>


@endsection
