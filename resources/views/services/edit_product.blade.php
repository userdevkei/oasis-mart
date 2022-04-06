<style>
    .add-product
    {
        margin: 10px auto;
        width: 75%;
        height: 75%;
        padding: 20px;
        color: orange;
        font-weight: bold;
        box-shadow: 1px 1px 3px 1px orangered;
    }
    .add-product .row .col-md-6 select
    {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
        background: transparent;
        box-shadow: none !important;
    }
    .add-product .row .col-md-6 input
    {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
        background: transparent;
        box-shadow: none !important;
    }
    .add-product .row .col-md-6 textarea
    {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
        background: transparent;
        box-shadow: none !important;
    }
    .add-product .row .col-md-4 select
    {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
        background: transparent;
        box-shadow: none !important;
    }
    .add-product .row .col-md-4 input
    {
        border-top: none !important;
        border-right: none !important;
        border-left: none !important;
        background: transparent;
        box-shadow: none !important;
    }
    .add-product .form-group button
    {
        background: orangered !important;
        border: none !important;
        font-size: 15px;
    }
    .add-product .form-group button .fa
    {
        color: white;
        font-size: 15px;
        margin-right: 5px;
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
        font-size: 15px;
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
</style>
@extends('layouts.app')

@section('content')
    <section class="product-form">
        <div class="container">
            <div class="add-product">
                <div class="title-box">
                    <h2>Update a service</h2>
                </div>
                {!! Form::open(['action' => ['ServicesController@update', $service->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('product-name',('Service name'), ['class' => 'form-label col-md-4 text-left']) !!}
                        {!! Form::text('name',$service->name,['class' => 'form-control col-md-12', 'placeholder' => 'name of the service']) !!}
                    </div>

                    <div class="col-md-6 form-group">
                        {!! Form::label('product-type',('Service type'), ['class' => 'form-label col-md-4 text-left']) !!}
                        {!! Form::select('type',['Hairdressing' => 'Hairdressing', 'Outside Catering' => 'Outside Catering', 'Others' => 'Others'],
                        $service->service,['class' => 'form-control col-md-12', 'placeholder' => '--select--' ]) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('product-availability',('Availability'), ['class' => 'form-label col-md-4 text-left']) !!}
                        {!! Form::select('availability',['Available' => 'Available', 'Flexible' => 'Flexible', 'On-request' => 'On-request'],
                        $service->availability, ['class' => 'form-control col-md-12', 'placeholder' => '--select--' ]) !!}
                    </div>

                    <div class="col-md-4 form-group">
                        {!! Form::label('product-selling',('Price'), ['class' => 'form-label col-md-6 text-left']) !!}
                        {!! Form::text('price',$service->price,['class' => 'form-control col-md-12', 'placeholder' => 'Ksh. ' ]) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('product-images',('Images'), ['class' => 'form-label col-md-4 text-left']) !!}
                        {!! Form::file('cover_image',['class' => 'form-control col-md-12', 'multiple' => true ]) !!}
                    </div>

                    <div class="col-md-6 form-group">
                        {!! Form::label('product-description',('Service description'),
                        ['class' => 'form-label col-md-6 text-left']) !!}
                        {!! Form::textarea('description',$service->description,['class' => 'form-control col-md-12', 'rows' => '4',
                        'placeholder' => 'service description']) !!}
                    </div>
                </div>
                <div class="form-group row mb-0">
                    {!! Form::hidden('_method', 'PUT') !!}
                    <button class="btn btn-success offset-md-3 col-md-6" type="submit">
                        <i class="fa">@fas('save')</i> Update
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>

@endsection
