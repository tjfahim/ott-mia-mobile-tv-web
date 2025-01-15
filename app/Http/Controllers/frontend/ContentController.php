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




        $extension = pathinfo($url, PATHINFO_EXTENSION);

        if(!$extension){
            $extenstion =  "live";
        }





        // $client = new \GuzzleHttp\Client();


        // $request = $client->get($url);

        // $response = $request->getBody();



        //  dd($response);

        $extention = pathinfo($url, PATHINFO_EXTENSION);


        // return view('frontend.iptv', [
        //     'video' => $movie,
        //     'url' => $url
        // ]);

        return view('frontend.playMovies', [
            'video' => $movie,
            'url' => $url,
            'extention' => $extention
        ]);
    }




    // shows
    public function serise_show($slug)
    {
        $show = IpTVContent::where('id', $slug)->first();





        $show_name = preg_replace('/S\d{2}\sE\d{2}/', '', $show->name);
        $show_name = trim($show_name);


        $data = IpTVContent::where('name', 'like', '%' . $show_name . '%')->get();



        return view('frontend.singleShowPage', [
            'show' => $show,
            'genres' => [],
            'episodes' => $data,
            'show_name' => $show_name
        ]);



        // return "is working now";
        // $show = Series::where('series_slug', $slug)->first();

        // if(!$show){
        //     return redirect()->back();
        // }

        // $allgenres = Genres::all();
        // $genres = $show->series_genres;
        // $genres = explode(',', $genres);
        // $genres = array_map(function($item){
        //     return (int) $item;
        // }, $genres);

        // $genres = array_map(function($item) use($allgenres){
        //         foreach($allgenres as $single_gen){
        //             if($item == $single_gen->id){
        //                 return $single_gen->genre_name;
        //             }

        //         }
        // }, $genres);




        // return view('frontend.singleShowPage', [
        //     'show' => $show,
        //     'genres' => $genres
        // ]);
    }


    public function play_series($slug)
    {


        $show = IpTVContent::where('id', $slug)->first();






        if (!$show) {
            \Log::error("Movie not found for ID: " . $id);
            return redirect()->back()->withErrors(['error' => 'Movie not found.']);
        }

        // $url = str_replace('https://', 'http://', $movie->url);


        $url = $show->url;




        $extension = pathinfo($url, PATHINFO_EXTENSION);

        if(!$extension){
            $extenstion =  "live";
        }





        // $client = new \GuzzleHttp\Client();


        // $request = $client->get($url);

        // $response = $request->getBody();



        //  dd($response);

        $extention = pathinfo($url, PATHINFO_EXTENSION);


        // return view('frontend.iptv', [
        //     'video' => $movie,
        //     'url' => $url
        // ]);

        return view('frontend.playMovies', [
            'video' => $show,
            'url' => $url,
            'extention' => $extention
        ]);
    }

}
