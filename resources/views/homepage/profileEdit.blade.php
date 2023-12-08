@extends('layouts.app')
@section('title', 'Edit User - ' . Auth::user()->name)
@push('styles')
    <style>

    </style>
@endpush



@section('content')
<div class="container mx-auto px-4">
    <h2 class="text-xl font-publicPixel mb-4">Edit Profile</h2>

    @if (session('message'))
        <div class="bg-green-500 text-white p-4 mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block font-ubuntuMonoBold d mb-2" for="username">Username</label>
            <input class="shadow border rounded py-2 px-3 " id="username" type="text" name="name" value="{{ Auth::user()->name }}" required>
        </div>
        
        <div class="mb-10">
            <label class="block font-ubuntuMonoBold mb-2" for="avatar">Avatar</label>
            <img class="w-[15%] mb-2" src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('images/dummyStock.png') }}" alt="Profile Avatar">
            <input class="shadow border rounded py-2 px-3" id="avatar" type="file" name="avatar" value="{{ Auth::user()->avatar }}">
        </div>

        <h3 class="font-ubuntuMonoRegular mb-4">If you want to change your password, enter your old and new password below!</h3>

        <div class="mb-4">
            <label class="block  font-ubuntuMonoBold mb-2" for="password">Old Password</label>
            <input class="shadow border rounded py-2 px-3" placeholder="Old Password" id="old_password" type="password" name="old_password" >
            @error('old_password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block  font-ubuntuMonoBold mb-2" for="password">New Password</label>
            <input class="shadow border rounded py-2 px-3" placeholder="New Password" id="new_password" type="password" name="new_password" >
            @error('new_password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-ubuntuMonoBold mb-2" for="password_confirmation">Confirm</label>
            <input class="shadow border rounded py-2 px-3" id="new_password_confirmation" placeholder="Confirm new password" type="password" name="password_confirmation">
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-between mb-10">
            <button class="bg-button text-[#000] py-1 px-2 rounded-lg flex items-center gap-2 mt-2" type="submit">
                Save changes
            </button>
        </div>
    </form>
</div>
@endsection