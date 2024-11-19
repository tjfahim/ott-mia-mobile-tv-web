<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use App\Movies;

class PlayVideo extends Controller
{
    public function movies($slug)
    {
        $movie = Movies::where('video_slug', $slug)->first();

        if(!$movie){
            return redirect()->back();
        }

        return view('frontend.playMovies', [
            'video' => $movie
        ]);
    }
}
