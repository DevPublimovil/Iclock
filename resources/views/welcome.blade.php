<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <title>Iclock</title>
</head>
<body id="login" style="background-image: url('{{asset('images/bgclock.jpg')}}'); background-size: cover; font-family: 'Poppins', sans-serif;">
    <div class="flex items-center justify-center h-screen">
        <div class="xl:w-2/6 md:w-2/4 bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4">
            <div class="text-center text-5xl text-teal-800 font-bold py-4">Login</div>
            <form  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="emal">
                        {{ __('Correo:') }}
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" id="email" type="email" placeholder="Correo" required>
                    @error('email')
                        <span class="text-red-500 text-xs italic" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  @error('password') border-red-500 @enderror" name="password" id="password" type="password" placeholder="Password" required>
                    @error('password')
                        <span class="text-red-500 text-xs italic" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <div class="md:w-1/3"></div>
                    <label class="md:w-2/3 block text-gray-500 font-bold">
                      <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <span class="text-sm">
                        {{ __('Recuerdame') }}
                      </span>
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-teal-800 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        {{ __('Iniciar sesión') }}
                    </button>
                    @if (Route::has('password.request'))
                        <a class="inline-block align-baseline font-bold text-sm pl-1 text-teal-800 hover:text-teal-900" href="{{ route('password.request') }}">
                            {{ __('¿Olvidastes tu contraseña?')}}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>
</html>