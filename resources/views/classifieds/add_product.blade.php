<style>
    .add-product
    {
        margin: 10px auto;
        width: 75%;
        height: 95%;
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
                        <h2>Add new product</h2>
                    </div>
                    {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('product-name',('Product name'), ['class' => 'form-label col-md-4 text-left']) !!}
                        {!! Form::text('name','',['class' => 'form-control col-md-12', 'placeholder' => 'product name']) !!}
                    </div>

                    <div class="col-md-6 form-group">
                        {!! Form::label('product-type',('Product type'), ['class' => 'form-label col-md-4 text-left']) !!}
                        {!! Form::select('type',['Electronics' => 'Electronics', 'Software' => 'Software', 'Service' => 'Service'],
                        '',['class' => 'form-control col-md-12', 'placeholder' => '--select--' ]) !!}
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            {!! Form::label('product-category',('Product category'), ['class' => 'form-label col-md-5 text-left']) !!}
                            {!! Form::select('category',['Desktop computer' => 'Desktop computer', 'Laptop' => 'Laptop',
                            'Phone' => 'Phone', 'Antivirus' => 'Antivirus', 'Network Installation'],
                            '',['class' => 'form-control col-md-12', 'placeholder' => '--select--' ]) !!}
                        </div>

                        <div class="col-md-6 form-group">
                            {!! Form::label('product-model',('Product model'), ['class' => 'form-label col-md-4 text-left']) !!}
                            {!! Form::select('model',['Hp' => 'Hp', 'Dell' => 'Dell', 'Toshiba' => 'Toshiba', 'lenovo' => 'lenovo',
                            'Samsung' => 'Samsung', 'Windows 10' => 'Windows 10', 'Kaspersky' => 'Kasperskey', 'Team Viewer' => 'Team Viewer',
                            'Mobile repairs' => 'Mobile repairs', 'CCTV installation' => 'CCTV installation'],'',['class' => 'form-control col-md-12'
                             , 'placeholder' => '--select--']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            {!! Form::label('product-quantity',('Quantity'), ['class' => 'form-label col-md-4 text-left']) !!}
                            {!! Form::number('quantity','',['class' => 'form-control col-md-12', 'placeholder' => '1']) !!}
                        </div>
                        <div class="col-md-4 form-group">
                            {!! Form::label('product-buying',('Buying Price'), ['class' => 'form-label col-md-6 text-left']) !!}
                            {!! Form::text('b-price','',['class' => 'form-control col-md-12', 'placeholder' => 'Ksh. ']) !!}
                        </div>

                        <div class="col-md-4 form-group">
                            {!! Form::label('product-selling',('Selling Price'), ['class' => 'form-label col-md-6 text-left']) !!}
                            {!! Form::text('s-price','',['class' => 'form-control col-md-12', 'placeholder' => 'Ksh. ' ]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            {!! Form::label('product-status',('Status'), ['class' => 'form-label col-md-4 text-left']) !!}
                            {!! Form::select('status',['Brand new' => 'Brand new', 'Refurbished' => 'Refurbished'],
                            '',['class' => 'form-control col-md-12', 'placeholder' => '--select--']) !!}
                        </div>
                        <div class="col-md-6 form-group">
                            {!! Form::label('product-availability',('Availability'), ['class' => 'form-label col-md-4 text-left']) !!}
                            {!! Form::select('availability',['In stock' => 'In stock', 'Out of stock' => 'Out of stock'],
                            '',['class' => 'form-control col-md-12', 'placeholder' => '--select--' ]) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            {!! Form::label('product-images',('Images'), ['class' => 'form-label col-md-4 text-left']) !!}
                            {!! Form::file('cover_image',['class' => 'form-control col-md-12', 'multiple' => true ]) !!}
                        </div>

                        <div class="col-md-6 form-group">
                            {!! Form::label('product-description',('Product description'),
                            ['class' => 'form-label col-md-6 text-left']) !!}
                            {!! Form::textarea('description','',['class' => 'form-control col-md-12', 'rows' => '4',
                            'placeholder' => 'product specifications']) !!}
                        </div>
                    </div>
                        <div class="form-group row mb-0">
                            <button class="btn btn-success offset-md-3 col-md-6" type="submit">
                                <i class="fa">@fas('save')</i> Submit
                            </button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </section>

    @endsection
