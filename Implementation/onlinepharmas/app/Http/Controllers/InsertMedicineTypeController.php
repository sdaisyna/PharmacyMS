<?php

namespace App\Http\Controllers;
use App\MedicineType;
use Illuminate\Http\Request;

class InsertMedicineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $medicine= new MedicineType();
        $medicines = $medicine->get();
        return view('medicine.insertmedicinetype', [
            'medicine' => $medicines
        ]); 
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
        // $this->validate(request(),[
        //     'medicine_type_name'=>'required |max:150',
        //     'image'=>'nullable'
        // ],[
        //     'medicine_type_name.required'=> 'Medicine type name is required'
        // ] );
    
        $medicinetype=new MedicineType;
        $medicinetype->medicine_type_name=$request->category_name;
        // $medicine->image=$form_req['image'];
            $medicinetype->save();
             return redirect()->to('/addmedicinetype')->with('success','Medicine category is added, successfully !');
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
