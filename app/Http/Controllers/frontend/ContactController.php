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
        $attributes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'message' => ['required', 'min:15']
        ]);


        $contact = Contact::create($attributes);

        session()->flash('success', 'Your message send successfully');

        return redirect('/');
    }
}
