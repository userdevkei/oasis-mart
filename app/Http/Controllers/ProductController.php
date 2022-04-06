<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index_products')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'type' => 'required|string|in:Electronics,Software,Service',
            'category' => 'required|string',
            'model' => 'required|string',
            'b-price' => 'required|string',
            's-price' => 'required|string',
            'status' => 'required|string|in:Brand new,Refurbished',
            'availability' => 'required|string|in:In stock,Out of stock',
            'description' => 'required|string|max:500',
            'cover_image' => 'required|image|max:4000',
        ]);

        if ($request->hasFile('cover_image')) {
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('cover_image')->storeAs('public/images', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $product = new Product();
        $product->name = $request->input('name');
        $product->type = $request->input('type');
        $product->category = $request->input('category');
        $product->model = $request->input('model');
        $product->quantity = $request->input('quantity');
        $product->b_price = $request->input('b-price');
        $product->s_price = $request->input('s-price');
        $product->status = $request->input('status');
        $product->availability = $request->input('availability');
        $product->description = $request->input('description');
        $product->serial = Str::random(8);
        $product->cover_images = $fileNameToStore;
        $product->save();

        return redirect('product')->with('success', 'data uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.single_item')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit_product')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'type' => 'required|string|in:Electronics,Software,Service',
            'category' => 'required|string',
            'model' => 'required|string',
            'b-price' => 'required|string',
            's-price' => 'required|string',
            'status' => 'required|string|in:Brand new,Refurbished',
            'availability' => 'required|string|in:In stock,Out of stock',
            'description' => 'required|string|max:500',
            'cover_image' => 'image|max:4000',
        ]);

        if ($request->hasFile('cover_image')) {
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('cover_image')->storeAs('public/images', $fileNameToStore);

        }

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->type = $request->input('type');
        $product->category = $request->input('category');
        $product->model = $request->input('model');
        $product->quantity = $request->input('quantity');
        $product->b_price = $request->input('b-price');
        $product->s_price = $request->input('s-price');
        $product->status = $request->input('status');
        $product->availability = $request->input('availability');
        $product->description = $request->input('description');
        if ($request->hasFile('cover_image')){
            $product->cover_images = $fileNameToStore;
        }
        $product->save();

        return redirect('product')->with('success', 'data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cart(Request $request, $id)
    {
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);

        $products = Product::find($id);
        $cart->addItems($id, $products);

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }


    public function viewCart()
    {
        $cart = Session::get('cart');
        if ($cart)
        {
            return view('product.cart')->with('cartItems', $cart);
        }else
        {
            return redirect('/');
        }
    }
    public function removeItem(Request $request, $id)
    {
        $cart = $request->session()->get('cart');
        if (array_key_exists($id,$cart->items))
        {
           unset($cart->items[$id]);
        }
        $prevCart = $request->session()->get('cart');
        $updatedCart = new Cart($prevCart);
        $updatedCart->updatePriceandQuantity();

        $request->session()->put('cart', $updatedCart);

        return redirect()->back()->with('success', 'Item(s) removed successfully');
    }
}
