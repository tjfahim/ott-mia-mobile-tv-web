<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function faqList()
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'FAQs';

        $faq_list = Faq::orderBy('id', 'DESC')->paginate(10);

        return view('admin.pages.faq_list', compact('page_title', 'faq_list'));
    }

    public function addFaq()
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Add FAQ';

        return view('admin.pages.addeditfaq', compact('page_title'));
    }

    public function addNew(Request $request)
    {
        $data = $request->except(['_token']);
        
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ];

        $validator = \Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }

        $faq = $request->id ? Faq::findOrFail($request->id) : new Faq;

        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->status = $request->status;

        $faq->save();

        $message = $request->id ? 'Successfully updated' : 'Added';
        Session::flash('flash_message', $message);

        return redirect()->back();
    }

    public function editFaq($faq_id)
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Edit FAQ';
        $faq_info = Faq::findOrFail($faq_id);

        return view('admin.pages.addeditfaq', compact('page_title', 'faq_info'));
    }

    public function delete($faq_id)
    {
        if (Auth::user()->usertype == "Admin" || Auth::user()->usertype == "Sub_Admin") {
            $faq = Faq::findOrFail($faq_id);
            $faq->delete();

            Session::flash('flash_message', 'Deleted');
            return redirect()->back();
        } else {
            Session::flash('flash_message', 'Access Denied');
            return redirect('admin/dashboard');
        }
    }
}
