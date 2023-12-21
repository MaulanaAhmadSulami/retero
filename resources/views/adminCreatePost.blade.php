@extends('layouts.app')
@section('title', 'Retero - Create Post')
@push('styles')
    <style>
         #shadow-btn {
        box-shadow: 0.5rem 0.5rem 0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    #shadow-btn:hover {
        transform: translate3d(0.25rem, 0.25rem, -0.25rem);
        box-shadow: none;
    }
    </style>
@endpush

@section('content')
<div class="flex min-h-screen">
    <x-admin-sidebar />

    <div class="container flex justify-between mx-auto">
    <div class="flex-grow p-4 border-t">
        <h2 class="text-[25px] font-publicPixel text-center mt-4">
            Create a new post
            {{-- <hr class="border-2 mt-2"> --}}
        </h2>
        @if (session('message'))
        <div class="bg-[#4ade80] text-white p-4 mb-4 text-center font-publicPixel mt-10">
            {{ session('message') }}
        </div>
        @endif

        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-between items-center mb-4 mt-10">
                    <div class="w-64">
                        <label for="productTitle" class="font-ubuntuMonoBold text-[23px]">Product Title</label>
                        <input class="w-full border rounded mt-4 py-2" type="text" name="productTitle" id="productTitle" required>
                    </div>
                    <div class="w-64">
                        <label for="category" class="font-ubuntuMonoBold text-[23px]">Category</label>
                        <select class="w-full border mt-4 rounded py-2" name="category" id="category" onchange="updateProductTypes()"
                            required>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-64">
                        <label for="productType" class="font-ubuntuMonoBold text-[23px]">Type</label>
                        <select class="w-full border rounded mt-4 py-2" name="productType" id="productType">
                            {{-- Type disini --}}
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="productDescription" class="font-ubuntuMonoBold text-[23px]">Product Description</label>
                    <textarea class="w-full h-48 border rounded mt-4" name="productDescription" id="productDescription" cols="30"
                        rows="10" required minlength="10" maxlength="10000"></textarea>
                </div>

                <div class="flex w-full justify-between mb-4 gap-8">
                    <div id="advantages" class="w-[48%]">
                        <div class="flex items-center gap-2">
                            <label for="advantage" class="font-ubuntuMonoBold text-[23px]">Advantages</label>
                            <button type="button" id="addAdvantageButton" class="bg-button rounded-lg w-8 font-bold text-xl font-ubuntuMonoBold mb-2 mt-2">+</button>
                        </div>
                        <div>
                            <input type="text" id="addAdvantage" name="advantages[]" class="w-full mb-2 mt-2 py-2 rounded border" required>
                        </div>
                    </div>
                    <div class="border-r-[1px] border-[gray] opacity-35">

                    </div>
                    <div id="disadvantages" class="w-[48%]">
                        <div class="flex items-center gap-2">
                            <label for="disadvantage" class="font-ubuntuMonoBold text-[23px]">Disadvantages</label>
                            <button type="button" id="addDisadvantageButton" class="bg-button rounded-lg w-8 font-bold text-xl font-ubuntuMonoBold mb-2 mt-2">+</button>
                        </div>
                        <div>
                            <input type="text" id="addDisadvantage" name="disadvantages[]" class="w-full mb-2 mt-2 py-2 border rounded" required>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <label for="image" class="font-ubuntuMonoBold text-[23px]">Image</label>
                    <input class="w-full" type="file" name="image" id="image" required>
                </div>

                <div>
                    <button id="shadow-btn" type="submit" class="py-2 px-4 bg-button rounded-lg text-[px] font-ubuntuMonoBold">Create the post</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<script>
    var productTypesByCategory = {
    '1': ['Laptop', 'VGA', 'Monitor'],
    '2': ['Headset', 'Keyboard', 'Mouse']
    };

    function updateProductTypes() {
    var category = document.getElementById('category').value;
    var productTypeSelect = document.getElementById('productType');

    productTypeSelect.innerHTML = '';

    var productTypes = productTypesByCategory[category] || [];

    productTypes.forEach(productType => {
    var option = document.createElement('option');
    option.value = productType;
    option.textContent = productType;
    productTypeSelect.appendChild(option);
    });
    }

    function createRemoveButton() {
    let removeButton = document.createElement('button');
    removeButton.type = 'button';
    removeButton.textContent = 'Remove';
    removeButton.classList.add('py-[2px]', 'px-2', 'rounded-lg', 'w-[20%]', 'text-[#000]', 'ml-[2%]', 'font-ubuntuMonoBold', 'bg-button');
    removeButton.onclick = function() {
        this.parentElement.remove();
    };
    return removeButton;
    }

    function addAdvantage(){
        let container = document.getElementById("advantages");
        let current_advantages = container.querySelectorAll('input[name="advantages[]"]').length;

        if (current_advantages >= 5){
            alert("You can only add up to 5 advantages!");
            return;
        }

        let inputContainer = document.createElement('div');
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'advantages[]';
        input.classList.add('w-[78%]', 'mb-2', 'border', 'mt-2', 'py-2', 'rounded');

        let removeButton = createRemoveButton();

        inputContainer.appendChild(input);
        inputContainer.appendChild(removeButton);

        container.appendChild(inputContainer);



    }

    function addDisadvantage(){
        let container = document.getElementById("disadvantages");
        let current_disadvantages = container.querySelectorAll('input[name="disadvantages[]"]').length;


        if(current_disadvantages >= 5){
            alert("You can only add up to 5 disadvantages!");
         return;
        }

        let inputContainer = document.createElement('div');
        let input = document.createElement('input');
        input.type = 'text';
        input.name = 'disadvantages[]';
        input.classList.add('w-[78%]', 'mb-2', 'border', 'mt-2', 'py-2', 'rounded');

        let removeButton = createRemoveButton();

        inputContainer.appendChild(input);
        inputContainer.appendChild(removeButton);

        container.appendChild(inputContainer);

    }

    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('addAdvantageButton').addEventListener('click', addAdvantage);
        document.getElementById('addDisadvantageButton').addEventListener('click', addDisadvantage);
    })
</script>
@endsection
