@extends('layouts.app')
@section('title', 'Detail - Retero')
@push('styles')
<style>
    #shadow {
        box-shadow: 0.5rem 0.5rem 0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    #shadow:hover {
        transform: translate3d(0.25rem, 0.25rem, -0.25rem);
        box-shadow: none;
    }

    #stroke {
        text-shadow:
            -3px -3px 0 #000,
            3px -3px 0 #000,
            -3px 3px 0 #000,
            3px 3px 0 #000;
    }

    #listProduct {
        list-style-type: circle;
    }

    #modal-btn {
        box-shadow: 0.25rem 0.25rem 0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    #modal-btn:hover {
        transform: translate3d(0.25rem, 0.25rem, -0.25rem);
        box-shadow: none;
    }
</style>
@endpush

@section('content')
<div>
    <div class="grid place-items-center">
        <div class="grid grid-cols-2 items-center text-center">
            <div id="image-container" class="max-w-md w-full mx-auto">
                <a href="https://www.amazon.com/dp/B08Z9WT6PQ?tag=gadgetreviewc-20&th=1&geniuslink=true" class="block">
                    <img id="shadow" src="{{ asset('images/' . $product->image) }}" alt="Product image">
                </a>
            </div>
            <div class="text-left ml-4">
                <h1 class="font-publicPixel text-[31.25px]">{{ $product->productTitle }}</h1>
                <span class="font-ubuntuMonoRegular">
                    <iconify-icon icon="subway:refresh-time" class="text-lg"></iconify-icon> <span class="text-lg">{{ $product->created_at->diffForHumans() }}</span>
                </span>
            </div>
            <div class="max-w-[750px] mt-20 text-left ml-4 tracking-wide">
                <h1 id="stroke" class="text-[40px] font-publicPixel text-button tracking-widest">Ringkasan</h1>
                <p class="font-ubuntuMonoRegular text-[20px] mt-5">
                    {{ $product->productDescription }}
                </p>

                <h1 id="stroke" class="text-[40px] font-publicPixel text-button py-10 tracking-widest">Kelebihan</h1>

                <ul id="listProduct" class="list-inside text-[20px] mt-5">
                    @foreach ($product->advantages as $advantage )
                    <li>{{ $advantage->advantageDescription }}</li>
                    @endforeach
                </ul>

                <h1 id="stroke" class="text-[40px] font-publicPixel text-button py-10 tracking-widest">Kekurangan</h1>
                <ul id="listProduct" class="list-inside text-[20px] mt-5">
                    @foreach ($product->disadvantages as $disadvantage )
                    <li>{{ $disadvantage->disadvantageDescription }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="login-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed justify-center items-center md:inset-0">
            <div class="relative p-4 w-full max-w-2xl h-full">
                <!-- Modal content -->
                <div class="relative border bg-[#fff] rounded-lg justify-flex items-center">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t dark:border-gray-600">
                        <img src="{{ asset('images/retero.png') }}" alt="Retero">
                        <button type="button" data-modal-hide="login-modal">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6">
                        <form method="POST" action="{{ route('auth.login') }}" id="loginForm">
                            @csrf
                            <div class="mb-8">
                                <input type="text" name="email" placeholder="Email" id="email"
                                    class="bg-form border-b border-b w-full py-2 px-3" value="{{ old('email') }}"
                                    autocomplete="email" autofocus>
                                <div id="emailLoginError" class="font-ubuntuMonoBold"></div>
                            </div>

                            <div class="mb-8">
                                <input type="password" name="password" placeholder="Password" id="password"
                                    class="bg-form border-b border-b w-full py-2 px-3">
                                <div id="passwordLoginError" class="font-ubuntuMonoBold"></div>
                            </div>
                            <div class="mb-8 flex items-center">
                                <input type="checkbox" class="w-4 h-4 border" name="remember" id="remember">
                                <label for="remember"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                    me?</label>
                            </div>

                            <button id="modal-btn" type="submit"
                                class="bg-button border 1px py-2 px-4 rounded w-full font-bold font-publicPixel text-[13px]">
                                <p class="hover:text-[#FFFFFF]">Login</p>
                            </button>
                            <div class="text-center p-6">
                                <p>
                                    Don't have an account yet? <button type="button" data-modal-target="regist-modal"
                                        data-modal-toggle="regist-modal" data-modal-hide="login-modal"> <span
                                            class="underline text-button font-bold hover:text-[#000000]">Register</span></button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="regist-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed justify-center items-center md:inset-0">
            <div class="relative p-4 w-full max-w-2xl h-full">
                <!-- Modal content -->
                <div class="relative border bg-[#fff] rounded-[25px] justify-flex items-center">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t dark:border-gray-600">
                        <img src="{{ asset('images/retero.png') }}" alt="Retero">
                        <button type="button" data-modal-hide="regist-modal">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6">
                        <form method="POST" action="{{ route('auth.register') }}" id="registerForm">
                            @csrf
                            <div class="mb-8">
                                <input type="text" placeholder="Username" name="name" id="name"
                                    value="{{ old('name') }}"
                                    class="bg-form border-b w-full py-2 px-3">
                                <div id="nameError" class="font-ubuntuMonoBold text-red-500"></div>
                            </div>

                            <div class="mb-8">
                                <input type="email" placeholder="Email" name="email" id="email"
                                    value="{{ old('email') }}"
                                    class="bg-form border-b w-full py-2 px-3">
                                <div id="emailError" class="font-ubuntuMonoBold text-red-500"></div>
                            </div>

                            <div class="mb-8">
                                <input type="password" placeholder="Password" name="password" id="password" required
                                    class="bg-form border-b  w-full py-2 px-3">
                                <div id="passwordError" class="font-ubuntuMonoBold text-red-500"></div>
                            </div>
                            <div class="mb-8">
                                <input type="password" placeholder="Confirm Password" name="password_confirmation"
                                    id="password_confirmation" required class="bg-form border-b  w-full py-2 px-3">
                                    <div id="passwordConfirmationError" class="font-ubuntuMonoBold text-red-500"></div>
                            </div>

                            <button id="modal-btn" type="submit"
                                class="bg-button border 1px py-2 px-4 rounded w-full font-bold font-publicPixel text-[13px]">
                                <p class="hover:text-[#FFFFFF]">Register</p>
                            </button>

                            <div class="text-center p-6">
                                <p>
                                    Already have an account? <button type="button" data-modal-target="login-modal"
                                        data-modal-toggle="login-modal" data-modal-hide="regist-modal"> <span
                                            class="underline text-button font-bold hover:text-[#000000]">Login</span></button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container border text-center mt-10 p-10 my-10" id="comment-post-container">
            <h3 class="text-[25px] font-ubuntuMonoBold">
                <i class="fa-solid fa-comments mr-2"></i> Post a comment
            </h3>

            <div class="text-[20px] mt-6"> 
                <p>

                    <button data-modal-target="login-modal" data-modal-toggle="login-modal" type="button"> <span
                            class="underline font-ubuntuMonoBold">Login</span></button> or <button
                        data-modal-target="regist-modal" data-modal-toggle="regist-modal" type="button"><span
                            class="underline font-ubuntuMonoBold">Register</span></button> to post a comment.
                </p>
            </div>


            <div id="comment-container">

                {{-- COMMENT CONTAINER HERE LATER --}}
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection