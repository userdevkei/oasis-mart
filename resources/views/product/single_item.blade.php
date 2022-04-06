<style>
    .single-product
    {
        margin-top: 15px;
    }

    .new-arrivals
    {
        background: green;
        width: 50px;
        color: #fff;
        font-size: 12px;
        font-weight: bold;
        margin-top: 20px;
    }
    .col-md-7 h2
    {
        color: #555;
    }
    .single-product .fa
    {
        color: orangered;
    }
    .single-product .price
    {
        color: orange;
        font-size: 20px;
        font-weight: bold;
        padding-top: 20px;
    }
    .single-product input
    {
        border: 1px solid #ccc;
        font-weight: bold;
        height: 33px;
        text-align: center;
        width: 40px;
    }
    .single-product .btn-primary
    {
        background: orange !important;
        color: #fff;
        font-size: 15px;
        margin-left: 20px;
        border: none !important;
        box-shadow: none !important;
    }
    .product-description h6
    {
        margin-top: 50px;
        color: orange;
    }
    .product-description p
    {
        margin-top: 30px;
    }

    .product-description hr
    {
        margin-bottom: 50px;
    }
    .title-box
    {
        background: orange;
        color: #fff;
        width: 210px;
        padding: 4px 10px;
        height: 40px;
        margin-bottom: 30px;
        display: flex;
    }
    .title-box h2
    {
        font-size: 24px;
    }
    .title-box::after
    {
        content: '';
        border-top: 40px solid orangered;
        border-right: 50px solid transparent;
        position: absolute;
        display: flex;
        margin-top: -4px;
        margin-left: 200px;
    }
    .product-top img
    {
        width: 100%;
    }
    .overlay-right
    {
        display: block;
        opacity: 0;
        position: absolute;
        top: 10%;
        margin-left: 0;
        width: 70px;
    }
    .overlay-right .fa
    {
        cursor: pointer;
        background-color: white;
        color: black;
        height: 35px;
        width: 35px;
        font-size: 15px;
        padding: 7px;
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .overlay-right .btn-secondary
    {
        background: none !important;
        border: none !important;
        box-shadow: none !important;
    }
    .product-top:hover .overlay-right
    {
        opacity: 1;
        margin-left: 5%;
        transition: 0.5s;
    }

    .product-bottom .fa
    {
        color: orangered;
        font-size: 10px;
    }

    .product-bottom h3
    {
        font-size: 20px;
        font-weight: bold;
    }
    .product-bottom h5
    {
        font-size: 15px;
        padding-bottom: 10px;
    }
    .new-products
    {
        margin: 50px 0;
    }

</style>
@extends('layouts.app')
@section('content')
    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="view">
                                    <img class="d-block " src="{{ url('/storage/images/', $product->cover_images) }}"
                                         alt="First slide" style="height: 365px;">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <i class="fa">@fas('star')</i>
                                    <i class="fa">@fas('star')</i>
                                    <i class="fa">@fas('star')</i>
                                    <i class="fa">@fas('star')</i>
                                    <i class="fa">@fas('star-half')</i>
                                </div>
                            </div>
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="new-arrivals text-center"></p>
                    <h2>{{ $product->name }}</h2>
                    <p>Product Code: <k class="text-uppercase">{{ $product->serial }}</k></p>
                    <i class="fa">@fas('star')</i>
                    <i class="fa">@fas('star')</i>
                    <i class="fa">@fas('star')</i>
                    <i class="fa">@fas('star')</i>
                    <i class="fa">@fas('star-half')</i>
                    <p class="price">Ksh. {{$product->s_price}}.00</p>
                    <p><b>Availability :</b> {{ $product->availability }}</p>
                    <p><b>Condition :</b> {{ $product->ststus }}</p>
                    <p><b>Brand :</b> {{ $product->model }}</p>
                    <label>Quantity : </label>
                    <input type="number" value="1" min="1">
                    <button type="button" class="btn btn-primary"
                            title="Add to cart">
                        @fas('shopping-cart')
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="product-description">
        <div class="container">
            <h6>Product Description</h6>
            <p>{{ $product->description }}</p>
            <hr>
        </div>

        <div class="container-fluid">
            <div class="title-box">
                <h2>Similar products</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick shop">
                                <i class="fa"> @fas('eye') </i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to wish list">
                                <i class="fa"> @fas('heart')</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa"> @fas('shopping-cart')</i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star-half')</i>
                        <h3>Fitness Watch</h3>
                        <h5>$34.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick shop">
                                <i class="fa"> @fas('eye') </i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to wish list">
                                <i class="fa"> @fas('heart')</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa"> @fas('shopping-cart')</i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <h3>Sports Watch</h3>
                        <h5>$44.50</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick shop">
                                <i class="fa"> @fas('eye') </i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to wish list">
                                <i class="fa"> @fas('heart')</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa"> @fas('shopping-cart')</i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star-half')</i>
                        <h3>Normal Watch</h3>
                        <h5>$24.00</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-top">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg">
                        <div class="overlay-right">
                            <button type="button" class="btn btn-secondary" title="Quick shop">
                                <i class="fa"> @fas('eye') </i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to wish list">
                                <i class="fa"> @fas('heart')</i>
                            </button>
                            <button type="button" class="btn btn-secondary" title="Add to cart">
                                <i class="fa"> @fas('shopping-cart')</i>
                            </button>
                        </div>
                    </div>
                    <div class="product-bottom text-center">
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <i class="fa">@fas('star')</i>
                        <h3>Classy Watch</h3>
                        <h5>$60.50</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
