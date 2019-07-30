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
        $items = Cart::content();
        $total = $subtotal = $tax = 0;

        foreach($items as $item) {
            $total += $item->total;
            $subtotal += $item->subtotal;
        }

        $tax = $total - $subtotal;

        $data = array(
            'items' => $items,
            'subtotal' => $subtotal,
            'total' => $total,
            'tax' => $tax
        );

        return view('cart/cart')->with($data);
    }

    public function addToCart($id, $name, $quantity, $price)
    {
        Cart::add($id, $name, $quantity, $price);
        return redirect('products')->with('success', 'Added To Cart!');
    }

    public function removeitem($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart')->with('success', 'Item Removed!');
    }

    public function emptycart() 
    {
        Cart::destroy();
        return redirect('cart')->with('success', 'Emptied Shopping Cart!');
    }

    public function updatecart(Request $request, $rowId)
    {
        Cart::update($rowId, $request->input('quantity'));
        return redirect('cart')->with('success', 'Cart Updated!');
    }
    
}
