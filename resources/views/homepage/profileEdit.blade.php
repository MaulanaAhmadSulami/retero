@extends('layouts.app')
@section('title', 'Edit User - ' . Auth::user()->name)
@push('styles')
    <style>

    </style>
@endpush

@section('content')
<div class="mx-16">
<div class="container border mx-auto max-w-full w-full p-4 m-4 text-2xl">
    <h2 class="text-xl font-publicPixel mb-12 mt-4 text-center">Edit Profile</h2>
    @if (session('message'))
        <div class="bg-green-500 text-white p-4 mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="mx-40">
    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label class="block font-ubuntuMonoBold" for="username">Username</label>
            <input class="shadow border rounded py-2 px-3 w-full" id="username" type="text" name="name" value="{{ Auth::user()->name }}" required>
        </div>

        <div class="mb-5">
            <label class="block font-ubuntuMonoBold" for="avatar">Avatar</label>
            <img class="w-[13%]" src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('images/dummyStock.png') }}" alt="Profile Avatar">
            <input class="rounded py-2 w-full" id="avatar" type="file" name="avatar" value="{{ Auth::user()->avatar }}">
        </div>

        <h3 class="font-ubuntuMonoRegular mb-4">If you want to change your password, enter your old and new password below!</h3>

        <div class="mb-5">
            <label class="block  font-ubuntuMonoBold" for="password">Old Password</label>
            <input class="shadow border rounded py-2 px-3 w-full" placeholder="Old Password" id="old_password" type="password" name="old_password" >
            @error('old_password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block  font-ubuntuMonoBold" for="password">New Password</label>
            <input class="shadow border rounded py-2 px-3 w-full" placeholder="New Password" id="new_password" type="password" name="new_password" >
            @error('new_password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block font-ubuntuMonoBold" for="password_confirmation">Confirm</label>
            <input class="shadow border rounded py-2 px-3 w-full" id="new_password_confirmation" placeholder="Confirm new password" type="password" name="password_confirmation">
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-button text-[#000] py-1 px-2 rounded flex items-center gap-2 mt-2" type="submit">
                Save
            </button>
        </div>
    </form>
    </div>
</div>
</div>
@endsection
