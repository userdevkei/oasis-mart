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

    .card-body .col-md-8 .row .form-control
    {
        border-left: none !important;
        border-right: none !important;
        border-top: none !important;
        background: transparent;
    }
    .card-body .col-md-8 .row .btn-primary
    {
        border: none !important;
        background: orangered;
        font-size: 15px;
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
                            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                                <i class="fa">@fas('tachometer-alt')</i> Dashboard
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ url('/admin/profile') }}">
                                <i class="fa">@fas('user')</i> Profile
                            </a>
                        </li>
                        <hr>
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
                            <a class="nav-link active" href="{{ url('/admin/reset-pwd') }}">
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
                <h4>Reset Password</h4>
                    <div class="card">
                        <div class="card-header">
                            Change Password
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                            <div class="col-md-8">
                                {!! Form::open() !!}
                                <div class="row form-group">
                                    <label class="col-md-4" for="Password"> Password</label>
                                    <input class="form-control col-md-7" type="password" name="password">
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4" for="Password">Confirm password</label>
                                    <input class="form-control col-md-7" type="password" name="password">
                                </div>
                                <div class="row form-group mb-0">
                                    <button class="btn btn-primary col-md-8 offset-md-2">
                                        <i class="fab">@fas('save')</i> update
                                    </button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
