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
		//using eloquent(it uses model to find the database instead from DB)
	   $duplicate_medicine=Cart::where('medicine_id',$request->id)->
	   							where('user_id',$request->user_id)->count();
	   if($duplicate_medicine>0)
	   {
		   return back()->with('message','Medicine already added !');

	   }
	   else
	   {
		$cart =new Cart;
		$cart->medicine_id=$id;
		$cart->user_id=$request->user_id;
		$cart->save();
		return redirect()->back()->with('success','Your medicine is added to cart !');
	   }  
	    
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
