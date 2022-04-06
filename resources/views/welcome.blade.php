<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>


    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('/storage/images/avatar-1.png')}}">
    <style type="text/css">

        .header
        {
            height: 75vh !important;
        }

        .side-menu
        {
            width: 15%;
            font-size: 14px;
            float: left;
            z-index: 2;
            height: 75%;
        }
        .side-menu ul
        {
            margin-left: -20px;
        }

        .side-menu ul li
        {
            list-style-type: none;
            font-weight: bold;
            margin-top: 10px;
            cursor: pointer;

        }
        .side-menu ul li
        {
            color: #f2b066 !important;

        }
        .side-menu ul li ul li
        {
            color: #f2b066 !important;
        }
        .side-menu ul li:hover
        {
            color: rgb(0, 119, 190) !important;
        }
        .side-menu ul li ul
        {
            display: none;
            z-index: 5;
            top: 77px;
        }
        .side-menu ul li:hover ul
        {
            display: block;
            height: auto;
            margin-left: 13.5%;
            padding: 0 100px 10px 10px;
            position: fixed;
            background-color: rgba(242,176,102,0.2);
            box-shadow: 1px 1px 4px 1px rgba(255,255,255,0.5);
        }
        .angle-right
        {
            margin-top: 4px;
            margin-right: 8px;
            float: right;
            display: inline-block;
            color: rgb(0, 119, 190) !important;
        }
        #bars-btn, #close-btn
        {
            font-size: 25px;
            margin: 10px;
            color: black;
            display: none;
        }
        @media only screen and (max-width: 980px) {
            .side-menu
            {
                width: 34%;
                z-index: 20;
                top: 80px;
                position: fixed;
                font-size: 12px;
                display: none;
                background: rgba(0, 0, 0, 0.4);
            }
            .side-menu u li ul
            {
                top: 75px;
            }
            .side-menu ul li:hover ul
            {
                margin-left: 30%;
            }
            #bars-btn
            {
                display: block;
                float: left;
                width: 34%;
            }

        }

        .slider
        {
            width: 85%;
            margin-left: 15%;
            height: 75% !important;
            padding: 0 0;
        }
        @media only screen and (max-width: 980px) {
            .slider
            {
                width: 100%;
                margin-left: 0;
            }
        }


        .title-box
        {
            background: rgba(0, 119, 190, 0.8);
            color: #fff;
            width: 210px;
            padding: 4px 10px;
            height: 40px;
            margin-bottom: 30px;
            display: flex;
        }
        .title-box h2
        {
            font-size: 24px;
        }
        .title-box::after
        {
            content: '';
            border-top: 40px solid #f2b066;
            border-right: 50px solid transparent;
            position: absolute;
            display: flex;
            margin-top: -4px;
            margin-left: 200px;
        }
        .product-top img
        {
            width: 100%;
            height: 200px;
        }
        .overlay-right
        {
            display: block;
            opacity: 0;
            position: absolute;
            top: 10%;
            margin-left: 0;
            width: 70px;
        }
        .overlay-right .fa
        {
            cursor: pointer;
            background-color: white;
            height: 35px;
            width: 35px;
            font-size: 15px;
            padding: 7px;
            margin-top: 5%;
            margin-bottom: 5%;
            color: orangered;
        }
        .overlay-right .btn-secondary
        {
            background: none !important;
            border: none !important;
            box-shadow: none !important;
        }
        .product-top:hover .overlay-right
        {
            opacity: 1;
            margin-left: 5%;
            transition: 0.5s;
        }

        .product-bottom .fa
        {
            color: orangered;
            font-size: 10px;
        }

        .product-bottom h3
        {
            font-size: 20px;
            font-weight: bold;
        }
        .product-bottom h5
        {
            font-size: 15px;
            padding-bottom: 10px;
        }
        .new-products
        {
            margin: 50px 0;
        }

        .website
        {
            margin: 60px 0;
        }

        .website img
        {
            width: 20%;
            border-radius: 50%;
        }
        .feature-text
        {
            margin-top: -5px;
            float: right;
            width: 80%;
            padding-left: 20px;
        }
        .feature-box
        {
            padding-top: 20px;
        }
        .footer
        {
            margin-top: 50px;
            background: black;
            color: white;
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
            margin-bottom: -80%;
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
        .single-product
        {
            margin-top: 70px;
        }

        .new-arrivals
        {
            background: green;
            width: 50px;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            margin-top: 20px;
        }
        .col-md-7 h2
        {
            color: #555;
        }
        .single-product .fa
        {
            color: orangered;
        }
        .single-product .price
        {
            color: orange;
            font-size: 20px;
            font-weight: bold;
            padding-top: 20px;
        }
        .single-product input
        {
            border: 1px solid #ccc;
            font-weight: bold;
            height: 33px;
            text-align: center;
            width: 40px;
        }
        .single-product .btn-primary
        {
            background: orange !important;
            color: #fff;
            font-size: 15px;
            margin-left: 20px;
            border: none !important;
            box-shadow: none !important;
        }
        .product-description h6
        {
            margin-top: 50px;
            color: orange;
        }
        .product-description p
        {
            margin-top: 30px;
        }

        .product-description hr
        {
            margin-bottom: 50px;
        }

        .navbar .fa
        {
            color: #f2b066;
            font-weight: bold;
            font-size: 14px;
            font-style: normal;
            padding: 7px;
        }
        .navbar .navbar-brand
        {
            color: #f2b066 !important;
            font-family: Algerian;
        }
        .navbar .dropdown .dropdown-menu-right .dropdown-item
        {
            color: #f2b066;
        }
        .navbar .dropdown .dropdown-menu-right .dropdown-item:hover
        {
            color: black;
            background: #f2b066;
            font-weight: bold;
            margin-top: 5px;
            width: auto;
        }
        .navbar-nav .btn-outline-success
        {
            background: #f2b066 !important;
            color: white !important;
            border: none !important;
        }
        .slider .carousel .carousel-inner .carousel-item img
        {
            width: 100%;
            background-position: 50% 50% !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
        }
        .cart-with-numbers
        {
            font-size: 10px;
            font-weight:bold;
            text-align:center;
            color: white;
            background: orange;
            border-radius:50%;
            padding: 4px;
            position:relative;
            left:-8px;
            top:-10px;
            opacity:0.9;
            font-family: ubuntu;
        }
        .carousel-caption {
            right: 0;
            left: 75%;
            top: 0;
            bottom: 0;
            text-align: center;
            padding: 10px;
            background-color: #F4A460;
        }
        .carousel-control-prev, .carousel-control-next
        {
            top: 75%;
            color: red !important;
        }
        .carousel-control-next
        {
            right: 75%;
        }
        .slider .carousel .carousel-inner .carousel-item .carousel-caption .btn-primary
        {
            font-size: 15px;
        }
        body
        {
            background-color: rgba(0, 119, 190, 0.  1);
        }
        .navbar
        {
          background-color: #afd6ed;
        }
        .featured-category
        {
            margin: 50px 0;
        }

        .featured-category img
        {
            width: 100%;
            padding: 20px 0;
            transition: 1s;
            cursor: pointer;
            height: 200px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }

        .featured-category img:hover
        {
            transform: scale(1.1);
        }
        .featured-category .desc {
            text-align: center !important;
            color:  rgb(0, 119, 190) !important;
            background: #f2b066 !important;
            padding: 5px;
            font-size: 18px;
            font-family: ubuntu;
            border-radius: 4px;
        }

        .col-xl-2
        {
            margin: 10px 0;
        }
        .col-xl-2 img
        {
            width: 100%;
            padding: 20px 0;
            transition: 1s;
            cursor: pointer;
            height: 200px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container-fluid">
        <i id="bars-btn" onclick="openmenu()">@fas('bars')</i>
        <i id="close-btn" onclick="closemenu()">@fas('times')</i>
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">@fas('search')</button>
                </form>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item dropdown">
                        <a id="account-dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgb(218, 165, 32) !important;" v-pre>
                            <i class="fa">@fas('user') Login</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="account-dropdown">
                                    <a class="dropdown-item text-center" href="{{ route('login') }}">login</a>
                            <p  class="text-center"><b>or</b></p>
                                    <div class="dropdown-divider"></div>
                                        @if (Route::has('register'))
                                    <a class="dropdown-item text-center" href="{{ route('register') }}">create account</a>
                                            @endif
                            <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                       @fas('user')  account
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        @fas('shopping-bag')  orders
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        @fas('heart')  saved items
                                    </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a id="account-dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgb(218, 165, 32) !important;" v-pre>
                        <i class="fa">@fas('question') Help</i>
                    </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="account-dropdown">
                            <a class="dropdown-item text-center">
                                call us on: <br>
                                0700 000 000
                            </a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center" href="#">Help center</a>
                            <a class="dropdown-item text-center" href="#">how to buy from us</a>
                            <a class="dropdown-item text-center" href="#">how to pay to us</a>
                            <a class="dropdown-item text-center" href="#">how to get free deliveries</a>
                        </div>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('viewCart') }}">
                                <i class="fa">@fas('shopping-cart')
                                    @if(Session::has('cart'))
                                        <span class="cart-with-numbers">
                                        {{ Session::get('cart')->totalQuantity }}
                                    </span>
                                    @endif
                                    Cart</i>
                            </a>
                        </li>

                @else
                    <li class="nav-item dropdown">
                        <a id="account-dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgb(218, 165, 32) !important;" v-pre>
                            <i class="fa">@fas('question') Help</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="account-dropdown">
                            <a class="dropdown-item text-center">
                                call us on: <br>
                                0700 000 000
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center" href="#">Help center</a>
                            <a class="dropdown-item text-center" href="#">how to buy from us</a>
                            <a class="dropdown-item text-center" href="#">how to pay to us</a>
                            <a class="dropdown-item text-center" href="#">how to get free deliveries</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('viewCart') }}">
                            <i class="fa">@fas('shopping-cart')
                                @if(Session::has('cart'))
                                    <span class="cart-with-numbers">
                                        {{ Session::get('cart')->totalQuantity }}
                                    </span>
                                @endif
                                Cart</i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ auth()->user()->level }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->level == 'Admin')
                            <a class="dropdown-item" href="{{ url('/admin/dashboard') }}">
                                My account
                             </a>
                            @elseif(auth()->user()->level == 'Client')
                                <a class="dropdown-item" href={{ url('/client/dashboard') }}>
                                    My account
                                </a>
                                @else
                                <a class="dropdown-item" href="{{ url('/') }}">
                                    My account
                                </a>
                                @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<section class="header">
    <div class="side-menu" id="side-menu">
        <ul>
            <li>Clothing & Footwear's <i class="angle-right">@fas('angle-right')</i>
                <ul>
                    <li>Men</li>
                    <li>Women</li>
                    <li>Children</li>
                    <li>Unisex</li>
                </ul>

            </li>
            <li>Local Products <i class="angle-right">@fas('angle-right')</i>
                <ul>
                    <li>Soaps</li>
                    <li>Body Lotions</li>
                    <li>Others</li>
                </ul>
            </li>
            <li>Fast Foods <i class="angle-right">@fas('angle-right')</i>
                <ul>
                    <li>Swahili Dishes</li>
                    <li>JuiceBox</li>
                    <li>Others</li>
                </ul>
            </li>
            <li>Tourism <i class="angle-right">@fas('angle-right')</i>
                <ul>
                    <li>Hotels</li>
                    <li>Conferencing</li>
                    <li>Private Beaches</li>
                    <li>Guest house</li>
                    <li>Others</li>
                </ul>
            </li>
            <li>Art <i class="angle-right">@fas('angle-right')</i>
                <ul>
                    <li>Carvings</li>
                    <li>Drawings</li>
                    <li>Models</li>
                    <li>Others</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="slider">
        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                @foreach($products as $slider)
                <div class="carousel-item  @if($loop->first) active @endif">
                    <div class="view">
                        <img class="d-block w-75" src="{{ url('/storage/images/', $slider->cover_images) }}"
                             alt="First slide" style="height: 500px;">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption @if($loop->first) active @endif">
                        <h3 class="h3-responsive">{{ $slider->name }}</h3>
                        <p class="text-sm-left">{{ $slider->type }} | {{ $slider->category }} | {{ $slider->model }}</p>
                        <p class="text-sm-left">{{ $slider->description }}</p>
                        <p>
                            <i class="fa">@fas('star')</i>
                            <i class="fa">@fas('star')</i>
                            <i class="fa">@fas('star')</i>
                            <i class="fa">@fas('star')</i>
                            <i class="fa">@fas('star-half')</i>
                        </p>
                        <p>{{ $slider->s_price }}</p>
                        <p>
                            <a class="btn btn-sm btn-primary">
                                <i class="fa"> @fas('eye')</i>
                            </a>
                            <a class="btn btn-primary btn-sm">
                                <i class="fa"> @fas('heart')</i>
                            </a>
                            <a class="btn btn-primary btn-sm">
                                <i class="fa"> @fas('shopping-cart')</i>
                            </a>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="color: orangered !important;"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>
