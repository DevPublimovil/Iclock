<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- font icon -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" defer>

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        .loader-bg{
            position: fixed;
            z-index: 35;
            background-color: #fff;
            width: 100%;
            height: 100%;
        }
        .loader{
            border: 0 solid transparent;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            position: absolute;
            top: calc(50vh - 75px);
            left: calc(50vw - 75px)
        }
        .loader:before, .loader:after{
            content: '';
            border: 1em solid #ff5733;
            border-radius: 50%;
            width: inherit;
            height: inherit;
            position: absolute;
            top: 0;
            left: 0;
            animation: loader 2s linear infinite;
            opacity: 0;

        }
        .loader:before{
            animation-delay: .5s;
        }
        @keyframes loader{
            0%{
                transform: scale(0);
                opacity: 0;
            }
            50%{
                opacity: 1;
            }
            100%{
                transform: scale(1);
                opacity: 0;
            }
        }
    </style>
    @yield('styles')
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed sidebar-collapse">
    <div class="wrapper" id="app" >
        <header-component :avatar="'{{ Auth::user()->avatar }}'"></header-component>
        <menu-component></menu-component>
        <div class="content-wrapper">
            <div class="loader-bg">
                <div class="loader"></div>
            </div>
            <section class="content">
                @yield('content')
            </section>  
        </div>
    </div>

    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script>
        setTimeout(function() {
            $('.loader-bg').fadeToggle();
        },1500);
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js" defer></script>
    @yield('scripts')
</body>
</html>
