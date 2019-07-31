<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class PagesController extends Controller
{
    public function index() {
		$products = Product::orderBy('created_at','desc')->limit(3)->get();

    	$data = array(
    		'title' => 'MemeCart',
			'desc' => 'As memes are becoming more and more sophisticated, so is the market! Higher quality memes mean more high-level effort from meme artists. We aim to support these artists by selling you their highest-quality works of art without encountering any copyright issues.',
			'products' => $products
    	);

    	return view('pages/index')->with($data);
    }

    public function about() {
    	$data = array(
    		'title' => 'About MemeCart',
    		'desc' => 'Buy all the memes! The internet is no longer free!'
    	);

    	return view('pages/about')->with($data);
    }

    public function service() {
    	$data = array(
    		'title' => 'Services from Memecart',
    		'desc' => ['We do not support customer support', 'and we also hate you']
    	);

    	return view('pages/service')->with($data);
    }
}
