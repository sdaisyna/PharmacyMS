<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
{
    public function viewcart()
    {
    	if(Auth::check())
        
    	{

          return view('cart');
    	}
    	else
    	{
    		return view('auth.login');
    	}
    }
}
