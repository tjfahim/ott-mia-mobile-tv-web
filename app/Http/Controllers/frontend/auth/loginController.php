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
        // Exclude the _token field
        $data = $request->except('_token');

        // Define validation rules
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        // Run validation
        $validator = Validator::make($data, $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),  // Return the actual error messages
            ]);
        }

        // Attempt authentication
        if (Auth::attempt($data)) {
            return response()->json([
                'status' => 200,
                'message' => 'Login successful!',
            ]);
        } else {
            // Return an error response if authentication fails
            return response()->json([
                'status' => 401,
                'errors' => ['email' => 'These credentials do not match our records'],
            ]);
        }
    }

}
