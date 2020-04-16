@extends('layouts.app')

@section('styles')
    <style>
        .timeline:before{
            border-radius: 0.25rem;
            background: #dee2e6;
            bottom: 0;
            content: '';
            left: 31px;
            margin: 0;
            position: absolute;
            top: 0;
            width: 4px;
        }

        .timeline > div{
            margin-bottom: 15px;
            margin-right: 10px;
            position: relative;
        }
        .timeline > div::before, .timeline > div::after {
            content: "";
            display: table;
        }

        .timeline > div > .fa,
        .timeline > div > .fas,
        .timeline > div > .far,
        .timeline > div > .fab,
        .timeline > div > .glyphicon,
        .timeline > div > .ion {
            background: #adb5bd;
            border-radius: 50%;
            font-size: 15px;
            height: 30px;
            left: 18px;
            line-height: 30px;
            position: absolute;
            text-align: center;
            top: 0;
            width: 30px;
        }
    </style>
@endsection

@section('content')
    <historico-component></historico-component>
@endsection