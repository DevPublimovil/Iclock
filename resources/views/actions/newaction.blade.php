@extends('layouts.app')

@section('content')
    <div class="container py-2">
      <div class="w-4/5 shadow rounded bg-white p-2 mx-auto">
        <form class="w-full" action="{{ route('acciones.store') }}" method="POST">
          @csrf
            <div class="flex flex-wrap -mx-3 mb-6 justify-center items-center">
              <h1 class="text-center text-2xl font-bold">DATOS GENERALES</h1>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                  Sueldo
                </label>
                <input name="salary" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-sueldo" type="number" placeholder="0.00" step="any">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6 justify-center items-center">
              <h1 class="text-center text-2xl font-bold">ACCIONES DE PERSONAL</h1>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-4">
              @foreach ($actions as $key => $accion)
              <div>
                <label class="inline-flex items-center cursor-pointer">
                  <input type="checkbox" name="items[]" class="form-checkbox" value="{{$accion}}">
                  <span class="ml-2">{{$accion}}</span>
                </label>
              </div>
              @endforeach
            </div>

            <div class="flex flex-wrap -mx-3 my-4">
              <div class="w-full px-3">
                <label class="block">
                  <span class="text-gray-700">Otro</span>
                  <textarea class="form-textarea mt-1 block w-full" rows="3" name="other_action"></textarea>
                </label>
              </div>
            </div>

            <hr class="bg-gray-700 mb-6">

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block">
                  <span class="text-gray-700">Desripción de la acción</span>
                  <textarea class="form-textarea mt-1 block w-full" rows="3" name="description"></textarea>
                </label>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3 text-right">
                  <a href="" class="button button-outline-two">Cancelar</a>
                  <button type="submit" class="button button-one">Aceptar</button>
              </div>
            </div>
        </form>
      </div>
    </div>
@endsection