@extends('layouts.app')
@section('title', 'Profile - ' . $user->name)
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
                    <img class="w-[15%] mr-5" src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/dummyStock.png') }}" alt="ProfilePicture" class="w-32 h-32 object-cover rounded-lg mr-4">
                    <div>
                        <h1 class="text-xl font-bold">{{ $user->name }}</h1>
                        <div class="mb-5">
                            <span>Member Since : </span>
                            <span data-timestamp="{{ $user->created_at->timestamp }}"></span>
                        </div>
                        @if($user->id == Auth::user()->id)
                        <a href="{{ route('user.edit') }}" class="bg-button py-2 px-2 rounded-lg">
                            <i class="fa-solid fa-gear"></i>
                            <span class="">Settings</span>
                        </a>                            
                        @endif
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
                        <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('images/dummyStock.png') }}" class="rounded-full h-10 w-10 flex-shrink-0" alt="">
                        <div>
                            <div class="flex items-center">
                                <h1 class="font-ubuntuMonoBold">{{ $user->name }}</h1>
                                <p class="text-sm text-gray-500 ml-2 font-ubuntuMonoBold" data-timestamp="{{ $comment->created_at->timestamp }}"></p>
                            </div>
                            <p class="font-ubuntuMonoRegular">{{ $comment->reviewComment }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