</section>

<section class="featured-category">
    <div class="container-fluid">
        <div class="row">
            @foreach($products ->take(6) as $product)
                <div class="col-xl-2">
                    <a href="{{ route('product.show', $product->id) }}">
                        <img src="{{ url('/storage/images/', $product->cover_images) }}" alt="{{ $product->cover_image }}">
                    </a>
                    <div class="desc">{{ $product->category }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="onsale">
    <div class="container-fluid">
        <div class="title-box">
            <h2>On sale</h2>
        </div>
        <div class="row">
            @foreach($products->take(6) as $onsale)
            <div class="col-xl-2">
                <div class="product-top">
                    <img src="{{ url('/storage/images/', $onsale->cover_images) }}">
                    <div class="overlay-right">
                        <a href="{{ route('product.show', $onsale->id) }}" class="btn btn-secondary" title="Quick shop">
                            <i class="fa"> @fas('eye') </i>
                        </a>
                        <button type="button" class="btn btn-secondary" title="Add to wish list">
                            <i class="fa"> @fas('heart')</i>
                        </button>
                        <a href="{{ url('/product/add_cart', $onsale->id) }}"
                           class="btn btn-secondary" title="Add to cart">
                            <i class="fa"> @fas('shopping-cart')</i>
                        </a>
                    </div>
                </div>
                <div class="product-bottom text-center">
                    <i class="fa">@fas('star')</i>
                    <i class="fa">@fas('star')</i>
                    <i class="fa">@fas('star')</i>
                    <i class="fa">@fas('star')</i>
                    <i class="fa">@fas('star-half')</i>
                    <h3>{{ $onsale->name }}</h3>
                    <h5>{{ $onsale->s_price }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="new-products">
    <div class="container-fluid">
        <div class="title-box">
            <h2>New Arrivals</h2>
        </div>
        <div class="row">
            @foreach($products->take(12) as $onsale)
                <div class="col-xl-2" >
                    <div class="product-top">
                        <img src="{{ url('/storage/images/', $onsale->cover_images) }}">
                        <div class="overlay-right">
                            <a href="{{ route('product.show', $onsale->id) }}" class="btn btn-secondary" title="Quick shop">
                                <i class="fa"> @fas('eye') </i>
                            </a>
                            <button type="button" class="btn btn-secondary" title="Add to wish list">
                                <i class="fa"> @fas('heart')</i>
                            </button>
                            <a href="{{ url('/product/add_cart', $onsale->id) }}"
                                    class="btn btn-secondary" title="Add to cart">
                                <i class="fa"> @fas('shopping-cart')</i>
                            </a>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star-half')</i>
                        <h3>{{ $onsale->name }}</h3>
                        <h5>{{ $onsale->s_price }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="new-products">
    <div class="container-fluid">
        <div class="title-box">
            <h2>Services</h2>
        </div>
        <div class="row">
            @foreach($products->take(12) as $onsale)
                <div class="col-xl-2" >
                    <div class="product-top">
                        <img src="{{ url('/storage/images/', $onsale->cover_images) }}">
                        <div class="overlay-right">
                            <a href="{{ route('product.show', $onsale->id) }}" class="btn btn-secondary" title="Quick shop">
                                <i class="fa"> @fas('eye') </i>
                            </a>
                            <button type="button" class="btn btn-secondary" title="Add to wish list">
                                <i class="fa"> @fas('heart')</i>
                            </button>
                            <a href="{{ url('/product/add_cart', $onsale->id) }}"
                                    class="btn btn-secondary" title="Add to cart">
                                <i class="fa"> @fas('shopping-cart')</i>
                            </a>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star-half')</i>
                        <h3>{{ $onsale->name }}</h3>
                        <h5>{{ $onsale->s_price }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="new-products">
    <div class="container-fluid">
        <div class="title-box">
            <h2>Property Adviser</h2>
        </div>
        <div class="row">
            @foreach($products->take(6) as $onsale)
                <div class="col-xl-2" >
                    <div class="product-top">
                        <img src="{{ url('/storage/images/', $onsale->cover_images) }}">
                        <div class="overlay-right">
                            <a href="{{ route('product.show', $onsale->id) }}" class="btn btn-secondary" title="Quick shop">
                                <i class="fa"> @fas('eye') </i>
                            </a>
                            <button type="button" class="btn btn-secondary" title="Add to wish list">
                                <i class="fa"> @fas('heart')</i>
                            </button>
                            <a href="{{ url('/product/add_cart', $onsale->id) }}"
                                    class="btn btn-secondary" title="Add to cart">
                                <i class="fa"> @fas('shopping-cart')</i>
                            </a>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star-half')</i>
                        <h3>{{ $onsale->name }}</h3>
                        <h5>{{ $onsale->s_price }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="website">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 feature-box">
                <img src="{{ asset('/storage/images/100%.jpg') }}">
                <div class="feature-text">
                    <p>
                        <b>100% Original Products</b> from our stores.
                    </p>
                </div>
            </div>

            <div class="col-md-3 feature-box">
                <img src="{{ asset('/storage/images/return.jpg') }}">
                <div class="feature-text">
                    <p>
                        <b>Return within 7days</b> of receiving your order.
                    </p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="{{ asset('/storage/images/free.png') }}">
                <div class="feature-text">
                    <p>
                        <b>Enjoy free delivery</b> on order of more than one product.
                    </p>
                </div>
            </div>
            <div class="col-md-3 feature-box">
                <img src="{{ asset('/storage/images/payment.png') }}">
                <div class="feature-text">
                    <p>
                        <b>Online payment</b> for your convenience we accept M-pesa Payments.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cat">
    <div class="table table-responsive">
        <table class="table table-stripped">
            <thead>
            <th>first name</th>
            <th>last name </th>
            <th>phone number</th>
            <th><a href="#" class="addnow">
                    <i class="fas fa-plus">new</i>
                </a> </th>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input type="text" name="f_name[]" class="form-control">
                </td>
                <td>
                    <input type="text" name="f_name[]" class="form-control">
                </td>
                <td>

                    <input type="text" name="phone[]" class="form-control">
                </td>
                <td>
                    <a href="#" class="addnow">
                        <i class="fas fa-plus">new</i>
                    </a>
                    <a href="#" class="remove">
                        <i class="fas fa-minus">remove</i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="footer">
    <div class="container-fluid text-left">
        <div class="row">
            <div class="col-md-3">
                <h1>Useful Links</h1>
             <a href="#" style="color: white !important;">
                <p>Privacy Policy</p>
             </a>
             <a href="#" style="color: white !important;">
                <p>Terms of Use</p>
             </a>
             <a href="#" style="color: white !important;">
                <p>Return Policy</p>
             </a>
             <a href="#" style="color: white !important;">
                <p>Discount Coupons</p>
             </a>
            </div>
            <div class="col-md-3">
                <h1>Company</h1>
                <a href="#" style="color: white !important;">
                    <p><i class="fa">@fas('info-circle')</i> About Us</p>
                </a>
                <a href="#" style="color: white !important;">
                    <p><i class="fa">@fas('phone-alt')</i> Contact Us</p>
                </a>
                <a href="#" style="color: white !important;">
                    <p><i class="fa">@fas('graduation-cap')</i> Careers</p>
                </a>
                <a href="#" style="color: white !important;">
                    <p><i class="fa">@fab('affiliatetheme')</i> Affiliate</p>
                </a>
            </div>
            <div class="col-md-3">
                <h1>Follow Us</h1>
                <a href="https://www.facebook.com/sar.bryton" style="color: white !important;">
                    <p><i class="fa">@fab('facebook-square')</i> Facebook</p>
                </a>
                <a href="#" style="color: white !important;">
                    <p><i class="fa">@fab('Twitter-square')</i> Twitter</p>
                </a>
                <a href="#" style="color: white !important;">
                    <p><i class="fa">@fab('LinkedIn-in')</i> LinkedIn</p>
                </a>
                <a href="#" style="color: white !important;">
                    <p><i class="fa">@fab('Youtube-square')</i> Youtube</p>
                </a>
            </div>
            <div class="col-md-3">
                <h1>Office</h1>
                <h4 class="display 1">
                    Site Map
                </h4>
            </div>
        </div>
        <hr>
        <p class="copyright"> Kei Developers &copy 2019</p>
    </div>
</section>
<script type="text/javascript">
    $('.addnow').on('click', function () {
        addNow();
    });

    function addNow() {

        var tr='<tr>'+
            '<td><input type="text" name="f_name[]" class="form-control"></td>'+
            '<td><input type="text" name="l_name[]" class="form-control"></td>'+
            '<td><input type="text" name="phone[]" class="form-control"></td>'+
            '<td><a href="#" class="addnow">new</a> <a href="#" class="removenoe"><i class="fas fa-minus">remove</i></a></td>'+
            '</tr>'

        $('tbody').append(tr);
    };
</script>
<script>
    function openmenu() {
        document.getElementById('side-menu').style.display="block";
        document.getElementById('bars-btn').style.display="none";
        document.getElementById('close-btn').style.display="block";
    }

    function closemenu() {
        document.getElementById('side-menu').style.display="none";
        document.getElementById('bars-btn').style.display="block";
        document.getElementById('close-btn').style.display="none";
    }

</script>
</body>
</html>
