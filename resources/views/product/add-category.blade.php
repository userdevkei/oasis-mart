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
            #bars-btn
            {
                display: block;
                float: left;
                width: 34%;
            }

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
        body
        {
            background-color: rgba(0, 119, 190, 0.1);
        }
        .navbar
        {
            background-color: rgba(0, 119, 190, 0.6);
        }
        .cat
        {
            margin: 20px auto;
            width: 40%;
            height: 80vh;
        }
        text
        {
            box-shadow: none !important;
            border-top: none !important;
            border-right: none !important;
            border-left: none !important;
            border-bottom: #227dc7 !important;
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

<section class="cat">
    <div class="new-cat">
        {!! Form::open(['action' => 'CategoryController@store', 'method' => 'post']) !!}
            <table class="table table-borderless">
                <thead>
                <th>
                    Manage Categories
                </th>
                <th><a href="#" class="btn btn-sm btn-success addnow">
                        @fas('plus')
                    </a> </th>
                </thead>
                <tbody>
                <tr>
                    <td>
                        {!! Form::text('cat_name[]', '', ['class' => 'form-control']) !!}
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger remove">
                            @fas('minus')
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        {!! Form::submit('save', ['class' => 'btn btn-md btn-primary col-md-3 offset-md-7']) !!}
        {!! Form::close() !!}
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
                <a href="#" style="color: white !important;">
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
            '<td><input type="text" name="phone[]" class="form-control"></td>'+
            '<td><a href="#" class="btn btn-sm btn-danger removenoe">@fas("minus")</a></td>'+
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
