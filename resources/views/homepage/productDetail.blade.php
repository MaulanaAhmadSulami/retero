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
            <div id="image-container" class="max-w-md w-full mx-auto block mr-10">
                <img id="shadow"
                    src="{{ Storage::disk('public')->exists($product->image) ? asset('storage/' . $product->image) : asset('images/' . $product->image) }}"
                    alt="Product image">
            </div>
            <div class="text-left ml-4">
                <h1 class="font-publicPixel text-[31.25px]">{{ $product->productTitle }}</h1>
                <div>
                    <span class="font-ubuntuMonoRegular flex justify-start mt-5 items-center gap-4">
                        <iconify-icon icon="subway:refresh-time" class="text-lg h-full"></iconify-icon>
                        <span class="text-lg h-full" data-timestamp="{{ $product->created_at->timestamp }}"></span>
                    </span>
                </div>
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

        <div class="container mx-auto p-10 my-10 bg-[#fbbf24] rounded-md text-center" id="comment-post-container">
            <h3 class="text-[25px] font-ubuntuMonoBold">
                <i class="fa-solid fa-comments mr-2"></i> Post a comment
            </h3>

            <div class="text-[20px]" id="comment-container">
                @if(Auth::user())
                <form action="{{ route('comment.store', $product->id) }}" method="POST">
                    @csrf
                    <div id="comment-form" class="container mx-auto p-4">
                        <textarea name="comment" id="comment_id" cols="40" rows="4" minlength="10" maxlength="1000"
                            placeholder="You can comment here!"
                            class="w-full max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-3xl rounded-md p-4 mb-4"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-[#fff] text-black font-semibold py-2 px-4 rounded-md items-center justify-center hover:bg-[#f3f4f6]">
                            <i class="fa-solid fa-comment"></i> Comment
                        </button>
                    </div>
                </form>
                @else
                <p class="p-2">
                    <button data-modal-target="login-modal" data-modal-toggle="login-modal" type="button"> <span
                            class="underline font-ubuntuMonoBold">Login</span></button> or <button
                        data-modal-target="regist-modal" data-modal-toggle="regist-modal" type="button"><span
                            class="underline font-ubuntuMonoBold">Register</span></button> to post a comment.
                </p>
                @endif
            </div>
        </div>


        <div class="container mx-auto p-10 my-10 border rounded-md"" id=" all-comments">
            <div>
                <div class="mt-5">
                    @forelse ($comments as $comment)
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <div class="flex items-start gap-2 flex-grow min-w-0">
                            <a href="{{ Auth::check() ? route('users.profile', ['uuid' => $comment->user->id]) : route('guests.profile', ['uuid' => $comment->user->id]) }}"
                                class="flex items-center gap-2 flex-shrink-0">
                                <img src="{{ $comment->user->avatar ? asset('storage/'.$comment->user->avatar) : asset('images/dummyStock.png') }}"
                                    class="rounded-full h-10 w-10" alt="Profile picture">
                            </a>
                            <div class="flex flex-col flex-grow">
                                <div class="flex items-center">
                                    <h1 class="font-bold">{{ $comment->user->name }}</h1>
                                    <p class="text-sm ml-2 font-ubuntuMonoBold"
                                        data-timestamp="{{ $comment->created_at->timestamp }}">{{
                                        $comment->created_at->diffForHumans() }}</p>
                                </div>
                                <p id="comment-body-{{ $comment->id }}" class="break-words overflow-hidden">
                                    {{ $comment->reviewComment }}
                                </p>
                            </div>
                        </div>
                        <div class="flex space-x-2 self-start">
                            @if (Auth::id() == $comment->user_id)
                            <button class="edit-comment-btn bg-button rounded-md py-1 px-1 hover:bg-[#86efac]"
                                data-comment-id="{{ $comment->id }}">Edit</button>
                            <form class="edit-comment-form hidden" method="POST" action="/comments/{{ $comment->id }}"
                                data-comment-id="{{ $comment->id }}">
                                @csrf
                                @method('PATCH')
                                <textarea name="content" class="edit-textarea" cols="40" rows="3" minlength="10"
                                    maxlength="10000">{{ $comment->reviewComment }}</textarea>
                                <button type="submit" id="save-edit-btn-{{ $comment->id }}"
                                    class="bg-button rounded-md py-1 px-1 hover:bg-[#86efac]">Save</button>
                            </form>
                            @endif
                            @if(Auth::check() && Auth::user()->isAdmin || Auth::id() == $comment->user_id)
                            <form method="POST" action="{{ route('comment.destroy', $comment->id) }}"
                                class="delete-comment-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="delete-comment-btn bg-button rounded-md py-1 px-1 hover:bg-[#ef4444]">Delete</button>
                            </form>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div class="container text-center mt-5 p-10 my-10">
                        <p>No Comments on this product yet.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>


    </div>
</div>
{{-- TODO: Fix this script later not reading the modal on register button modal --}}
<script>
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
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

@endsection