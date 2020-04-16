@extends('layouts.app')
@section('styles')
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }
        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
  </style>
@endsection
@section('content')
    @if (session('mensaje'))
    <notificacion-component :mensaje="'{{ session('mensaje') }}'"></notificacion-component>
    @endif
    
    <marcacion-component :user="{{$user}}"></marcacion-component>
@endsection