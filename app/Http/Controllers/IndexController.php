<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('welcome')->with('products', $product);
    }

}
