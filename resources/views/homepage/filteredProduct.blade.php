@extends('layouts.app')
@section('title', 'Retero - Products')
@push('styles')
    
@endpush

@section('content')
    <div>
        @foreach ($products as $product)
        {{-- Temporary Style, waiting for frontend to design it
            Currently there is only Title, Decs, Rating, image and Button
            but please do add more details as you like--}}
        <div class="p-[100px] flex justify-center">
            <h1 class="font-publicPixel text-[20px] text-left py-4">{{ $product->productTitle }}</h1>
            <p class="font-ubuntuMonoRegular text-[17px] line-clamp-3">
                {{ $product->productDescription }}
            </p>
            <div class="w-[350px]">
                <img id="shadow" class="border rounded-md" src="{{ Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('images/' . $product->image) }}" alt="Product image">
            </div>
            <div class="mt-4">
                <button id="shadow-btn" type="button" class="bg-button border-1 border-gray-300 py-1 px-2">
                    <a class="font-ubuntuMonoBold text-[20px] tracking-tight" href="{{ route('homepage.productDetail', ['id' => $product->id]) }}"> <span id="stroke"> Lihat ulasan lebih lanjut</span></a>
                </button>
            </div>
        </div>
        @endforeach
    </div>
@endsection