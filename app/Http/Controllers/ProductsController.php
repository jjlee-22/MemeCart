<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display all the product listings
     * 
     */
    public function index()
    {
        $products = Product::all();
        return view('products/index')->with('products', $products);
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {

    }
}
