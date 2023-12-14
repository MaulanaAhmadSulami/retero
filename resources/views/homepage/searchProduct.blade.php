@extends('layouts.app')
@section('title', 'Retero - Search')
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
<div class="py-4 bg-[#FAFAFA]">
    <div class="container mx-auto px-4">
        <h1 class="text-center text-[42px] font-ubuntuMonoBold mb-2">Search results for : "{{ $query }}"</h1>
        <div class="flex justify-center items-center">
            <form id="search-form" method="GET" action="{{ route('homepage.searchProduct') }}"
                class="w-full flex flex-row items-center justify-center">
                <input type="text" name="query" placeholder="Retero is looking for it...!"
                    class="pl-4 pr-2 py-6 px-8 rounded-lg w-2/5 bg-[#fefefe] border border-[#c6c6c6] h-6" />
                <button type="submit" 
                    id="button-shadow"
                    class="bg-button font-ubuntuMonoBold text-[#000000] text-[18px] ml-6 rounded-lg border py-2 px-4">
                    <p class="hover:text-[#FFFFFF]">Search</p>
                </button>
            </form>
        </div>
    </div>
</div>

<div class="flex items-center justify-center py-6 font-ubuntuMonoBold">
    <div class="container px-4 py-4">
        <div id="products-container" class=" grid grid-cols-2 md:grid-cols-3 gap-7 w-1/2 mx-auto">
            @forelse ($products as $product)
            <div id="card-shadow" class="border shadow-md p-4 mb-2 flex flex-col justify-between">
                <img src="{{ Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('images/' . $product->image) }}" alt="{{ $product->productTitle }}"
                    class="w-full h-32 object-cover">
                <div class="mt-2 font-bold text-center py-2">
                    <span class="border-b-2 border-[#FFC800] text-[21px]">
                        {{ $product->productTitle }}
                    </span>
                </div>
                
                <button id="button-shadow" type="button" class="bg-button flex self-center my-4  px-2">
                    <a href="{{ route('homepage.productDetail', ['id' => $product->id]) }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                        Ulasan</a>
                </button>

            </div>
            @empty
            <div class="col-span-3 flex justify-center items-center h-64">
                <p class="font-publicPixel text-[25px] text-center">Retero doesn't have that!</p>
            </div>
            @endforelse

        </div>

        <div class="mt-10">

            @if ($products->hasPages())
            <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-center">
                <div class="flex items-center space-x-1">
                    @if ($products->onFirstPage())
                    <span class="px-3 py-1 rounded-md">&laquo; Previous</span>
                    @else
                    <a href="{{ $products->previousPageUrl() }}"
                        class="px-3 py-1 bg-white border rounded-md hover:bg-gray-100">&laquo; Previous</a>
                    @endif

                    <span class="px-3 py-1 bg-white border rounded-md">{{ $products->currentPage() }}</span>

                    @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}"
                        class="px-3 py-1 bg-white border rounded-md hover:bg-gray-100">Next &raquo;</a>
                    @else
                    <span class="px-3 py-1 rounded-md">Next &raquo;</span>
                    @endif
                </div>
            </nav>
            @endif
        </div>

    </div>
</div>
@endsection