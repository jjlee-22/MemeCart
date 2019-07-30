<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Order;
use DB;

class CheckoutController extends Controller
{
    public function index() 
    {
        return view('/checkout/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // Create Post
        $order = new Order;
        $order->first = $request->input('name');
        $order->body = $request->input('last');
        $order->save();

        return redirect('checkout')->with('success', 'Order Successful!');
    }
}
