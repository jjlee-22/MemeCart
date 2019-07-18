<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	$data = array(
    		'title' => 'Welcome to MemeCart',
    		'desc' => 'Hahahaha'
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
