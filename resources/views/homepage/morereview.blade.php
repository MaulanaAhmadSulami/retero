@extends('layouts.app')
@section('title', 'ReviewList')
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

            <h2 class="mb-8 flex text-left font-ubuntuMonoBold text-[25px] mb-4">Bluetooth</h2>

            <div class="flex flex-row gap-2 justify-center">
                <!-- Card 1 -->
                <div id=card-shadow
                    class="border shadow-md mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <div class="w-full max-w-max">

            <h2 class="py-10 flex text-left font-ubuntuMonoBold text-[25px] mb-4">Mouse</h2>

            <div class="flex flex-row gap-2 justify-center">
                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="flex flex-col items-center">
        <div class="w-full max-w-max">
            <h2 class="py-10 flex text-left font-ubuntuMonoBold text-[25px]">idk lol</h2>

            <div class="flex flex-row gap-2 justify-center">
                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>

                <div id=card-shadow class="border mr-4 p-4 w-[250px] flex flex-col justify-between">
                    <img src="/images/dummyStock.png" alt="Image Unavailable" class="w-full h-32 object-cover">
                    <div class="mt-2 font-ubuntuMonoRegular text-center border-b py-2 mb-4">Product title here</div>
                    <button id="shadow-btn" type="submit" class="bg-button flex self-end">
                        {{-- <a href="{{ route('productDetail') }}" id="card-effect" class="font-ubuntuMonoBold px-1">Baca
                            Ulasan</a> --}}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection