@extends('layouts.app')
@section('title', 'Edit User - ' . Auth::user()->name)
@push('styles')
    <style>

    </style>
@endpush

@section('content')
<div class="mx-16">
<div class="container border rounded-lg mx-auto max-w-full w-full p-4 m-4 text-2xl">
    <h2 class="text-[25px] font-publicPixel mb-12 mt-4 text-center">Edit Profile</h2>
    @if (session('message'))
        <div class="bg-[#4ade80] text-white p-4 mb-4 text-center font-publicPixel">
            {{ session('message') }}
        </div>
    @endif

    <div class="mx-40">
    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-10">
            <label class="block font-ubuntuMonoBold mb-4" for="username">Username</label>
            <input class="shadow border rounded py-2 px-3 w-full" id="username" type="text" name="name" value="{{ Auth::user()->name }}" required>
        </div>

        <div class="mb-10">
            <label class="block font-ubuntuMonoBold mb-4" for="avatar">Avatar</label>
            <img class="w-[13%] rounded-full" src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('images/dummyStock.png') }}" alt="Profile Avatar">
            <input class="rounded py-2 w-full" id="avatar" type="file" name="avatar" value="{{ Auth::user()->avatar }}">
        </div>

        <h3 class="font-ubuntuMonoRegular mb-4">If you want to change your password, enter your old and new password below!</h3>

        <div class="mb-10">
            <label class="block  font-ubuntuMonoBold mb-4" for="password">Old Password</label>
            <input class="shadow border rounded py-2 px-3 w-full" placeholder="Old Password" id="old_password" type="password" name="old_password" >
            @error('old_password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-10">
            <label class="block  font-ubuntuMonoBold mb-4" for="password">New Password</label>
            <input class="shadow border rounded py-2 px-3 w-full" placeholder="New Password" id="new_password" type="password" name="new_password" >
            @error('new_password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-10">
            <label class="block font-ubuntuMonoBold" for="password_confirmation">Confirm</label>
            <input class="shadow border rounded py-2 px-3 w-full" id="new_password_confirmation" placeholder="Confirm new password" type="password" name="password_confirmation">
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-between mb-10">
            <button class="bg-button text-[#000] py-4 px-4 rounded-lg flex items-center gap-2 mt-2 hover:bg-[#facc15]" type="submit">
                <span class="font-ubuntuMonoBold">Save changes</span>
            </button>
        </div>
    </form>
    </div>
</div>
</div>
@endsection
