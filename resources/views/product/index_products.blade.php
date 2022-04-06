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

    .dashboard-right .card-deck .card .card-body h5
    {
        font-family: Consolas sans-serif;
        color: orange;
        font-size: 24px;
        text-align: center;
        font-weight: bold;
        margin: 5px auto;
    }

    .dashboard-right .card-deck .card .card-body .btn-link
    {
        color: orangered !important;
        margin: 0 4px;
    }

    .dashboard-right .card-deck .card .card-body .fa-icon
    {
        font-size: 80px;
        color: white;
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
        margin: 5px auto;
        width: 25%;
        background: rgba(255,165,0,0.7);
        border-radius: 5%;
    }
    .serial
    {
        text-transform: uppercase;
    }
    .container-fluid
    {
        width: 100% !important;
    }
    .dashboard-right .btn-primary
    {
        background: orange !important;
        border: none !important;
        margin-top: 7px !important;
        margin-right: 10px !important;
    }
    .dashboard-right .btn-info
    {
        border-color: orange !important;
        background: white !important;
    }
    .dashboard-right .fa
    {
        color: orange !important;
    }
    .dashboard-right .fas
    {
        color: orange !important;
    }
    .dashboard-right .fas:hover
    {
        color: red !important;
    }
    .dashboard-right .fas-icon:hover
    {
        color: green !important;
    }
    .dashboard-right .fas-icon
    {
        color: white !important;
    }
    .dashboard-right .btn-primary
    {
        color: white !important;
    }
    .dashboard-right .btn-primary:hover
    {
        color: green !important;
    }
    .fa-icons
    {
        color: white !important;
        margin: 5px !important;
    }
    .modal-body .btn-primary
    {
        justify-content: center !important;
        border: none !important;
        background: orange !important;
        color: white;
    }
    .modal-header .modal-title
    {
        text-align: center !important;
    }
    .modal-body
    {
        text-align: center !important;
    }
    .modal-footer .btn-secondary
    {
        color: red !important;
        background: white !important;
        border: none !important;
    }
    .modal-footer .btn-secondary:hover
    {
        color: red !important;
        background: orange !important;
        border: none !important;
    }
    .modal-header
    {
        height: 40px !important;
        background-color: orange !important;
        color: white !important;
        text-align: center !important;
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
                                <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                                    <i class="fa">@fas('tachometer-alt')</i> Dashboard
                                </a>
                            @endif
                        </li>
                        <hr>
                        <li>
                            <a class="nav-link" href="{{ url('/categories') }}">
                                <i class="fa">@fas('shopping-bag')</i> Categories
                            </a>
                        </li>
                        <li>
                            <a class="nav-link active" href="{{ url('/product') }}">
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
                <a class="btn btn-sm btn-primary float-right" title="add product new product" data-toggle="modal" data-target="#exampleModalCenter"><t class="fas-icon"> @fas('plus')</t> new </a>
                <h4>Products </h4>
                <div class="table table-responsive-sm">
                    @if(count($product)>0)
                        <table class="table-sm table-striped table-borderless w-100 d-block d-sm-table">
                            <thead>
                            <th>Name</th>
                            <th>Serial</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Model</th>
                            <th>Quantity</th>
                            <th>Buying (Ksh.)</th>
                            <th>Price (Ksh.)</th>
                            <th>Availability</th>
                            <th>Status</th>
                            </thead>
                            <tbody>
                            @foreach($product as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td class="serial">{{ $item->serial }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->b_price}}</td>
                                    <td>{{ $item->s_price}}</td>
                                    <td>{{ $item->availability}}</td>
                                    <td>{{ $item->status}}</td>
                                    <td nowrap="">
                                        <a class="btn btn-sm btn-info" title="view this product" href="{{ route('product.show', $item->id) }}"><i class="fa">@fas('eye')</i></a>
                                        <a class="btn btn-sm btn-info" title="edit this product" href="{{ route('product.edit', $item->id) }}"><i class="fa">@fas('pencil-alt')</i></a>
                               <a class="btn btn-sm btn-info" title="delete this product" href="#"><i class="fas">@fas('trash-alt')</i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                    <p class="lead text-muted text-center">
                        no products yet
                    </p>
                        @endif
                </div>
            </div>
    </section>

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <a class="btn btn-sm btn-primary" href="{{ route('product.create') }}" title="add new products here">
                        <i class="fa-icons">@fas('plus')</i> Products
                    </a>
                    <br>
                    <hr>
                    <a class="btn btn-sm btn-primary" href="{{ route('services.create') }}" title="create a service here">
                    <i class="fa-icons">@fas('plus')</i> Services
                    </a>
                    <br>
                    <hr>
                    <a class="btn btn-sm btn-primary" href="{{ route('classifieds.create') }}" title="create an advert here">
                    <i class="fa-icons">@fas('plus')</i> Classifieds
                    </a>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
