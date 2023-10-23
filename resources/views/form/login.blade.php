<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retero</title>
    @vite('resources/css/app.css')

    <style>
        #login-btn {
            box-shadow: 0.25rem 0.25rem 0;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        #login-btn:hover {
            transform: translate3d(0.25rem, 0.25rem, -0.25rem);
            box-shadow: none;
        }
    </style>
</head>

<body class="flex items-center justify-center h-screen">
    <div class="p-6 rounded-lg shadow-md w-96">
        <img src="images/retero.png" alt="Retero">

        <h1 class="text-2xl text-center  font-semibold font-publicPixel text-headline  mb-8">
            <span class="py-2 underline">
                Login
            </span>
        </h1>


        <form  method="" action="{{ route('login') }}">
            @csrf
            <div class="mb-8">
                <input type="text" placeholder="Email" class="bg-form border-b border-b w-full py-2 px-3" value="{{ old('email') }}">
            </div>

            <div class="mb-8">
                <input type="password" placeholder="Password" class="bg-form border-b border-b w-full py-2 px-3">
            </div>

            <div class="mb-8 flex items-center">
                <input type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me?</label>
            </div>

            <button id="login-btn" type="submit"
                class="bg-button border 1px py-2 px-4 rounded w-full font-bold font-publicPixel text-[13px]">
                <p class="hover:text-[#FFFFFF]">Login</p>
            </button>
            <div class="text-center">
                <span class="text-xs">Doesn't have an account yet? <a href="{{'register'}}"
                        class="underline text-button font-bold hover:text-[#000000]">Register</a></span>
            </div>

        </form>
    </div>
</body>

</html>