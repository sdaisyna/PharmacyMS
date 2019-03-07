<?php

namespace App\Http\Controllers;
Use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindash()
    {
        return view('admin');
    }
}
