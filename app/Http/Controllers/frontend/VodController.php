<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Movies;
use App\Series;
use App\LiveTV;
use App\LiveBroadcastManage;
use Illuminate\Http\Request;

class VodController extends Controller
{
    public function index()
    {
        $recent_movies = Movies::latest()->get();
        $movies = Movies::all();
        $series = Series::all();
        $recent_shows = Series::all();
        $recent_lives = LiveBroadcastManage::all();
        $liveTV = LiveTV::all();

     


        return view('frontend.vod', [
            'recent_movies' => $recent_movies,
            'movies' => $movies,
            'series' => $series,
            'recent_shows' => $recent_shows,
            'recent_lives' => $recent_lives,
            'livetv' => $liveTV
        ]);
    }
}
