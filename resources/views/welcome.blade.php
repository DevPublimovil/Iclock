<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- font icon -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <title>Iclock</title>
</head>
<body id="login" {{-- style="background-image: url('{{asset('images/bgclock.jpg')}}'); background-size: cover; font-family: 'Poppins', sans-serif;" --}}>
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="wave hidden md:block bottom-0 left-0 fixed h-full">
            <path id="wavegradient" d="M-5.36,-25.16 C26.24,147.53 146.44,5.44 175.22,164.30 L0.00,150.00 L-10.44,-1.47 Z" style="stroke: none;"></path>
        </svg>

        <div class="flex">
            <div class="image flex flex-wrap content-center justify-end h-screen lg:w-1/2 md:w-1/2 sm:w-0 w-0">
                <div class="w-4/6">
                    <img src="{{ asset('images/checklist.svg') }}" alt="">
                </div>
            </div>
            <div class="flex flex-wrap content-center justify-center lg:w-1/2 md:w-1/2 sm:w-full w-full">
                <div class="text-gray-700 text-center w-full">
                    <form method="POST" action="{{ route('login') }}" class="mx-auto p-2">
                        @csrf
                        <h2 class="uppercase">ICLOCK</h2>
                        <div class="input-div one">
                            <div class="i">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h5>{{ __('Correo') }}</h5>
                                <input class="input @error('email') border-red-500 @enderror" type="text" name="email" id="email" required>
                            </div>
                        </div>
                        @error('email')
                            <span class="text-red-500 text-xs italic" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="mb-8"></div>
                        <div class="input-div two">
                            <div class="i">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h5>{{ __('Password') }}</h5>
                                <input class="input @error('password') border-red-500 @enderror" type="password" name="password" id="password" required>
                            </div>
                        </div>
                        @error('password')
                            <span class="text-red-500 text-xs italic" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('¿Olvidastes tu contraseña?')}}
                            </a>
                        @endif
                        <div class="block items-center justify-center text-center">
                            <button class="w-1/2 mt-8 bg-indigo-600 hover:bg-indigo-700 h-10 rounded-lg m-2 outline-none border-none text-white uppercase" type="submit">{{ __('Iniciar sesión') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <script>
        const inputs = document.querySelectorAll('input');

        function focusFunc(){
            let parent = this.parentNode.parentNode;
            parent.classList.add('focus');
        }

        function blurFunc(){
            let parent = this.parentNode.parentNode;
            if(this.value == ""){
                parent.classList.remove('focus');
            }
        }

        inputs.forEach(input => {
            input.addEventListener('focus', focusFunc);
            input.addEventListener('blur', blurFunc);
        })
    </script>
</body>
</html>