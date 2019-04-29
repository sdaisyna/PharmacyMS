<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Order;
use Carbon;
use App\Medicine;
use App\bill;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medicine.orderdetails');
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
        $order = new Order;

        $order->order_date = (Carbon\Carbon::now('Asia/Kathmandu')->toDateTimeString('Y-m-d H:i'));
        $order->quantity = $request->user_id;
        $order->medicine_id = $request->medicine_id;

        $status=$order->save();
        return redirect()->to('/cart')->withSuccess('success','Your have ordered successfully ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $viewOrders=DB::table('order')
        ->join('users','users.id','=','order.user_id')
        ->get();

        return view('medicine.orderedlist',compact('viewOrders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function order(Request $request)
    {
        $user = Auth()->user();
        DB::beginTransaction();
        try {
            if ($request->shipAddress==null && $request->contactNo==null ) {
                return ['success' => false, 'messageFail' =>'Please enter both shipping address and contact no.'];
            } 
            else
            {
                $order = new Order();
                $order->order_date = (Carbon\Carbon::now('Asia/Kathmandu')->toDateTimeString('Y-m-d H:i'));
                $order->user_id = $user->id;
                $order->shipping_address = $request->shipAddress;
                $order->phone_no = $request->contactNo;
                $order->save();
             
                $getOrder = DB::table('order')->select('order_id')->get()->last();
                foreach ($request->mId as $key => $v) {
                    $data = [
                        'order_id' => $getOrder->order_id,
                        'quantity'=> $request->qty [$key],
                        'medicine_id' => $request->mId [$key]
                            ];
                    bill::insert($data);
                }
            }   
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

        try {
            DB::table('cart')->where('user_id',$user->id)->delete();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        return ['success' => true, 'messagePass' => 'Your order was successful.']; 
    }
}
