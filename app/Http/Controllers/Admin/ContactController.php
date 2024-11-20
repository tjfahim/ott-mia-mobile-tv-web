<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class ContactController extends Controller
{
    public function index()
    {
        $page_title = 'Contact page';

        return view('admin.pages.contacts', [
            'page_title' => $page_title,
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function replay($id)
    {
        $contact  = Contact::find($id);

        $contact->read = 1;
        $contact->save();

        \Session::flash('flash_message', trans('Replay Done'));


        return redirect()->back();
    }
}
