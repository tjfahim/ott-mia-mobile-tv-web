<?php

namespace App\Http\Controllers\frontend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Favourite;

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

        $favorites = $user->favourites()->latest()->get();

        foreach($favorites as $fav){
            if($fav->item_type == 'movies'){
                $fav->load('movie');
            }elseif($fav->item_type == 'shows'){
                $fav->load('show');
            }
        }

        $favorites = $favorites->toArray();



        $favorites = array_map(function ($item) {
            return [
                'id' => $item['id'],
                'item' => $item['movie'] ?? $item['show'],
            ];

        }, $favorites);



        return view('frontend.favorite', compact('favorites'));
    }


    public function storefavourite(Request $request)
    {

        if(!Auth::check()){
            return response()->json([
                'success' => "Please create account or login account",
                'status' => 401,
            ]);
        }

        if(!$request->favourite_id){
            return response()->json([
                'error' => "Undefine show or category id"
            ]);
        }

        $user = Auth::user();


        $fav = $user->favourites()->create([
            'item_id' => $request->favourite_id,
            'item_type' => $request->video_type
        ]);

        // $fav = Favourite::create([
        //     'user_id' => $user->id,
        //     'item_id' => $request->favourite_id,
        //     'item_type' => $request->video_type
        // ]);

        if($fav){
            return response()->json([
                'success' => "Add to Favourite list successfully",
                'status' => 201,
            ]);
        }

    }

    public function removeFavourite(Request $request)
    {
        $show_id = $request->id;

        $user = Auth::user();

        $fav = $user->favourites()->find($show_id);

        if($fav){
            $fav->delete();

            return response()->json([
                'success' => "Remove from Favourite list",
                'status' => 200
            ]);
        }


    }
}
