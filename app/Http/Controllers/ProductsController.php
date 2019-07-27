<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use DB;

class ProductsController extends Controller
{
    /**
     * Display all the product listings
     * 
     */
    public function index()
    {
        $products = Product::groupBy('name')->get();
        return view('products/index')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        $product_listing = Product::where('name', '=', $products->name)->get();

        $data = [
            'products' => $products,
            'product_listing' => $product_listing
        ];

        return view('products/show')->with($data);
    }
}
