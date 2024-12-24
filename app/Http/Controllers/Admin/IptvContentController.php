<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IpTVContent;
use Illuminate\Http\Request;

class IptvContentController extends Controller
{
    public function index()
    {
        // $data = IpTVContent::where('name', 'SWE| SVT 1 HD')->get();
        //$data = IpTVContent::where('title', '|EN| 4K CHILDREN')->get();

        $category = IpTVContent::select('title')->groupBy('title')->get();


        // $ = IpTVContent::where('title', '|EN| 4K CHILDREN')->get();

        return $category;
    }
}
