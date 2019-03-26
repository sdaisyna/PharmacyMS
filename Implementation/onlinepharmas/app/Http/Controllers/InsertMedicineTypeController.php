<?php 

namespace App\Http\Controllers;
use App\MedicineType;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

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
    public function create($id)
    {
        return view ('medicine.insertmedicinetype');
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

        $pictureInfo = $request->file('image');

        $picName = $pictureInfo->getClientOriginalName();

        $folder = "itemImages/";

        $pictureInfo->move($folder,$picName);

        $picUrl = $folder.$picName;
        if(MedicineType::where('image', '=', $picUrl)->exists()) //Product from model name.
        {
            return redirect('/addmedicinetype')->with('itemNameExists','Please!!insert image with another name');
        }
 


        $medicinetype->medicine_type_name=$request->category_name;
        $medicinetype->image=$picUrl;
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
       $medicinetype=MedicineType::find($id);
        return view('medicine.updatemedicinetype')->with('medicinetype',$medicinetype); 
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
        $medicinetype=MedicineType::find($id);
        if($request->hasFile('image'))
        {
            $pictureInfo=$request->file('image');
            $name=$pictureInfo->getClientOriginalName();
            $folder="itemImages/";
            $pictureInfo->move($folder,$name);
            $picUrl=$folder.$name;

            $medicinetype->image=$picUrl;
            $medicinetype->medicine_type_name=$request->category_name;
            $medicinetype->save();
        }

        else
        {
            $medicinetype->medicine_type_name=$request->category_name;
            $medicinetype->save();
        }
        return redirect()->to('/addmedicinetype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine=MedicineType::find($id);

         $medicine->delete();
            return redirect()->to('/addmedicinetype')->withSuccess('Category deleted successfully !'); 
    }
    public function medcategory()
    {
        $medicinetype=new MedicineType();
        $medicinetype=$medicinetype->get();

        $medicine=new Medicine();
        $medicine=$medicine->get();



        return view('medicine',compact('medicinetype','medicine'));
    }
}
