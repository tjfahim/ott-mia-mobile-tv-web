<?php

namespace App\Http\Controllers\frontend;

use App\Genres;
use App\Http\Controllers\Controller;
use App\Movies;
use App\Series;
use App\LiveTV;
use App\Slider;
use App\LiveBroadcastManage;
use Illuminate\Http\Request;

class VodController extends Controller
{
    public function movies()
    {
        $recent_movies = Movies::latest()->get();
        $movies = Movies::all();
        $series = Series::all();
        $recent_shows = Series::all();
        $recent_lives = LiveBroadcastManage::all();
        $liveTV = LiveTV::all();



        $Netflix_Movies_genre_id = Genres::where('genre_slug', 'netflix-_movies')->get()->first()->id;
        $_4k_netflix_movies_id = Genres::where('genre_slug', '4k-netflix-movies')->get()->first()->id;
        $Disney_Kids_genre_id = Genres::where('genre_slug', 'disney-kids')->get()->first()->id;
        $Disney_Movies_en_genre_id = Genres::where('genre_slug', 'disney-movies')->get()->first()->id;
        $Gangster_Mafia_genre_id = Genres::where('genre_slug', 'en-gangster-mafia')->get()->first()->id;
        $Apple_Movies_genre_id = Genres::where('genre_slug', 'apple-movies')->get()->first()->id;


        $Netflix_Movies_all = [];
        $_4k_netflix_movies = [];
        $Disney_Kids_all = [];
        $Disney_Movies_all = [];
        $Gangster_Mafia_all = [];
        $Apple_Movies_all = [];



        foreach($movies as $movie){
            $genre_ids = explode(',', $movie->movie_genre_id);

            // serach id matching or not
            foreach($genre_ids as $gen_id){

                switch($gen_id){
                    case $Netflix_Movies_genre_id:
                        array_push($Netflix_Movies_all, $movie);
                        break;
                    case $_4k_netflix_movies_id:
                        array_push($_4k_netflix_movies, $movie);
                        break;
                    case $Disney_Kids_genre_id:
                        array_push($Disney_Kids_all, $movie);
                        break;
                    case $Disney_Movies_en_genre_id:
                        array_push($Disney_Movies_all, $movie);
                        break;
                    case $Gangster_Mafia_genre_id:
                        array_push($Gangster_Mafia_all, $movie);
                        break;
                    case $Apple_Movies_genre_id:
                            array_push($Apple_Movies_all, $movie);
                            break;

                }

            }
        }


        $Netflix_Movies_all  = count($Netflix_Movies_all) > 5 ? array_slice($Netflix_Movies_all, 0, 5) :  $Netflix_Movies_all ;
        $_4k_netflix_movies  = count($_4k_netflix_movies) > 5 ? array_slice($_4k_netflix_movies, 0, 5) :  $_4k_netflix_movies ;
        $Disney_Kids_all  = count($Disney_Kids_all) > 5 ? array_slice($Disney_Kids_all, 0, 5) :  $Disney_Kids_all ;
        $Disney_Movies_all  = count($Disney_Movies_all) > 5 ? array_slice($Disney_Movies_all, 0, 5) :  $Disney_Movies_all ;
        $Gangster_Mafia_all  = count($Gangster_Mafia_all) > 5 ? array_slice($Gangster_Mafia_all, 0, 5) :  $Gangster_Mafia_all ;
        $Apple_Movies_all  = count($Apple_Movies_all) > 5 ? array_slice($Apple_Movies_all, 0, 5) :  $Apple_Movies_all ;




        // return $Netflix_Movies_genre_id;
        // $Netflix_Movies = Movies::where('');
        // // $4K_Netflix_Movies
        // // $Disney_Kids
        // // $Disney_Movies_en
        // // $Gangster_Mafia
        // // $Apple_Movies

        $sliders = Slider::all();

        return view('frontend.vod.movies', compact('sliders', 'Netflix_Movies_all', '_4k_netflix_movies', 'Disney_Kids_all', 'Disney_Movies_all', 'Gangster_Mafia_all', 'Apple_Movies_all'));
    }


    public function allMovies()
    {
        $categorie = request()->input('categorie');



        switch($categorie){
            case 'Netflix Movies':
                $genre_id = Genres::where('genre_slug', 'netflix-_movies')->get()->first()->id;
                break;
            case '4K Netflix Movies':
                $genre_id = Genres::where('genre_slug', '4k-netflix-movies')->get()->first()->id;
                break;
            case 'Disney Kids':
                $genre_id = Genres::where('genre_slug', 'disney-kids')->get()->first()->id;
                break;
            case 'Disney Movies':
                $genre_id = Genres::where('genre_slug', 'disney-movies')->get()->first()->id;
                break;
            case 'GangsterAndMafia':
                $genre_id = Genres::where('genre_slug', 'en-gangster-mafia')->get()->first()->id;
                break;
            case 'Apple Movies':
                $genre_id = Genres::where('genre_slug', 'apple-movies')->get()->first()->id;
                break;
           
        }

        
        $movies_all = Movies::all();

        $movies = [];

        foreach($movies_all as $movie){
            $genre_ids = explode(',', $movie->movie_genre_id);
            
            foreach($genre_ids as $gen_id){
                if($gen_id == $genre_id){
                    array_push($movies, $movie);
                }
            }

        }



    
        return view('frontend.vod.allMovies', compact('categorie', 'movies'));
    }

