<?php

namespace App\Http\Controllers;
use App\Medicine;
use Illuminate\Http\Request;

class InsertMedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('medicine.insertmedicine');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'medicine_name'=>'required |max:150',
            'description'=>'nullable|max:1200',
            'image'=>'nullable'
        ],[
            'medicine_name.required'=> 'Medicine name is required'
        ] );
        $req=request();
        $form_req=$req->all();
        $medicine=new Medicine();



        $medicine->medicine_name=$form_req['medicine_name'];
        $medicine->description=$form_req['description'];
        $medicine->rate=$form_req['rate'];
        // $medicine->image=$form_req['image'];
        $medicine->manufacture_date=$form_req['manufacture_date'];
        $medicine->expiry_date=$form_req['expiry_date'];
        // $medicine->vendor_id=1,
        $medicine->medicine_type_id=$form_req['medicine_type_id'];
      
        $status=$medicine->save();
        return redirect()->to('/insertmedicine');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
