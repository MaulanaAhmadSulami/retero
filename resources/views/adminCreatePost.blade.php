@extends('layouts.app')
@section('title', 'Retero - Create Post')
@push('styles')

@endpush

@section('content')

<div class="flex min-h-screen">
    <x-admin-sidebar />

    <div class="flex-grow p-4">
        <h2 class="text-[25px] font-publicPixel text-center">
            Create a new post
            <hr class="border-2 mt-2">
        </h2>
        @if (session('message'))
        <div class="bg-[#4ade80] text-white p-4 mb-4 text-center font-publicPixel mt-10">
            {{ session('message') }}
        </div>
        @endif

        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 mt-10">
                    <label for="productTitle" class="font-ubuntuMonoBold text-[23px]">Product Title</label>
                    <input class="w-full border rounded mt-4" type="text" name="productTitle" id="productTitle" required>
                </div>

                <div class="mb-4">
                    <label for="productDescription" class="font-ubuntuMonoBold text-[23px]">Product Description</label>
                    <textarea class="w-full h-32 border rounded mt-4" name="productDescription" id="productDescription" cols="30"
                        rows="10" required minlength="10" maxlength="10000"></textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="font-ubuntuMonoBold text-[23px]">Image</label>
                    <input class="w-full" type="file" name="image" id="image" required>
                </div>

                <div class="mb-4">
                    <label for="category" class="font-ubuntuMonoBold text-[23px]">Category</label>
                    <select class="w-full border mt-2 rounded" name="category" id="category" onchange="updateProductTypes()"
                        required>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="productType" class="font-ubuntuMonoBold text-[23px]">Type</label>
                    <select class="w-full border rounded mt-2" name="productType" id="productType">
                        {{-- Type disini --}}
                    </select>
                </div>

                <div class="mb-10" id="advantages">
                    <label for="advantage" class="font-ubuntuMonoBold text-[23px]">Advantages</label>
                    <div>
                        <button type="button" id="addAdvantageButton" class="py-1 px-2 bg-button rounded-lg font-ubuntuMonoBold mb-2 mt-2">Add More
                            Advantage</button>
                    </div>
                    <div>
                        <input type="text" id="addAdvantage" name="advantages[]" class="w-full mb-2 rounded border"
                            required>
                    </div>
                </div>

                <div class="mb-10" id="disadvantages">
                    <label for="disadvantage" class="font-ubuntuMonoBold text-[23px]">Disadvantages</label>
                    <div>
                        <button type="button" id="addDisadvantageButton" class="py-1 px-2 bg-button rounded-lg font-ubuntuMonoBold mb-2 mt-2">Add more
                            disadvantages</button>
                    </div>
                    <div>
                        <input type="text" id="addDisadvantage" name="disadvantages[]"
                            class="w-full mb-2 mt-2 border rounded" required>
                    </div>
                </div>

                <div class="mb-4">
                    <button type="submit" class="py-1 px-2 bg-button rounded-lg font-ubuntuMonoBold mb-2 mt-2">Create the post</button>
                </div>

            </form>
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
    removeButton.classList.add('py-1', 'px-2', 'rounded-lg', 'text-[#000]', 'ml-2', 'font-ubuntuMonoBold', 'bg-button');
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
        input.classList.add('w-full', 'mb-2', 'border', 'mt-2', 'rounded'   );
    
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
        input.classList.add('w-full', 'mb-2', 'border', 'mt-2', 'rounded');
    
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