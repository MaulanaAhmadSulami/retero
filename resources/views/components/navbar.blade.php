<div class="container-fluid">
    <nav class="bg-white p-4 flex justify-between items-center ">
        <div class="flex items-center">
            <a href="login">
                <img src="{{ asset('images/retero.png') }}" alt="Logo" class="mr-4 w-[150px]"></img>
            </a>

            <div class="relative group font-ubuntuMonoRegular">
                <button class="px-2 py-1 text-[20px]">Aksesoris Komputer
                    <iconify-icon icon="ep:arrow-down-bold" class="text-sm"></iconify-icon>
                </button>
                <div
                    class="absolute left-0 mt-[-0.5rem] w-48 overflow-hidden z-10 invisible group-hover:visible group-hover:duration-200 border bg-[#000000]">
                    <a href="#"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button border-b">Headset</a>
                    <a href="#"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button border-b">Headset
                        lol</a>
                    <a href="#"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">Bluetooth</a>
                </div>
            </div>

            <div class="relative group ml-2 font-ubuntuMonoRegular">
                <button class="px-2 py-1 text-[20px]">Komputer
                    <iconify-icon icon="ep:arrow-down-bold" class="text-sm"></iconify-icon>
                </button>
                <div
                    class="absolute left-0 mt-[-0.5rem] w-48 overflow-hidden z-10 invisible group-hover:visible group-hover:duration-200 border bg-[#000000]">
                    <a href="#"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button border-b">Laptop</a>
                    <a href="#"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button border-b">PC
                        Accessories</a>
                    <a href="#"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">PC
                        Accessories</a>
                </div>
            </div>
        </div>

        <div class="px-1 ml-auto relative">

            <div
                class="absolute left-1 top-1/2 transform -translate-y-1/2 w-10 h-10 flex items-center justify-center">
                <img src="images/search.png" alt="Search" class="w-6 h-6">
            </div>

            <input type="text" placeholder="Apa yang kamu cari?"
                class="pl-12 pr-4 py-2 border border-button font-ubuntuoMonoRegular">

        </div>

        <li class="flex group mr-4 px-4 font-ubuntuMonoRegular">
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                class="flex items-center text-gray-white hover:text-gray-00 md:mr-0 " type="button">
                <span class="sr-only">Open user menu</span>
                <span class="gap-4">
                    <p class="text-xl font-semibold">{{ Auth::user()->name }}</p>
                </span>
                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownAvatarName"
                class="z-10 hidden bg-[#000000] shadow w-44">
                <ul class="py-2"
                    aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <div class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button border-b">
                        {{ Auth::user()->email  }}
                    </div>
                    {{-- <li>
                        <a href="#" class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button border-b">Profile</a>
                    </li> --}}
                </ul>
                <div>
                    <a href="{{ route('auth.logout')  }}"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">Sign out</a>
                </div>
            </div>

        </li>
    </nav>
</div>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>