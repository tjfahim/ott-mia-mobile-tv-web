<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\LiveTV;
use Illuminate\Http\Request;
use App\YoutubeTiktokManage;
use App\LiveBroadcastManage;

class TvstationController extends Controller
{
    public function index()
    {

        $liveStrim = LiveTV::all();
        $tiktok = YoutubeTiktokManage::where('type', 'tiktok')->latest()->get();
        $youtub = YoutubeTiktokManage::where('type', 'youtube')->latest()->get();

        $live_broadCast = LiveBroadcastManage::all();


        return view('frontend.tvstation', [
            'tiktoks' => $tiktok,
            'youtubs' => $youtub,
            'liveStrems' => $liveStrim,
            'liveBroadCasts' => $live_broadCast
        ]);
    }
}
