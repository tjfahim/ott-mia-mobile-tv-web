<?php

namespace App\Http\Controllers\frontend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function info()
    {
        $user = Auth::user();



        return view('frontend.user.accountInfo', [
            'user' => $user
        ]);
    }


    public function subscripbtion()
    {
        return view('frontend.user.subScripPlan');
    }

    public function deviceInfo()
    {
        return view('frontend.user.device');
    }

    public function preferences()
    {
        return view('frontend.user.preferences');
    }

    public function favorite()
    {
        $user = Auth::user();

        $favorites = $user->favorites()->latest()->get();
        $favorites = $favorites->load('movie');
      
        return view('frontend.favorite', compact('favorites'));
    }
}
