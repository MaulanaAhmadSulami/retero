<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>
    @include('navbar')
    <div>
        <div>
            <h2 class="mt-24 mb-10 text-center font-bold text-3xl bg-yellow-400">Ulasan Lainnya</h2>
            <h2 class="mb-8 text-center font-bold text-xl bg-yellow-400">Bluetooth</h2>
            <div class="container mx-auto flex flex-row gap-4 justify-center">
                <!-- Card 1 -->
                <div class="rounded border shadow-lg overflow-hidden mr-4 p-4 flex-col justify-center items-center">
                    <img src="/images/dummyStock.png" alt="GAMBAR GAADA" class="w-32 h-32 object-cover">
                    <div class="mt-2 font-bold text-lg text-center">Image Title 1</div>
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Baca Ulasan</button>
                </div>

                <!-- Card 2 -->
                <div class="rounded border shadow-lg overflow-hidden mr-4 p-4 flex-col justify-center items-center mx-4">
                    <img src="/images/dummyStock.png" alt="GAMBAR GAADA" class="w-32 h-32 object-cover">
                    <div class="mt-2 font-bold text-lg text-center">Image Title 2</div>
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Baca Ulasan</button>
                </div>

                <!-- Card 3 -->
                <div class="rounded border shadow-lg overflow-hidden mr-4 p-4 flex-col justify-center items-center mx-4">
                    <img src="/images/dummyStock.png" alt="GAMBAR GAADA" class="w-32 h-32 object-cover">
                    <div class="mt-2 font-bold text-lg text-center">Image Title 3</div>
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Baca Ulasan</button>
                </div>

                <!-- Card 4 -->
                <div class="rounded border shadow-lg overflow-hidden mr-4 p-4 flex-col justify-center items-center">
                    <img src="/images/dummyStock.png" alt="GAMBAR GAADA" class="w-32 h-32 object-cover">
                    <div class="mt-2 font-bold text-lg text-center">Image Title 4</div>
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Baca Ulasan</button>
                </div>
            </div>
        </div>

        <div>
            <h2 class="mb-8 text-center font-bold text-xl bg-yellow-400">Mouse</h2>
            <div class="container mx-auto flex flex-row gap-4 justify-center">
                <!-- Card 1 -->
                <div class="rounded border shadow-lg overflow-hidden mr-4 p-4 flex-col justify-center items-center">
                    <img src="/images/dummyStock.png" alt="GAMBAR GAADA" class="w-32 h-32 object-cover">
                    <div class="mt-2 font-bold text-lg text-center">Image Title 1</div>
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Baca Ulasan</button>
                </div>

                <!-- Card 2 -->
                <div class="rounded border shadow-lg overflow-hidden mr-4 p-4 flex-col justify-center items-center mx-4">
                    <img src="/images/dummyStock.png" alt="GAMBAR GAADA" class="w-32 h-32 object-cover">
                    <div class="mt-2 font-bold text-lg text-center">Image Title 2</div>
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Baca Ulasan</button>
                </div>

                <!-- Card 3 -->
                <div class="rounded border shadow-lg overflow-hidden mr-4 p-4 flex-col justify-center items-center mx-4">
                    <img src="/images/dummyStock.png" alt="GAMBAR GAADA" class="w-32 h-32 object-cover">
                    <div class="mt-2 font-bold text-lg text-center">Image Title 3</div>
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Baca Ulasan</button>
                </div>

                <!-- Card 4 -->
                <div class="rounded border shadow-lg overflow-hidden mr-4 p-4 flex-col justify-center items-center">
                    <img src="/images/dummyStock.png" alt="GAMBAR GAADA" class="w-32 h-32 object-cover">
                    <div class="mt-2 font-bold text-lg text-center">Image Title 4</div>
                    <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Baca Ulasan</button>
                </div>
            </div>
        </div>
    </div>
    {{-- <footer>

        @include('footer')
    </footer> --}}
</body>
</html>
