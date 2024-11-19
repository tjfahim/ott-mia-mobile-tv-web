<?php

namespace App\Http\Controllers\frontend\auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index()
    {
        return view('frontend.auth.register');
    }

    public function store()
    {
        $data =  \Request::except(array('_token'));


        $rule = [
            'name' => 'required',
            'email' => 'required|email|max:200|unique:users',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ];



        $validator = Validator::make($data, $rule);



        if($validator->fails()){
            return redirect()->back()->withErrors($validator->messages());
        }

        $user = new User;



        $user->usertype = 'User';
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        if($user){
            return redirect()->to('/login');
        }

        // store
        // redirect login page

    }
}
