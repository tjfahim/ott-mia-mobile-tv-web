<?php

namespace App\Http\Controllers\frontend;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faq;

class ContactController extends Controller
{
    public function index()
    {

        $faq = Faq::where('status', '1')->get();

        return view('frontend.contact', [
            'faqs' => $faq
        ]);
    }

    public function store(Request $request)
    {
        // $attributes = $request->validate([
        //     'first_name' => ['required'],
        //     'last_name' => ['required'],
        //     'email' => ['required', 'email'],
        //     'message' => ['required', 'min:15']
        // ]);


        $data = $request->except('_token');

        // Define validation rules
        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required', 'min:15']
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

        return response()->json([
            'status' => 'working this contact form'
        ]);


        $contact = Contact::create($attributes);

        session()->flash('success', 'Your message send successfully');

        return redirect('/');
    }
}
