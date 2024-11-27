<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\LiveTV;
use App\Movies;
use Illuminate\Http\Request;
use App\Series;

class PlayController extends Controller
{
    public function index($slug, $type)
    {

        if($type === 'serise'){
            //return redirect('movie/'.$slug);
            $video = Series::where('series_slug', $slug)->first();


            return view('frontend.player', [
                'video' => $video,
                'url' => $video->series_url
            ]);
        }

        if($type === 'tv'){


             //return redirect('movie/'.$slug);
             $tv = LiveTV::where('channel_slug', $slug)->first();



             return view('frontend.player', [
                 'video' => $tv,
                 'url' => $tv->channel_url
             ]);
        }

        if($type === 'movie'){
            $movie = Movies::where('video_slug', $slug)->first();

            return view('frontend.player', [
                'video' => $movie,
                'url' => $movie->video_url
            ]);
        }
    }
}
