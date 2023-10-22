<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retero Homepage</title>
    @vite('resources/css/app.css')
</head>

<body>

    @include('navbar')
    <div>

        <div>
            <div class="flex justify-center text-capitalize font-ubuntuMonoBold">
                @if($reviews->isEmpty())
                <p>No Reviews available as of now.</p>
                @else

                @foreach($reviews as $review)
                <div class="flex mb-10">
                    <div class="w-1/3">
                        {{-- ini ntar dibedain directory buat ambil images --}}
                        <img src="{{ asset('assetImages/' . $review->image) }}" alt="Review Image" class="rounded-md">
                    </div>

                    <div class="w-2/3 pl-5">
                        <h2 class="font-bold text-xl mb-2">{{ $review->productTitle }}</h2>
                        <p>{{ $review->productDescription }}</p>
                        <div class="mt-4">
                            <span class="text-yellow-500 font-bold text-3xl">{{ $review->rating }}</span>
                            <a href="{{ route('review.show', $review->id) }}" class="text-blue-500">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>

    </div>


    <footer>

        @include('footer')
    </footer>

</body>

</html>