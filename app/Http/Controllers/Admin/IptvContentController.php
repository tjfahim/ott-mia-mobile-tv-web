<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\IptvCategorie;
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

    public function categoriSet()
    {
        $category = IpTVContent::select('title')->groupBy('title')->get();

        foreach ($category as $cat){
            $cat = trim($cat->title);

            if(strlen($cat)){
                IptvCategorie::create(['name' => $cat]);
            }
        }

        return "Category set successfully";
    }


}
