@extends('layouts.app')
@section('title', 'Detail - Retero')
@push('styles')
<style>
    #shadow {
        box-shadow: 0.5rem 0.5rem 0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    #shadow-comment {
        box-shadow: 0.25rem 0.25rem 0;
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

    #text-clamp {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }

    #comment_id::placeholder {
       text-align: center;
       font-size: 25px;
    }
</style>
@endpush

@section('content')
<div>
    <div class="mb-10">
        <div class="w-[50%] py-10 mb-10 p-4 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10  text-center">
                <div id="image-container" class="mx-auto ">
                    <img id="shadow" class="border p-4"
                        src="{{ Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('images/' . $product->image) }}"
                        alt="Product image">
                </div>
                <div class="text-left p-2">
                    <h1 class="font-publicPixel text-[28px]">{{ $product->productTitle }}</h1>
                    <div>
                        <span class="font-ubuntuMonoRegular flex justify-start items-center gap-4">
                            <iconify-icon icon="subway:refresh-time" class="text-lg h-full"></iconify-icon>
                            <span class="text-lg h-full" data-timestamp="{{ $product->created_at->timestamp }}"></span>
                        </span>
                    </div>
                    <p class="font-ubuntuMonoRegular text-[18px] mt-5">
                        {{ $product->productDescription }}
                    </p>
                </div>
            </div>
            <div class="flex">
                <div class="py-4">
                    {{-- left section --}}
                    <div class="">
                        <h1 id="stroke" class="text-[24px] font-publicPixel text-button py-10 tracking-widest">Kelebihan
                        </h1>
                        <ul id="listProduct" class="list-inside text-[20px] mt-5">
                            @foreach ($product->advantages as $advantage )
                            <li>{{ $advantage->advantageDescription }}</li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- right section --}}
                    <div class="">
                        <h1 id="stroke" class="text-[24px] font-publicPixel text-button py-10 tracking-widest">
                            Kekurangan</h1>
                        <ul id="listProduct" class="list-inside text-[20px] mt-5">
                            @foreach ($product->disadvantages as $disadvantage )
                            <li>{{ $disadvantage->disadvantageDescription }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>


        <div id="login-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed justify-center items-center md:inset-0">
            <div class="relative p-4 w-full max-w-lg h-full">
                <!-- Modal content -->
                <div class="relative border bg-[#fff] rounded-lg justify-flex items-center px-8">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start py-6 rounded-t dark:border-gray-600 h-48">
                        <img class="mx-auto w-72 h-auto" src="{{ asset('images/retero.png') }}" alt="Retero">
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
                            <div class="mb-4">
                                <input type="text" name="email" placeholder="Email" id="email"
                                    class="bg-[#f5f5f5] border border-[#c6c6c6] w-full py-2 px-3 rounded-lg h-12"
                                    value="{{ old('email') }}" autocomplete="email" autofocus>
                                <div id="emailLoginError" class="font-ubuntuMonoBold"></div>
                            </div>

                            <div class="mb-4">
                                <input type="password" name="password" placeholder="Password" id="password"
                                    class="bg-[#f5f5f5] border border-[#c6c6c6] w-full py-2 px-3 rounded-lg h-12">
                                <div id="passwordLoginError" class="font-ubuntuMonoBold"></div>
                            </div>

                            {{-- <div class="mb-8 flex items-center">
                                <input type="checkbox" class="w-4 h-4 border" name="remember" id="remember">
                                <label for="remember"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                    me?</label>
                            </div> --}}

                            <button id="modal-btn" type="submit"
                                class="bg-button border 1px my-6 py-2 px-4 rounded w-full font-bold font-publicPixel text-[13px] h-12">
                                <p class="hover:text-[#FFFFFF]">Login</p>
                            </button>
                            <div class="flex justify-between py-2">
                                <p>
                                    <button type="button" data-modal-target="regist-modal"
                                        data-modal-toggle="regist-modal" data-modal-hide="login-modal"> <span
                                            class="text-button hover:text-[#000000]">Having Problems?</span>
                                    </button>
                                </p>
                                <p>
                                    <button type="button" data-modal-target="regist-modal"
                                        data-modal-toggle="regist-modal" data-modal-hide="login-modal"> <span
                                            class="text-button hover:text-[#000000]">Register</span>
                                    </button>
                                </p>
                            </div>

                            <div class="divider flex py-4 items-center font-ubuntuMonoBold">
                                <p class="flex-grow border-b border-[#a5a3a3] mx-2"></p>
                                <p class="text-sm text-[#a5a3a3] mx-2">More Login Methods</p>
                                <p class="flex-grow border-b border-[#a5a3a3] mx-2"></p>
                            </div>

                            <a href="#" class="flex items-center mb-6">
                                <img class="mx-auto w-12 h-12" src="/images/favicon.jpg" alt="logo google">
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="regist-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed justify-center items-center md:inset-0">
            <div class="relative p-4 w-full max-w-lg h-full">
                <!-- Modal content -->
                <div class="relative border bg-[#fff] rounded-lg justify-flex items-center px-8">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start py-6 rounded-t h-48">
                        <img class="mx-auto w-72 h-auto" src="{{ asset('images/retero.png') }}" alt="Retero">
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

                            <div class="mb-4">
                                <input type="text" placeholder="Username" name="name" id="name" required
                                    value="{{ old('name') }}"
                                    class=" bg-[#f5f5f5] border border-[#c6c6c6] w-full py-2 px-3 rounded-lg h-12">
                                <div id="nameError" class="font-ubuntuMonoBold"></div>
                            </div>

                            <div class="mb-4">
                                <input type="email" placeholder="Email" name="email" id="email" required
                                    value="{{ old('email') }}"
                                    class="bg-[#f5f5f5] border border-[#c6c6c6] w-full py-2 px-3 rounded-lg h-12">
                                <div id="emailError" class="font-ubuntuMonoBold"></div>
                            </div>

                            <div class="mb-4">
                                <input type="password" placeholder="Password" name="password" id="password" required
                                    class="bg-[#f5f5f5] border border-[#c6c6c6] w-full py-2 px-3 rounded-lg h-12">
                                <div id="passwordError" class="font-ubuntuMonoBold"></div>
                            </div>

                            <div class="mb-8">
                                <input type="password" placeholder="Confirm Password" name="password_confirmation"
                                    id="password_confirmation" required
                                    class="bg-[#f5f5f5] border border-[#c6c6c6] w-full py-2 px-3 rounded-lg h-12">
                                <div id="passwordConfirmationError" class="font-ubuntuMonoBold text-red-500"></div>
                            </div>

                            <div class="mb-4 flex">
                                <input type="checkbox" class="w-4 h-4 border" name="privacy" id="privacy" required>
                                <label for="privacy" class="ml-2 text-sm font-medium">
                                    I have read and agree to the <span class="text">Terms of Service</span> and
                                    <span>Privacy Policy</span>
                                </label>
                            </div>

                            <button id="modal-btn" id="registerBtn" type="submit"
                                class="bg-button border 1px py-2 px-4 rounded w-full font-bold font-publicPixel text-[13px] h-12">
                                <p class="hover:text-[#FFFFFF]">Register</p>
                            </button>

                            <div class="text-center p-4">
                                <p>
                                    Already have an account? <button type="button" data-modal-target="login-modal"
                                        data-modal-toggle="login-modal" data-modal-hide="regist-modal"> <span
                                            class="text-button font-bold hover:text-[#000000]">Login</span></button>
                                </p>
                            </div>

                            <div class="divider flex py-4 items-center font-ubuntuMonoBold">
                                <p class="flex-grow border-b border-[#a5a3a3] mx-2"></p>
                                <p class="text-sm text-[#a5a3a3] mx-2">More Login Methods</p>
                                <p class="flex-grow border-b border-[#a5a3a3] mx-2"></p>
                            </div>

                            <a href="#" class="flex items-center mb-6">
                                <img class="mx-auto w-12 h-12" src="/images/favicon.jpg" alt="logo google">
                            </a>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- container Discussion --}}
        <div class="container mx-auto px-10 py-6 mb-10 border-t-2 border-[#fbbf24] text-center w-[50%] shadow-md"
            id="comment-post-container">
            <div class="container  items-center mx-auto">

                <h3 class="text-[25px] font-ubuntuMonoBold text-center mx-4">
                    <i class="fa-solid fa-comments mr-2"></i>
                    Discussion
                </h3>

                <div class="">
                    {{-- box post a comment --}}
                    <div class="my-6 mb-10">
                        @if(Auth::user())
                        <form action="{{ route('comment.store', $product->id) }}" method="POST">
                            @csrf
                            <div id="shadow-comment" class="border container mx-auto my-4 p-4">
                                <textarea name="comment" id="comment_id" cols="40" rows="4" minlength="10"
                                    maxlength="1000" placeholder="You can comment here!"
                                    class="w-full max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-3xl"></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="inline-flex py-2.5 px-4 text-sm font-ubuntuMonoRegular bg-button hover:bg-[#f3f4f6] ">
                                    Post Comment
                                </button>
                            </div>
                        </form>
                        @else
                        <p class="p-2 border py-10 background-">
                            <button data-modal-target="login-modal" data-modal-toggle="login-modal" type="button"><span
                                    class="underline font-ubuntuMonoBold">Login</span></button>
                            or
                            <button data-modal-target="regist-modal" data-modal-toggle="regist-modal"
                                type="button"><span class="underline font-ubuntuMonoBold">Register</span></button>
                            to post a comment.
                        </p>
                        @endif
                    </div>

                    <div class="py-4">
                        {{-- comment card --}}
                        @forelse ($comments as $comment)
                        <div class="flex items-start justify-between gap-4 my-6 border p-4" id="shadow-comment">
                            <div class="flex flex-col flex-grow items-start gap-2">
                                <a href="{{ route('users.profile', ['uuid' => $comment->user->id ]) }}"
                                    class="inline-flex items-center gap-2 flex-shrink-0 mr-3 text-sm ">

                                    {{-- profile picture --}}
                                    <img class="w-8 h-8 rounded-full"
                                        src="{{ $comment->user->avatar ? asset('storage/'.$comment->user->avatar) : asset('images/dummyStock.png') }}"
                                        alt="Profile picture">

                                    {{-- profile name --}}
                                    <p class="font-ubuntuMonoBold text-[18px]">
                                        {{ $comment->user->name }}
                                    </p>

                                    {{-- timestamp --}}
                                    <p class="text-sm ml-2 font-ubuntuMonoRegular"
                                        data-timestamp="{{ $comment->created_at->timestamp }}">{{
                                        $comment->created_at->diffForHumans() }}</p>
                                </a>

                                {{-- body comment --}}
                                <div class="flex flex-cols-2 flex-grow justify-between w-[100%]">
                                    <div class="container-comment">
                                        <p id="comment-body-{{ $comment->id }}" class="break-words overflow-hidden">
                                            {{ $comment->reviewComment }}
                                        </p>
                                    </div>
                                    <div class="button-body flex">
                                        @if (Auth::id() == $comment->user_id)
                                        <button
                                            class="edit-comment-btn bg-button rounded-md py-1 px-4 mx-2 hover:bg-[#86efac]"
                                            data-comment-id="{{ $comment->id }}">Edit
                                        </button>

                                        @endif
                                        @if(Auth::check() && Auth::user()->isAdmin || Auth::id() == $comment->user_id)
                                        <form method="POST" action="{{ route('comment.destroy', $comment->id) }}"
                                            class="delete-comment-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="delete-comment-btn bg-button rounded-md py-1 px-2 mx-2 hover:bg-[#ef4444]">Delete</button>
                                        </form>
                                        @endif
                                    </div>

                                </div>

                                {{-- edit comment --}}
                                <div class="container edit-comment mx-10 w-[75%] ">
                                    <form class="edit-comment-form hidden" method="POST"
                                        action="/comments/{{ $comment->id }}" data-comment-id="{{ $comment->id }}">
                                        @csrf
                                        @method('PATCH')
                                        <div class="flex flex-col items-end">
                                            <textarea name="content"
                                                class="edit-textarea border rounded-md px-2 flex items-start" cols="100"
                                                rows="3" minlength="10" maxlength="10000">{{ $comment->reviewComment }}
                                                </textarea>
                                            <button type="submit" id="save-edit-btn-{{ $comment->id }}"
                                                class="bg-button rounded-md py-1 px-4 my-2 hover:bg-[#86efac]"> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="container border mt-5 p-10 my-10">
                            <p>No Comments on this product yet.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- TODO: Fix this script later not reading the modal on register button modal --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('registerForm');
    const registerBtn = document.getElementById('registerBtn');

    registerForm.addEventListener('input', () => {
        let allFilled = true;
        document.querySelectorAll('#registerForm input[required]').forEach(input => {
            if (!input.value) {
                allFilled = false;
            }
        });

        registerBtn.disabled = !allFilled;
        if (allFilled) {
            registerBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }
    });
});
</script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

@endsection