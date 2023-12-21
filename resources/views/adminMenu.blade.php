@extends('layouts.app')
@section('title', 'Admin Dashboard - Retero')
@push('styles')
    
@endpush


@section('content')
<div class="flex min-h-screen">
    <x-admin-sidebar/>

    <div class="flex-grow p-4 justify-center text-center">
        <h1 class="text-[25px] font-publicPixel">Retero Statistic</h1>

        <div class="flex justify-center items-center text-center h-full font-publicPixel text-[50px]">
            <h1>STATISTIC PLACEHOLDER</h1>
        </div>
    </div>
</div>
@endsection