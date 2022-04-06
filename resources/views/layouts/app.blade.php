<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('/storage/images/avatar-1.png')}}">
    <style>
        #bars-btn, #close-btn
        {
            font-size: 25px;
            margin: 10px;
            color: black;
            display: none;
        }
        .navbar .fa
        {
            color: orange;
            font-weight: bold;
            font-size: 14px;
            font-style: normal;
            padding: 7px;
        }
        .navbar .navbar-brand
        {
            color: orange !important;
        }
        .navbar .dropdown .dropdown-menu-right .dropdown-item
        {
            color: orange;
        }
        .navbar .dropdown .dropdown-menu-right .dropdown-item:hover
        {
            color: black;
            background: orange;
            font-weight: bold;
            margin-top: 5px;
            width: auto;
        }
        .navbar-nav .btn-outline-success
        {
            background: orange !important;
            color: white !important;
            border: none !important;
        }
        .dashboard-left ul li .nav-link
        {
            text-align: left;
            margin-left: 10px;
            padding: 4px 0;
            color: orange;
            font-size: 15px;
            font-weight: bold;
        }
        .dashboard-left ul li .active
        {
            color: orangered;
        }
        .footer
        {
            margin-top: 0;
            background: black;
            color: white;
            width: 100%;
        }
        .footer h1
        {
            font-size: 15px;
            margin: 25px 0;
        }

        .footer p
        {
            font-size: 12px;
        }
        .copyright
        {
            margin-bottom: 0 !important;
            text-align: center;
            font-size: 15px;
            padding-bottom: 20px;
        }
        .footer hr
        {
            margin-top: 10px;
            background: #ccc;
        }
        .footer .row .fa
        {
            padding-right: 20px;
            font-size: 15px;
        }
        .cart-with-numbers
        {
            font-size: 10px;
            font-weight:bold;
            text-align:center;
            color:white;
            background: limegreen;
            border-radius:50%;
            padding: 4px;
            position:relative;
            left:-8px;
            top:-10px;
            opacity:0.9;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('template.navbar')
        <main class="py-4">
            @include('template.alerts')
            @yield('content')
        </main>
        @include('template.footer')
    </div>
</body>
</html>
