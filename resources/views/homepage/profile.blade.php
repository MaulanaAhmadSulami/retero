@extends('layouts.app')
@section('title', 'Profile - ' . Auth::user()->name)
@push('styles')
<style>
    #sizeComment{
        font-size: 9px;
    }
    #sizeName{
        font-size: 10px;
    }
    #rounded-image{
        border-radius: 50%;
    }
</style>
@endpush

@section('content')
<div class="mb-2">
    <div class="flex justify-center items-start">
        <div class="container border max-w-6xl">
            <div class="p-6">
                <div class="flex items-center justify-start">
                    <img class="w-[15%] mr-5" src="{{ asset('storage/' . Auth::user()->avatar) . '?=' . time() }}" alt="ProfilePicture" class="w-32 h-32 object-cover rounded-lg mr-4">
                    <div>
                        <h1 class="text-xl font-bold">{{ Auth::user()->name }}</h1>
                        <h1 class="text-xs"><b>Joined: </b>{{ Auth::user()->created_at->diffForHumans()}}</h1>
                        <a href="{{ route('user.edit') }}" class="bg-button text-white py-1 px-4 rounded-lg flex items-center gap-2 mt-2">
                            <i class="fa-solid fa-gear"></i> 
                            <span>Settings</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="flex justify-center items-center">
        <div class="container border mt-5 p-10 my-10 max-w-6xl">
            <h3 class="text-[25px] font-ubuntuMonoBold text-center">
                <i class="fa-solid fa-comments mr-2"></i> Recent comment
            </h3>
            <div class="mt-5">
                <div class="flex justify-center items-center gap-4 mb-4">
                    <img id="rounded-image" src="{{ asset('images/dummyStock.png') }}" class="rounded-full h-10 w-10" alt="">
                    <div class="flex-none max-w-full">
                        <h1 id="sizeName" class="font-bold">Freya Jayawardana</h1>
                        <p id="sizeComment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium inventore mollitia odio totam quisquam cumque vero doloremque aut, numquam eveniet, reiciendis consequuntur necessitatibus itaque?</p>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-4 mb-4">
                    <img id="rounded-image" src="{{ asset('images/dummyStock.png') }}" class="rounded-full h-10 w-10" alt="">
                    <div class="flex-none max-w-full">
                        <h1 id="sizeName" class="font-bold">Freya Jayawardana</h1>
                        <p id="sizeComment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium inventore mollitia odio totam quisquam cumque vero doloremque aut, numquam eveniet, reiciendis consequuntur necessitatibus itaque?</p>
                    </div>
                </div>
            </div>
            <div id="comment-container">
                {{-- KONTAINER KOMENTAR DISINI NANTI --}}
            </div>
        </div>
    </div>
</div>
@endsection
