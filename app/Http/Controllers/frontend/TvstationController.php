<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;


use App\YoutubeTiktokManage;



use App\Movies;
use App\Series;
use App\LiveTV;
use App\LiveBroadcastManage;
use Illuminate\Http\Request;

class TvstationController extends Controller
{
    // public function index()
    // {

    //     $liveStrim = LiveTV::all();
    //     $tiktok = YoutubeTiktokManage::where('type', 'tiktok')->latest()->get();
    //     $youtub = YoutubeTiktokManage::where('type', 'youtube')->latest()->get();

    //     $live_broadCast = LiveBroadcastManage::all();


    //     return view('frontend.tvstation', [
    //         'tiktoks' => $tiktok,
    //         'youtubs' => $youtub,
    //         'liveStrems' => $liveStrim,
    //         'liveBroadCasts' => $live_broadCast
    //     ]);
    // }

    public function index()
    {
        $recent_movies = Movies::latest()->get();
        $movies = Movies::all();
        $series = Series::all();
        $recent_shows = Series::all();
        $recent_lives = LiveBroadcastManage::all();
        $liveTV = LiveTV::all();




        return view('frontend.tvstation', [
            'recent_movies' => $recent_movies,
            'movies' => $movies,
            'series' => $series,
            'recent_shows' => $recent_shows,
            'recent_lives' => $recent_lives,
            'livetv' => $liveTV
        ]);
    }
}
