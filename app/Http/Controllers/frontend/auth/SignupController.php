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

    public function store(Request $request)
    {
        // Exclude the _token field
        $data = $request->except('_token');

        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',  // Ensures email is unique in the users table
            'password' => 'required|string|min:8|confirmed',  // Password confirmation check
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



        try {
            // Create the new user (hash the password before saving)
            $user = new User();
            $user->name = $data['name'];
            $user->last_name = $data['last_name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);  // Hash the password
            $user = $user->save();  // Save the user to the database

            // Respond with a success message
            return response()->json([
                'status' => 200,
                'message' => $user
            ]);

        } catch (\Exception $e) {
            // Return an error if there's an issue with saving the user
            return response()->json([
                'status' => 500,
                'errors' => ['error' => 'An error occurred while registering the user. Please try again later.'],
            ]);
        }
    }

}
