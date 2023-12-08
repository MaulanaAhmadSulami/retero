@extends('layouts.app')
@section('title', 'Retero - Search')
@push('styles')

@endpush

@section('content')
<div class="py-10 bg-[#FAFAFA]">
    <div class="container mx-auto px-4">
        <h1 class="text-center text-2xl mb-6">Search results for: "{{ $query }}"</h1>
        <form id="search-form" method="GET" action="{{ route('homepage.searchProduct') }}"
            class="w-full flex flex-col items-center">
            <input type="text" name="query" class="pl-4 pr-4 py-2 border border-gray-300 rounded-lg w-1/3 mb-4"
                placeholder="Type your search here...">
            <button class="bg-black text-white border rounded-lg px-4" type="submit">Search</button>
        </form>
    </div>
</div>
<div class="flex items-center justify-center py-10">
    <div class="container px-4 py-10">
        <div id="products-container" class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @forelse ($products as $product)
            <div id="card-shadow" class="border shadow-md p-4 flex flex-col justify-between">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->productTitle }}"
                    class="w-full h-32 object-cover">
                <div class="mt-2 font-bold text-center border-b py-2 mb-4">{{ $product->productTitle }}</div>
                <a href="{{ route('homepage.productDetail', ['id' => $product->id]) }}"
                    class="bg-button text-white px-4 py-2 rounded-lg font-ubuntuMonoBold text-center">Baca Ulasan</a>
            </div>
            @empty
            <div class="col-span-3 flex justify-center items-center h-64">
                <p class="font-publicPixel text-[25px] text-center">No products found with that name!</p>
            </div>
            @endforelse

        </div>

        <div class="mt-10">

            @if ($products->hasPages())
            <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-center">
                <div class="flex items-center space-x-1">
                    @if ($products->onFirstPage())
                    <span class="px-3 py-1 text-gray-500 bg-gray-300 rounded-md">&laquo; Previous</span>
                    @else
                    <a href="{{ $products->previousPageUrl() }}"
                        class="px-3 py-1 bg-white border rounded-md hover:bg-gray-100">&laquo; Previous</a>
                    @endif
    
                    <span class="px-3 py-1 bg-white border rounded-md">Page {{ $products->currentPage() }}</span>
    
                    @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}"
                        class="px-3 py-1 bg-white border rounded-md hover:bg-gray-100">Next &raquo;</a>
                    @else
                    <span class="px-3 py-1 text-gray-500 bg-gray-300 rounded-md">Next &raquo;</span>
                    @endif
                </div>
            </nav>
            @endif
        </div>

    </div>
</div>
@endsection