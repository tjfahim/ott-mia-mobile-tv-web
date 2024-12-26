<?php

namespace App\Http\Controllers\frontend;

use App\Genres;
use App\HomeSection;
use App\Http\Controllers\Controller;
use App\IptvCategorie;
use App\IpTVContent;
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


        $search = request()->input('search');



        $sliders = Slider::all();

        $page_section = HomeSection::find(1);
        $movies_cat = explode(',', $page_section->movies_categories);
        $movies_cat = array_map(function($cat){
            return IptvCategorie::find($cat)->name;
        }, $movies_cat);


        $movies = array_map(function($cat) use($search){
            return [
                'title' => $cat,
                'content' => IpTVContent::where('title', $cat)
                                ->when($search, function($query, $search){
                                    return $query->where('name', 'like', '%'.$search.'%');
                                })
                                ->whereNotNull('image')
                                ->where('image', '!=', '')->limit(5)->get()
            ];
        }, $movies_cat);


        $iptv_cate = IptvCategorie::all();


        return view('frontend.vod.movies', compact('sliders', 'movies', 'iptv_cate'));
        // return view('frontend.vod.movies', compact('sliders', 'Netflix_Movies_all', '_4k_netflix_movies', 'Disney_Kids_all', 'Disney_Movies_all', 'Gangster_Mafia_all', 'Apple_Movies_all'));
    }


    public function allMovies()
    {
         $categorie = request()->input('categorie');
         $search = request()->input('search');



        $movies = IpTVContent::where('title', 'like', '%' . $categorie . '%')
        ->when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })
        ->paginate(20)
        ->appends(['categorie' => $categorie, 'search' => $search]);


        $iptv_cate = IptvCategorie::all();


        return view('frontend.vod.allMovies', compact('categorie', 'movies', 'iptv_cate'));
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

        $page_section = HomeSection::find(1);
        $movies_cat = explode(',', $page_section->shows_categories);
        $movies_cat = array_map(function($cat){
            return IptvCategorie::find($cat)->name;
        }, $movies_cat);


        $movies = array_map(function($cat){
            return [
                'title' => $cat,
                'content' => IpTVContent::where('title', $cat)
                    ->whereNotNull('image')->where('image', '!=', '')->limit(5)->get()
            ];
        }, $movies_cat);



        return view('frontend.vod.shows', compact('sliders', 'movies'));


        //  return view('frontend.vod.shows', compact('sliders', 'Netflix_shows_all', '_4k_netflix_shows_all', 'Disney_Kids_shows_all', 'Disney_shows_all', 'Gangster_Mafia_shows_all', 'Apple_shows_all'));
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

    $search = request()->input('search');


    // Retrieve the data with pagination
    $lives = IpTVContent::where('tvg-id', '!=', '')
    ->when($search, function ($query, $search) {
        return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('tvg-id', 'like', '%' . $search . '%')
            ->orWhere('title', 'like', '%' . $search . '%');
    })
    ->get();

    // Function to extract base name (ignoring suffixes like "HD", "FHD", "HEVC", etc.)
    $getBaseName = function($name) {
        return preg_replace('/\s*(HD|FHD|HEVC)$/i', '', $name);
    };

    // Group the channels by base name and get the first channel from each group
    $groupedLives = $lives->groupBy(function ($item) use ($getBaseName) {
        return $getBaseName($item->name);
    })->map(function ($group) {
        return $group->first();
    });

    // Reset the keys after grouping
    $groupedLives = $groupedLives->values();

    // Paginate the grouped data
    $paginatedLives = new \Illuminate\Pagination\LengthAwarePaginator(
        $groupedLives->forPage(request()->get('page', 1), 20),  // Correct pagination per page and current page
        $groupedLives->count(),
        20,
        request()->get('page', 1),
        ['path' => url()->current()]
    );

    // Pass the paginated data to the view
    return view('frontend.vod.lives', compact('paginatedLives'));
}


        //return $lives;






}
