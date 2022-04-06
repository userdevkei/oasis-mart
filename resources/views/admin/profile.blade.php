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
    .dashboard-right .card .card-body .d-flex .container-fluid .row .col-md-6 .form-group
    {
        margin: 15px;
    }
    .dashboard-right .card .card-body .d-flex .container-fluid .row .col-md-6 .form-group input
    {
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        background: transparent;
    }
    .dashboard-right .card .card-body .d-flex .container-fluid .row .col-md-6 .form-group select
    {
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
        background: transparent;
    }
    .dashboard-right .card .card-body .d-flex .container-fluid .form-group button
    {
        border: none !important;
        color: white !important;
        background: orange !important;
        text-align: center;
    }
    .dashboard-right .card .card-body .d-flex .container-fluid .form-group button  .fas
    {
        color: white;
        margin-right: 5px;
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
                            <a class="nav-link" href="{{ url('admin/order') }}">
                                <i class="fa">@fas('shopping-cart')</i> Orders
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ url('admin/subscription') }}">
                                <i class="fa">@fas('newspaper')</i> Newsletters
                            </a>
                        </li>
                        <li>
                            <a class="nav-link active" href="{{ url('admin/profile') }}">
                                <i class="fa">@fas('user')</i> Profile
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('admin/reset-pwd') }}">
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
                <h4>My Profile</h4>
                    <div class="card">
                        <div class="card-header">
                            My Profile
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <div class="container-fluid">
                            {!! Form::open() !!}
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group row">
                                    {!! Form::label('name',('Name'), ['class' => 'col-md-4 text-right']) !!}
                                        <input  class="form-control col-md-8 text-capitalize" type="text" name="name"
                                         value="{{ auth()->user()->name }} ">
                                </div>
                                <div class="form-group row">
                                    {!! Form::label('name',('Email'), ['class' => 'col-md-4 text-right']) !!}
                                    <input type="email" class="form-control col-md-8" name="email"
                                           value="{{ auth()->user()->email }} ">
                                </div>
                                    <div class="form-group row">
                                    {!! Form::label('dob',('Date of Birth'), ['class' => 'col-md-4 text-right']) !!}
                                    <input type="date" class="form-control col-md-8" placeholder="optional" name="dob"
                                           value="{{ auth()->user()->dob }} ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group row">
                                    {!! Form::label('name',('Phone'), ['class' => 'col-md-4 text-right']) !!}
                                        <input type="text" class="form-control col-md-8 text-capitalize" name="name"
                                               value="{{ auth()->user()->phone }} ">
                                </div>
                                <div class="form-group row">
                                    {!! Form::label('location',('Location'), ['class' => 'col-md-4 text-right']) !!}
                                    <input type="text" class="form-control col-md-8 text-capitalize" placeholder="optional"
                                           name="name" value="{{ auth()->user()->location }}">
                                </div>
                                <div class="form-group row">
                                    {!! Form::label('gender',('Gender'), ['class' => 'col-md-4 text-right']) !!}
                                    <select class="form-control col-md-8 text-capitalize" name="gender" required>
                                        <option value="" disabled selected>optional</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="other">Other</option>

                                    </select>
                                </div>
                            </div>
                            </div>
                                    <div class="form-group row mb-0">
                                        <button class="btn btn-secondary col-md-6 offset-3" type="submit">
                                            <i class="fas">@fas('save') </i>update
                                        </button>
                                    </div>
                            {!! Form::close() !!}
                              </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
