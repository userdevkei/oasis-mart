<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                        <a id="account-dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: orange !important;" v-pre>
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
                        <a id="account-dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: orange !important;" v-pre>
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
                        <a id="account-dropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: orange !important;" v-pre>
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
                           {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
