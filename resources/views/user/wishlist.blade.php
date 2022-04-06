<style>
    .dashboard-left
    {
        width: 15%;
        font-size: 14px;
        float: left;
        z-index: 2;
        height: 80%;
        box-shadow: 1px 1px 4px 1px rgba(0,0,0,0.5);
    }

    .dashboard-right
    {
        width: 85%;
        margin-left: 15%;
        height: 80%;
        padding: 0 20px;
        box-shadow: 1px 1px 4px 1px rgba(255,165,0,0.5);
    }

    .dashboard-left hr
    {
        margin: 2px 2px;
    }
    .dashboard-left li .fa
    {
        margin-right: 7px;
    }
    .dashboard-right h4
    {
        color: white;
        background: orange;
        text-align: center;
        margin: 20px auto;
        width: 40%;
    }
    .dashboard-right .card-deck
    {
        margin: 15px auto;
    }

    .dashboard-right .card-header
    {
        font-weight: bold;
        font-size: 14px;
        color: black;
    }
    .dashboard-right .card-body h2
    {
        font-size: 16px;
        font-weight: bold;
        color: orange;
        padding: 10px 0;
    }
    .dashboard-right .card-body .fa
    {
        font-size: 15px;
        color: orange;
        float: right;
        bottom: 0;
    }
    .dashboard-right .card-body p{
        color: black;
        font-size: 14px;
        font-weight: bold;
        padding: 0 0;
    }
    .dashboard-right .card-body h1
    {
        font-weight: bold;
        font-size: 42px;
        text-align: center;
        padding: 0 5px;
        color: orange;

    }
    .card-body .fab
    {
        color: orangered;
        font-size: 15px;
        margin: 1px;
    }
    .card-body .card-title
    {
        color: black;
        font-size: 18px;
        font-weight: bold;
        padding: 5px auto;
    }
    .card-body .card-text
    {
        color: orange;
        font-size: 20px;
    }
    .card-body .card-subtitle
    {
        font-size: 16px;
    }
</style>
@extends('layouts.app')

@section('content')
    <section class="home">
        <div class="container">
            <div class="dashboard-left">
                <div class="dash-links">
                    <ul class="list-unstyled">
                        <li>
                            <a class="nav-link" href="{{ url('/user/dashboard') }}">
                                <i class="fa">@fas('tachometer-alt')</i> Dashboard
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ url('/user/profile') }}">
                                <i class="fa">@fas('user')</i> Profile
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ url('/user/order') }}">
                                <i class="fa">@fas('shopping-bag')</i> Orders
                            </a>
                        </li>
                        <li>
                            <a class="nav-link active" href="{{ url('/user/wishlist') }}">
                                <i class="fa">@fas('heart')</i> Wishlist
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ url('/user/subscription') }}">
                                <i class="fa">@fas('newspaper')</i> Newsletters
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/user/reset-pwd') }}">
                                <i class="fa">@fas('key')</i> Change Password
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa">@fas('user-lock')</i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dashboard-right">
                <h4>My Wishlist</h4>
                <div class="card-deck">
                    <div class="card">
                        <div class="card-header">
                            Product 1
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ url('/storage/images/avatar-1.png') }}" class="card-img" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="card-title">Product type</div>
                                <div class="card-subtitle">something else</div>
                                <div class="card-text">USD 14.99</div>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star-half')</i>
                                <p class="quantity">3 pieces</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Product 2
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ url('/storage/images/avatar-1.png') }}" class="card-img" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="card-title">Product type</div>
                                <div class="card-subtitle">something else</div>
                                <div class="card-text">USD 14.99</div>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star-half')</i>
                                <p class="quantity">3 pieces</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <div class="card-header">
                            Product 1
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ url('/storage/images/avatar-1.png') }}" class="card-img" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="card-title">Product type</div>
                                <div class="card-subtitle">something else</div>
                                <div class="card-text">USD 14.99</div>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star-half')</i>
                                <p class="quantity">3 pieces</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Product 2
                        </div>
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ url('/storage/images/avatar-1.png') }}" class="card-img" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="card-title">Product type</div>
                                <div class="card-subtitle">something else</div>
                                <div class="card-text">USD 14.99</div>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star')</i>
                                <i class="fab">@fas('star-half')</i>
                                <p class="quantity">3 pieces</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
