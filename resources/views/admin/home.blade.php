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
        font-size: 12px;
        font-weight: bold;
        color: orange;
        padding: 5px 0;
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

    .dashboard-right .card-deck .card h5
    {
        font-family: Consolas sans-serif;
        color: orange;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
        margin: 5px auto;
    }

    .dashboard-right .card-deck .card .card-body .btn-link
    {
        color: orangered !important;
        margin-top: 15px;
    }

    .dashboard-right .card-deck .card .card-body .fa-icon
    {
        font-size: 80px;
        color: orangered !important;
        position: center !important;
    }
    .dashboard-right .card-deck .card .card-body .card-links
    {
        margin: 5px auto;
        width: 85%;
        text-align: center;
        position: absolute;
        bottom: 0;
    }
    .dashboard-right .card-deck .card .card-body .icon
    {
        margin: 15px auto;
        width: 25%;
        border-radius: 50%;
    }
</style>
@extends('layouts.app')

@section('content')
    <section class="home">
            <div class="dashboard-left">
                <div class="dash-links">
                    <ul class="list-unstyled">
                        <li>
                            @if(auth()->user()->level == 'Admin')
                            <a class="nav-link active" href="{{ url('/admin/dashboard') }}">
                                <i class="fa">@fas('tachometer-alt')</i> Dashboard
                            </a>
                                @endif
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ url('/product') }}">
                                <i class="fa">@fas('shopping-bag')</i> Products
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/services') }}">
                                <i class="fa">@fa('servicestack')</i> Services
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/classifieds') }}">
                                <i class="fa">@fas('ad')</i> Adverts
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/admin/order') }}">
                                <i class="fa">@fas('shopping-bag')</i> Orders
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ url('/admin/subscription') }}">
                                <i class="fa">@fas('newspaper')</i> Newsletters
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('admin/profile') }}">
                                <i class="fa">@fas('user')</i> Profile
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/admin/reset-pwd') }}">
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
                <h4>Admin Dashboard</h4>
                <div class="card-deck">
                    <a href="{{ route('product.index') }}" title="products page">
                    <div class="card">
                        <div class="card-header">
                            <h5>Products</h5>
                        </div>
                        <div class="card-body">
                            <div class="icon">
                                <i class="fa-icon">@fas('shopping-basket')</i>
                            </div>
                            <div class="card-links">
                                <a class="btn-link text-center" href="{{ route('product.index') }}">123 Products</a> |
                                <a class="btn-link text-center" href="{{ route('services.index') }}">234 Services</a> |
                                <a class="btn-link text-center" href="{{ route('classifieds.index') }}">456 Classifieds</a>
                            </div>
                        </div>
                    </div>
                    </a>

                    <div class="card">
                        <div class="card-header">
                            <h5> Users</h5>
                        </div>
                        <div class="card-body">
                            <div class="icon">
                                <i class="fa-icon">@fas('users')</i>
                            </div>
                            <div class="card-links">
                                <a class="btn-link text-center" href="#">123 Merchant</a> |
                                <a class="btn-link text-center" href="#">234 Customers</a> |
                                <a class="btn-link text-center" HREF="#">another </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <div class="card-header">
                            <h5>Subscription</h5>
                        </div>
                        <div class="card-body">
                            <h1>3</h1>
                            <p>
                                items you have ordered from our premise
                            </p>
                            1. tv set <br>
                            2. woofer system
                            .....
                            <a class="btn-link"  href="{{ url('/wishlist') }}">
                                <i class="fa">@fas('eye')</i>
                            </a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5> Promotions </h5>
                        </div>
                        <div class="card-body">
                            <h2>
                                @if(auth()->user()->subscription == '1')
                                    Subscribed
                                @else
                                    Not subscribed
                                @endif
                            </h2>
                            <p>
                                subscription enables you to be able to get updates whenever
                                new products are available and when we have offers
                            </p>
                            <a class="btn-link" href="{{ url('/subscription') }}">
                                <i class="fa">@fas('pencil-alt')</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
