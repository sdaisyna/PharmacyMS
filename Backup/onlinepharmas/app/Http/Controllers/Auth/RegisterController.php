<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:70',
            'phone_no' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'dateofbirth'=>'required|date_format:Y-m-d|before:today',
        ]);
        return back();

  
    }

    public function message()
    {
        return [
            'name.required' => 'A name attribute is required',
            'address.required'  => 'A price attribute is required',
            'image.required' => 'An image attribute is required'
        ];
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'gender'=>$data['sex'],  //gender is same from model(user.php) and  sex is the name given in form iput
            'dateofbirth'=>$data['dateofbirth'],
            'phone_no' => $data['phone_no'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'userTypeId'=>2,
        ]); 
    }
}