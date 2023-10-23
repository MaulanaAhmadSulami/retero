<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
    <style>
        #register-btn {
            box-shadow: 0.25rem 0.25rem 0;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        #register-btn:hover{
            transform: translate3d(0.25rem, 0.25rem, -0.25rem);
            box-shadow: 0 0 0 ;
        }
    </style>
</head>

<body class="flex items-center justify-center h-screen">
    <div class="p-6 rounded-lg shadow-md w-96">
      <div>
            <img src="images/retero.png" alt="Retero">
        </div>
        <h1 class="text-2xl text-center font-publicPixel text-headline font-semibold mb-8"><span class="py-2 underline">Sign
                Up</span>
        </h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-8">
                <input type="text" placeholder="Username" name="username" id="username" value="{{ old('username') }}"
                    class="bg-form border-b w-full py-2 px-3">
            </div>

            <div class="mb-8">
                <input type="email" placeholder="Email" name="email" id="email" value="{{ old('email') }}" class="bg-form border-b w-full py-2 px-3">
            </div>

            <div class="mb-8">
                <input type="password" placeholder="Password" name="password" id="password"
                    class="bg-form border-b  w-full py-2 px-3">
            </div>

            <div class="mb-8">
                <input type="password" placeholder="Confirm Password" name="password_confirmation"
                    id="password_confirmation" class="bg-form border-b  w-full py-2 px-3">
            </div>

            <button id="register-btn" type="submit"
                class="bg-button border 1px py-2 px-4 rounded w-full font-bold font-publicPixel text-[13px]">
                <p class="hover:text-[#FFFFFF]">Register</p>
            </button>

            <div class="text-center">
                <span class="text-xs">Already have an account? <a href="{{'login'}}"
                        class="underline text-button font-bold hover:text-[#000000]">Login</a></span>
            </div>
        </form>
    </div>
</body>

</html>