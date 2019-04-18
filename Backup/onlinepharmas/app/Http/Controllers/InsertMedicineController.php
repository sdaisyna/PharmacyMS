<?php

namespace App\Http\Controllers;
use App\Medicine;
use App\MedicineType;
use Illuminate\Http\Request;
use DB;

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
            'description'=>'required|max:1200',
        ],[
            'medicine_name.required'=> 'Medicine name is required'
        ] );

        $req=request();
        $form_req=$req->all();
        $medicine=new Medicine();


        $pictureInfo = $request->file('image');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "itemImages/";

        $pictureInfo->move($folder,$picName);

        $picUrl = $folder.$picName;
        if(MedicineType::where('image', '=', $picUrl)->exists()) //Medicine from model name.
        {
            return redirect('/addmedicine')->with('itemNameExists','Please!!insert image with another name');
        }

 

        $medicine->medicine_name=$form_req['medicine_name'];
        $medicine->medicine_type_id=$form_req['medicine_type_name'];
        $medicine->description=$form_req['description'];
        $medicine->rate=$form_req['rate'];
        $medicine->image=$picUrl;
        $medicine->manufacture_date=$form_req['manufacture_date'];
        $medicine->expiry_date=$form_req['expiry_date'];  
        $medicine->quantity=$form_req['qty']; 
        $status=$medicine->save();
        return redirect()->to('/addmedicine')->with('success','Medicine successfully added!');



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
         $medicine=Medicine::find($id);

         $medicinetype = new MedicineType();
        $medicinetype = $medicinetype->get();
        return view('medicine.updatemedicine',['medicine'=>$medicine],[
            'medicinetype'=>$medicinetype]);
        //return view('medicine.updatemedicine')->with('medicine',$medicine); 
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
        $medicine=Medicine::find($id);
        if($request->hasFile('image'))
        {
            $pictureInfo=$request->file('image');
            $name=$pictureInfo->getClientOriginalName();
            $folder="itemImages/";
            $pictureInfo->move($folder,$name);
            $picUrl=$folder.$name;

        
            $medicine->medicine_name=$request->medicine_name;
            $medicine->medicine_type_id=$request->medicine_type_name;
            $medicine->description=$request->description;
            $medicine->rate=$request->rate;
            $medicine->image=$picUrl;
            $medicine->manufacture_date=$request->manufacture_date;
            $medicine->expiry_date=$request->expiry_date;
            $medicine->quantity=$request->qty;

            
            $medicine->save();
        }

        else
        {
            $medicine->medicine_name=$request->medicine_name;
            $medicine->medicine_type_id=$request->medicine_type_name;
            $medicine->description=$request->description;
            $medicine->rate=$request->rate;
            $medicine->manufacture_date=$request->manufacture_date;
            $medicine->expiry_date=$request->expiry_date;
            $medicine->quantity=$request->qty;

            $medicine->save();

        }
        return redirect()->to('/addmedicine');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine=Medicine::find($id);

         $medicine->delete(); 
        return redirect()->to('/addmedicine')->withSuccess('Medicine deleted successfully !');
    }

    
    public function getMedicineType()
    {
        $medicinetype = new MedicineType();
        $medicinetype = $medicinetype->get();

        $medicine = DB::table('medicine')
        ->join('medicine_type','medicine_type.medicine_type_id','=','medicine.medicine_type_id')  
        ->select('medicine_type.*','medicine.*') 
        ->get();     
        return view('medicine.insertmedicine',compact('medicinetype','medicine'));
    }


}
