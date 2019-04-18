<?php

namespace App\Http\Controllers;
Use App\User;
Use DB;
Use App\Usertype;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindash()
    {
        return view('admin');
    }

    public function create()
    {
        $registeruser=DB::table('users')
        ->select('users.*')
        ->where('users.userTypeId','=','2')
        ->get();
        if($registeruser->isEmpty())
        {
            $reguser= null;

        }
        return view('medicine.registereduser',compact('registeruser'));
    }
}
