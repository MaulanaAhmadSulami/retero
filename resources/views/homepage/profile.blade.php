@extends('layouts.app')
@section('title', 'Profile - ' . Auth::user()->name)
@push('styles')
<style>
   

</style>
@endpush

@section('content')
<div class="mb-2">
    <div class="flex justify-center items-start">
        <div class="container border max-w-6xl">
            <div class="p-6">
                <div class="flex items-center justify-start">
                    <img class="w-[15%] mr-5" src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('images/dummyStock.png') }}" alt="ProfilePicture" class="w-32 h-32 object-cover rounded-lg mr-4">
                    <div>
                        <h1 class="text-xl font-bold">{{ Auth::user()->name }}</h1>
                        <h1 class="text-sm mb-10"><b>Joined: </b>{{ Auth::user()->created_at->diffForHumans()}}</h1>
                        <a href="{{ route('user.edit') }}" class="bg-button text-white py-2 px-4 rounded-lg flex items-center gap-2 mt-2">
                            <i class="fa-solid fa-gear"></i>
                            <span class="">Settings</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="container border mt-5 p-10 my-10 max-w-6xl">
            <h3 class="text-[25px] font-ubuntuMonoBold text-center">
                <i class="fa-solid fa-comments mr-2"></i> Recent comments
            </h3>
            <div class="mt-5">
                @foreach ($comments as $comment)
                    <div class="flex items-start gap-4 mb-4">
                        <!-- Avatar -->
                        <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('images/dummyStock.png') }}" class="rounded-full h-10 w-10 flex-shrink-0" alt="">
    
                        <!-- Username and Comment -->
                        <div>
                            <h1 class="font-ubuntuMonoBold">{{ Auth::user()->name }}</h1>
                            <p class="font-ubuntuMonoRegular">{{ $comment->reviewComment }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    
</div>
@endsection
