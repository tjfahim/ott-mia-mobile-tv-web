<?php

namespace App\Http\Controllers\frontend;

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
}
