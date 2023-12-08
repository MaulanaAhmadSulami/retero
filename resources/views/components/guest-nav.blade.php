<div class="container-fluid">
    <nav class="bg-white p-4 flex justify-between items-center ">
        <div class="flex items-center">
         <a href="/">
            <img src="{{ asset('images/retero.png') }}" alt="Logo" class="mr-4 w-[150px]"></img></a>
            <div class="relative group font-ubuntuMonoRegular">
                <button class="px-2 py-1 text-[20px]">Aksesoris Komputer
                    <iconify-icon icon="ep:arrow-down-bold" class="text-sm"></iconify-icon>
                </button>
                <div
                    class="absolute left-0 mt-[-0.5rem] w-48 overflow-hidden z-10 invisible group-hover:visible group-hover:duration-200 border bg-[#000000]">
                    <a href="{{ route('homepage.filteredProduct', ['category' => 'headset']) }}"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">Headset</a>
                    <hr style="color: white" />
                    <a href="{{ route('homepage.filteredProduct', ['category' => 'keyboard']) }}"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">Keyboard</a>
                    <hr style="color: white" />
                    <a href="{{ route('homepage.filteredProduct', ['category' => 'mouse']) }}"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">Mouse</a>
                </div>
            </div>

            <div class="relative group ml-2 font-ubuntuMonoRegular">
                <button class="px-2 py-1 text-[20px]">Komputer
                    <iconify-icon icon="ep:arrow-down-bold" class="text-sm"></iconify-icon>
                </button>
                <div
                    class="absolute left-0 mt-[-0.5rem] w-48 overflow-hidden z-10 invisible group-hover:visible group-hover:duration-200 border bg-[#000000]">
                    <a href="{{ route('homepage.filteredProduct', ['category' => 'laptop']) }}"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">Laptop</a>
                    <hr />
                    <hr style="color: white" />
                    <a href="{{ route('homepage.filteredProduct', ['category' => 'vga']) }}"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">VGA</a>
                    <hr style="color: white" />
                    <a href="{{ route('homepage.filteredProduct', ['category' => 'monitor']) }}"
                        class="block px-4 py-2 mt-2 font-ubuntuMonoBold text-[#FFFFFF] text-[15px] hover:bg-button">Monitor</a>
                </div>
            </div>
        </div>

        <div class="px-1 ml-auto relative">

            <div class="absolute left-1 top-1/2 transform -translate-y-1/2 w-10 h-10 flex items-center justify-center">
                <img src="{{ asset('images/search.png') }}" alt="Search" class="w-6 h-6">
            </div>
            <input type="text" placeholder="Apa yang kamu cari?"
                class="pl-12 pr-4 py-2 border border-button font-ubuntuoMonoRegular">
        </div>
    </nav>
</div>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>