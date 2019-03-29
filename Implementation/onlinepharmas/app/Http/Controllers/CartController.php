<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Cart;

class CartController extends Controller
{
  
	public function create(Request $request,$id)
	{
	   $cart =new Cart;
	   $cart->medicine_id=$id;
	   $cart->user_id=$request->user_id;
	   $cart->save();
	   return redirect()->back()->with('passed','Your medicine is added to cart !');
	}

	public function show(Cart $cart)
	{
		$user=auth()->user();
		$addtocart=DB::table('cart')->join('medicine','medicine.medicine_id','=','cart.medicine_id')
		->where('user_id',$user->id)->get();

		$total=0;

		foreach($addtocart as $addtocarts)
		{
			$total=$total+$addtocarts->rate;
		}

		return view('/cart',compact('addtocart','total'));
	}

	public function destroy($id)
    {
        $cart=Cart::find($id);

         $cart->delete();
        return redirect()->to('/cart');
    }
}
