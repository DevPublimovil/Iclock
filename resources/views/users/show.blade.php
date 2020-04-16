@extends('layouts.app')
@section('content')
<div class="container w-3/5 mx-auto px-6 py-6">
  <div class="flex justify-between rounded-lg p-2 bg-white shadow-lg">
    <div class="w-1/4 mt-4">
      <img class="rounded-full h-24 w-24 flex items-center justify-center mx-auto" src="{{ asset('/storage/'.$user->avatar) }}" alt="">
      <label class="h-10 flex mt-2 flex-col items-center rounded-lg shadow-sm bg-white px-1 py-1 uppercase button button-outline-one cursor-pointer">
        <span class="mt-2 text-xs leading-normal">Selecciona una foto</span>
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="hidden" id="form-send-photo" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="_method" value="PUT">
          <input type="file" name="avatar" id="avatar" onchange="changeProfile()">
        </form>
      </label>
    </div>
    <div class="w-3/4 pl-4">
      <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="mt-4 mb-3">
          <label for="name">Nombre:</label>
          <input class="shadow appearance-none text-xs border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" id="name" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
          <label for="email">Correo:</label>
          <input class="shadow appearance-none text-xs border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="email" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
          <label for="password">Contraseña:</label>
          <input class="shadow appearance-none text-xs border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" minlength="8" name="password" id="password">
          <span class="text-gray-500 text-xs italic">* Dejarlo vacío para mantener la misma contraseña</span>
        </div>
        <div class="mb-3">
          <label for="firma"><a href="{{ route('users.getfirma', $user->id) }}" class="change text-indigo-500 cursor-pointer underline hover:text-indigo-900">cambiar firma</a></label>
          <div class="w-full">
            <img class="rounded-lg w-1/2 h-auto" id="firm-image" src="{{ asset('images/firma.png') }}" alt="">
          </div>
        </div>
        <div class="flex justify-end mb-3 text-xs">
          <a href="{{ route('home') }}" class="button button-outline-two">
              Cancelar
          </a>
          <button type="submit" class="button button-one">
            Aceptar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
    <script>
      function changeProfile() {
        $("#form-send-photo").submit();
        $("#avatar").val("");
      }
    </script>
@endsection