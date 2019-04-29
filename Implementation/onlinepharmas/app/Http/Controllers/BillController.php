<?php

namespace App\Http\Controllers;

use App\bill;
use Illuminate\Http\Request;
use DB;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $orders = DB::table('order')->where('user_id', $user->id)->get();
        return view('medicine.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $bill = DB::table('order')->where('order_id', $request->mId)->get()->first();

        $billMedicine = DB::table('bill')
            ->join('medicine', 'medicine.medicine_id','=','bill.medicine_id')
            ->where('bill.order_id', $request->mId)
            ->get();

        return view('medicine.bill', compact('bill', 'billMedicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(bill $bill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(bill $bill)
    {
        //
    }

    public function showAdminBill(Request $request)
    {
        $bill = DB::table('order')->where('order_id', $request->orderid)->get()->first();

        $billMedicine = DB::table('bill')
            ->join('medicine', 'medicine.medicine_id','=','bill.medicine_id')
            ->where('bill.order_id', $request->orderid)
            ->get();

        return view('medicine.adminBill', compact('bill', 'billMedicine'));
    }
}
