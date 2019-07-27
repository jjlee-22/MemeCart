<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use DB;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products/index')->with('products', $products);
    }

    public function cart()
    {
        return view('products/cart');
    }

    public function addToCart()
    {
        Cart::add('192ao12', 'Product 1', 1, 9.99);
        Cart::add('1239ad0', 'Product 2', 2, 5.95, ['size' => 'large']);
        return view('products/cart');
    }
}
