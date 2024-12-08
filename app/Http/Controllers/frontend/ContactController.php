<?php

namespace App\Http\Controllers\frontend;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faq;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {

        $faq = Faq::where('status', '1')->get();

        return view('frontend.contact', [
            'faqs' => $faq
        ]);
    }

    public function storeOld(Request $request)
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
            'message' => ['required']
        ];

        // Run validation
        $validator = Validator::make($data, $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ]);
        }
        return response()->json([
            'status' => 'working this contact form'
        ]);


        $contact = Contact::create($attributes);

        session()->flash('success', 'Your message send successfully');

        return redirect('/');
    }


public function store(Request $request)
{
    $data = $request->except('_token');

    // Validation rules
    $rules = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'message' => ['required']
    ];

    // Validate data
    $validator = Validator::make($data, $rules);

    if ($validator->fails()) {
        return response()->json([
            'status' => 400,
            'errors' => $validator->errors(),
        ]);
    }

    // Save the contact
    Contact::create($data);

    return response()->json([
        'status' => 200,
        'message' => 'Message sent successfully!',
    ]);
}
}
