<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    @vite('resources/css/app.css')
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
</head>
<body>
    <nav class="bg-white p-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/dashboard">
                <img src="images/retero.png" alt="Logo" class="mr-4 w-[10rem]"></img>
            </a>
            
            <div class="relative group">
                <button class="px-2 py-1 text-[20px] font-ubuntuMonoRegular">Aksesoris Komputer <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                </button>
                <div class="absolute left-0 mt-[-0.5rem] w-48 overflow-hidden z-10 invisible group-hover:visible">
                    <a href="#" class="block px-4 py-2">Headset</a>
                    <a href="#" class="block px-4 py-2">Headset lol</a>
                </div>
            </div>
            
            <div class="relative group ml-2">
                <button class="px-2 py-1 text-[20px] font-ubuntuMonoRegular">Komputer <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                </button>
                <div class="absolute left-0 mt-[-0.5rem] w-48 overflow-hidden z-10 invisible group-hover:visible">
                    <a href="#" class="block px-4 py-2">Laptop</a>
                    <a href="#" class="block px-4 py-2">PC Accessories</a>
                </div>
            </div>
        </div>
        
        <div class="relative">
            <input type="text" placeholder="Apa yang kamu cari?" class="pl-12 pr-4 py-2 border border-button rounded-md font-ubuntuoMonoRegular">
            <img src="images/search.png" alt="Search" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-6 h-6">
        </div>
    </nav>
    
</body>
</html>