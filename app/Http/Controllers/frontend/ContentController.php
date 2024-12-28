<?php

namespace App\Http\Controllers\frontend;

use App\Genres;
use App\Http\Controllers\Controller;
use App\IpTVContent;
use Illuminate\Http\Request;
use App\Movies;
use App\Series;

class ContentController extends Controller
{
    public function show($id)
    {

        // $movie = Movies::where('video_slug', $slug)->first();

        $movie = IpTVContent::find($id);




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


    public function play($id)
    {
        $movie = IpTVContent::where('id', $id)->first();



        if (!$movie) {
            \Log::error("Movie not found for ID: " . $id);
            return redirect()->back()->withErrors(['error' => 'Movie not found.']);
        }

        // $url = str_replace('https://', 'http://', $movie->url);


        $url = $movie->url;





        // $client = new \GuzzleHttp\Client();

        // $request = $client->get($url);

        // $response = $request->getBody();



        //  dd($response);



        return view('frontend.playMovies', [
            'video' => $movie,
            'url' => $url
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
