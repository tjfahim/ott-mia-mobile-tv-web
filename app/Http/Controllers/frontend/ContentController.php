<?php

namespace App\Http\Controllers\frontend;

use App\Genres;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movies;
use App\Series;

class ContentController extends Controller
{
    public function show($slug)
    {
        $movie = Movies::where('video_slug', $slug)->first();

        if(!$movie){
            return redirect()->back();
        }

        $allgenres = Genres::all();
        $genres = $movie->movie_genre_id;
        $genres = explode(',', $genres);
        $genres = array_map(function($item){
            return (int) $item;
        }, $genres);

        $genres = array_map(function($item) use($allgenres){
                foreach($allgenres as $single_gen){
                    if($item == $single_gen->id){
                        return $single_gen->genre_name;
                    }

                }
        }, $genres);




        return view('frontend.singleMoviePage', [
            'show' => $movie,
            'genres' => $genres
        ]);
    }


    public function play($slug)
    {
        $movie = Movies::where('video_slug', $slug)->first();

        if(!$movie){
            return redirect()->back();
        }

        return view('frontend.playMovies', [
            'video' => $movie,
            'url' => $movie->video_url
        ]);
    }




    // shows 
    public function serise_show($slug)
    {
        $show = Series::where('series_slug', $slug)->first();

        if(!$show){
            return redirect()->back();
        }

        $allgenres = Genres::all();
        $genres = $show->series_genres;
        $genres = explode(',', $genres);
        $genres = array_map(function($item){
            return (int) $item;
        }, $genres);

        $genres = array_map(function($item) use($allgenres){
                foreach($allgenres as $single_gen){
                    if($item == $single_gen->id){
                        return $single_gen->genre_name;
                    }

                }
        }, $genres);




        return view('frontend.singleShowPage', [
            'show' => $show,
            'genres' => $genres
        ]);
    }


    public function play_series($slug)
    {
        $show = Series::where('series_slug', $slug)->first();

   
        if(!$show){
            return redirect()->back();
        }

        return view('frontend.playMovies', [
            'video' => $show,
            'url' => $show->series_url
        ]);
    }

}
