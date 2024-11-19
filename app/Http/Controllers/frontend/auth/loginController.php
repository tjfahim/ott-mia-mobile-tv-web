<?php

namespace App\Http\Controllers\frontend\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class loginController extends Controller
{
    public function index()
    {
        return view('frontend.auth.login');
    }

    public function store(Request $request)
    {


        $data =  \Request::except(array('_token'));

        $rule = array(
            'email' => 'required|email',
            'password' => 'required'
        );

        $validator = Validator::make($data, $rule);



        if($validator->fails()){
            Session::flash('login_flash_error', 'required');
            return redirect()->back()->withErrors($validator->messages());
        }

        if(Auth::attempt($data)){
            return redirect('/');
        }else{
            return redirect()->back()->withErrors([
                'email' => 'These credentials do not match our records'
            ]);
        }

    }
}
