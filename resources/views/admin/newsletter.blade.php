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
</style>
@extends('layouts.app')

@section('content')
    <section class="home">
            <div class="dashboard-left">
                <div class="dash-links">
                    <ul class="list-unstyled">
                        <li>
                            <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                                <i class="fa">@fas('tachometer-alt')</i> Dashboard
                            </a>
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
                            <a class="nav-link active" href="{{ url('/admin/subscription') }}">
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
                <h4>Newsletters Subscription</h4>
                    <div class="card">
                        <div class="card-header">
                            My Subscription
                        </div>
                        <div class="card-body">

                                @if(auth()->user()->subscription == '1')
                                <h2> Subscribed</h2>
                                    <p>
                                        You are currently subscribed to getting updates from Kei Devs to your email
                                    </p>

                                <p>
                                    subscription enables you to be able to get updates whenever
                                    new products are available and when we have offers
                                </p>
                                @else
                                    <h2>
                                    Not subscribed
                                    </h2>
                                <p>
                                    You are currently not subscribed hence you won't be able to get updates from Kei Devs
                                    to your email
                                </p>
                                <p>
                                    subscription enables you to be able to get updates whenever
                                    new products are available and when we have offers
                                </p>
                                @endif


                        </div>
                    </div>
                </div>
    </section>
@endsection