    public function shows()
    {
        $shows = Series::all();

        $Netflix_shows_genre_id = Genres::where('genre_slug', 'netflix-_movies')->get()->first()->id;
        $_4k_netflix_shows_id = Genres::where('genre_slug', '4k-netflix-movies')->get()->first()->id;
        $Disney_Kids_shows_genre_id = Genres::where('genre_slug', 'disney-kids')->get()->first()->id;
        $Disney_shows_en_genre_id = Genres::where('genre_slug', 'disney-movies')->get()->first()->id;
        $Gangster_Mafia_shows_genre_id = Genres::where('genre_slug', 'en-gangster-mafia')->get()->first()->id;
        $Apple_shows_genre_id = Genres::where('genre_slug', 'apple-movies')->get()->first()->id;


        
        $Netflix_shows_all = [];
        $_4k_netflix_shows_all = [];
        $Disney_Kids_shows_all = [];
        $Disney_shows_all = [];
        $Gangster_Mafia_shows_all = [];
        $Apple_shows_all = [];


        foreach($shows as $show){
            $genre_ids = explode(',', $show->series_genres);

            // serach id matching or not
            foreach($genre_ids as $gen_id){

                switch($gen_id){
                    case $Netflix_shows_genre_id:
                        array_push($Netflix_shows_all, $show);
                        break;
                    case $_4k_netflix_shows_id:
                        array_push($_4k_netflix_shows_all, $show);
                        break;
                    case $Disney_Kids_shows_genre_id:
                        array_push($Disney_Kids_shows_all, $show);
                        break;
                    case $Disney_shows_en_genre_id:
                        array_push($Disney_shows_all, $show);
                        break;
                    case $Gangster_Mafia_shows_genre_id:
                        array_push($Gangster_Mafia_shows_all, $show);
                        break;
                    case $Apple_shows_genre_id:
                        array_push($Apple_shows_all, $show);
                        break;

                }

            }
        }

        $Netflix_shows_all  = count($Netflix_shows_all) > 5 ? array_slice($Netflix_shows_all, 0, 5) :  $Netflix_shows_all ;
        $_4k_netflix_shows_all  = count($_4k_netflix_shows_all) > 5 ? array_slice($_4k_netflix_shows_all, 0, 5) :  $_4k_netflix_shows_all ;
        $Disney_Kids_shows_all  = count($Disney_Kids_shows_all) > 5 ? array_slice($Disney_Kids_shows_all, 0, 5) :  $Disney_Kids_shows_all ;
        $Disney_shows_all  = count($Disney_shows_all) > 5 ? array_slice($Disney_shows_all, 0, 5) :  $Disney_shows_all ;
        $Gangster_Mafia_shows_all  = count($Gangster_Mafia_shows_all) > 5 ? array_slice($Gangster_Mafia_shows_all, 0, 5) :  $Gangster_Mafia_shows_all ;
        $Apple_shows_all  = count($Apple_shows_all) > 5 ? array_slice($Apple_shows_all, 0, 5) :  $Apple_shows_all ;


        $sliders = Slider::all();


         return view('frontend.vod.shows', compact('sliders', 'Netflix_shows_all', '_4k_netflix_shows_all', 'Disney_Kids_shows_all', 'Disney_shows_all', 'Gangster_Mafia_shows_all', 'Apple_shows_all'));
    }

    public function allShows()
    {
        $categorie = request()->input('categorie');



        switch($categorie){
            case 'Netflix Movies':
                $genre_id = Genres::where('genre_slug', 'netflix-_movies')->get()->first()->id;
                break;
            case '4K Netflix Movies':
                $genre_id = Genres::where('genre_slug', '4k-netflix-movies')->get()->first()->id;
                break;
            case 'Disney Kids':
                $genre_id = Genres::where('genre_slug', 'disney-kids')->get()->first()->id;
                break;
            case 'Disney Movies':
                $genre_id = Genres::where('genre_slug', 'disney-movies')->get()->first()->id;
                break;
            case 'GangsterAndMafia':
                $genre_id = Genres::where('genre_slug', 'en-gangster-mafia')->get()->first()->id;
                break;
            case 'Apple Movies':
                $genre_id = Genres::where('genre_slug', 'apple-movies')->get()->first()->id;
                break;
           
        }

        
        $series_all = Series::all();

        $shows = [];

        foreach($series_all as $show){
            $genre_ids = explode(',', $show->series_genres);
            
            foreach($genre_ids as $gen_id){
                if($gen_id == $genre_id){
                    array_push($shows, $show);
                }
            }

        }



    
        return view('frontend.vod.allMovies', compact('categorie', 'shows'));
    }

    public function lives()
    {
        return view('frontend.vod.lives');
    }
}
