<style>
    .cart
    {
        margin: 20px auto;
        width: 90%;
    }
    .container-fluid .table thead
    {
        background: orange;
    }
    .container-fluid .table thead th
    {
        color: white;
        font-size: 16px;
        height: 50px;
        padding-bottom: 15px;
    }
    .container-fluid .table tr td img
    {
        border-radius: 50%;
        background: transparent;
    }
    .container-fluid .table tr td
    {
        font-size: 15px;
        margin-top: 25px;
    }
    .container-fluid .table tr td input
    {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
        border-bottom-color: orange !important;
        background: transparent;
        box-shadow: orange !important;
        width: 54px;
    }
    .container-fluid .table tr td .btn-info
    {
        border: none !important;
        background: transparent !important;
        color: orange;
    }
    .container-fluid .table tr td .btn-info:hover
    {
        border: none !important;
        background: transparent !important;
        color: red;
    }
    .checkout
    {
        margin: 25px auto;
        background: rgba(0,0,0,0.2);
        height: 60%;
    }
    .checkout-page
    {
        padding: 25px;
    }
    .title-box
    {
        background: orange;
        color: #fff;
        width: 210px;
        padding: 4px 10px;
        height: 30px;
        margin-bottom: 30px;
        display: flex;
    }
    .title-box h2
    {
        font-size: 18px;
    }
    .title-box::after
    {
        content: '';
        border-top: 30px solid orangered;
        border-right: 50px solid transparent;
        position: absolute;
        display: flex;
        margin-top: -4px;
        margin-left: 200px;
    }
    .checkout .checkout-page .row .col-md-6 .form-group input
    {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
        border-bottom-color: orange !important;
        background: transparent;
        box-shadow: orange !important;
    }
    .checkout .checkout-page .row .col-md-6 .form-group textarea
    {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
        border-bottom-color: orange !important;
        background: transparent;
        box-shadow: orange !important;
    }
    .checkout .checkout-page .row .col-md-6 .form-group label
    {
        font-weight: bold;
        font-size: 16px;
        font-family: "Times New Roman", monospace ;
    }
    .checkout .checkout-page .row .col-md-6 .form-group .btn-secondary
    {
        border: none !important;
        background: orange;
        color: white;
    }
    .checkout .checkout-page .row .col-md-6 .form-group .btn-secondary .fas
    {
        font-size: 15px;
        margin-right: 5px;
    }
</style>
@extends('layouts.app')
@section('content')
    <section class="cart-page">
        <div class="container-fluid">
            <div class="cart">
                <div class="table table-responsive">
                    <table class="table table-sm table-striped">
                        <thead>
                        <th colspan="2">Item</th>
                        <th>Product type</th>
                        <th>Category</th>
                        <th>Model</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($cartItems->items as $item)
                            <tr>
                                <td><img src="{{ url('/storage/images/', $item['data']['cover_images']) }}"
                                     width="75" height="75"></td>
                                <td>{{$item['data']['name']}}</td>
                                <td>{{$item['data']['type']}}</td>
                                <td>{{$item['data']['category']}}</td>
                                <td>{{$item['data']['model']}}</td>
                                <td>{{$item['data']['status']}}</td>
                                <td>{{$item['data']['s_price']}}</td>
                                <td>
                                   {!! Form::number('number', $item['quantity'], ['class' => 'form-control-sm', 'min' => '1']) !!}
                                </td>
                                <td>{{$item['itemPrices']}}</td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{ route('removeItem',['id' => $item['data']['id']]) }}">
                                        <i class="fa">@fas('times')</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout">
        <div class="container">
            <div class="checkout-page">
                <div class="row">
                    @guest()
                        <div class="col-md-6">
                            <div class="title-box">
                                <h2>Delivery details</h2>
                            </div>
                            <div class="row form-group">
                                {!! Form::label('contact',('Contact'),['class' => 'col-md-3 text-right']) !!}
                                {!! Form::text('contact','',['class' => 'form-control col-md-6']) !!}
                            </div>
                            <div class="row form-group">
                                {!! Form::label('location',('My location'),['class' => 'col-md-3 text-right']) !!}
                                {!! Form::textarea('location','', ['class' => 'form-control col-md-6', 'rows' => '3']) !!}
                            </div>
                        </div>
                        @else
                        <div class="col-md-6">
                            <div class="title-box">
                                <h2>Delivery details</h2>
                            </div>
                            <div class="row form-group">
                                {!! Form::label('contact',('Contact'),['class' => 'col-md-3 text-right']) !!}
                                {!! Form::text('contact',auth()->user()->phone,['class' => 'form-control col-md-6']) !!}
                            </div>
                            <div class="row form-group">
                                {!! Form::label('location',('My location'),['class' => 'col-md-3 text-right']) !!}
                                {!! Form::textarea('location',auth()->user()->location, ['class' => 'form-control
                                col-md-6', 'rows' => '3']) !!}
                            </div>
                        </div>
                    @endguest

                    <div class="col-md-6">
                        <div class="title-box">
                            <h2>Check out</h2>
                        </div>
                        <div class="row form-group">
                            {!! Form::label('items',('Total items'),['class' => 'col-md-3 text-right']) !!}
                            {!! Form::text('price',$cartItems->totalQuantity, ['class' => 'form-control col-md-6', 'readonly']) !!}
                        </div>
                        <div class="row form-group">
                            {!! Form::label('price',('Total price'),['class' => 'col-md-3 text-right']) !!}
                            {!! Form::text('price',$cartItems->sumPrice, ['class' => 'form-control col-md-6', 'readonly']) !!}
                        </div>
                        <div class="row form-group">
                            {!! Form::label('shipping',('Shipping cost'),['class' => 'col-md-3 text-right']) !!}
                            {!! Form::text('shipping','', ['class' => 'form-control col-md-6','readonly',
                             'placeholder' => '0.00']) !!}
                        </div>
                        <div class="row form-group">
                            {!! Form::label('tax',('Total tax'),['class' => 'col-md-3 text-right']) !!}
                            {!! Form::text('tax','', ['class' => 'form-control col-md-6','readonly',
                             'placeholder' => '0.00']) !!}
                        </div>
                        <div class="row form-group">
                            {!! Form::label('cost',('Total Cost'),['class' => 'col-md-3 text-right']) !!}
                            {!! Form::text('cost',$cartItems->sumPrice, ['class' => 'form-control col-md-6', 'readonly']) !!}
                        </div>
                        <div class="row form-group">
                            <a class="btn btn-secondary offset-md-3" href="#"><i class="fas">@fas('money-check')</i> method</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
