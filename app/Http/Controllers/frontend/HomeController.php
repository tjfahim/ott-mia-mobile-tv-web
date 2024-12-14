<?php

namespace App\Http\Controllers\frontend;

use App\Category;
use App\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Genres;
use App\LiveTV;
use App\Movies;
use App\Series;
use App\SubscriptionPlan;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public function index()
    {
        $genres = Genres::all();
        $liveStrim = LiveTV::all();
        $category = Category::all();
        $category = $category->map(function ($category) {
            $category->link = URL::to('vod/' . strtolower($category->name));
            return $category;
        });
        $movies = Movies::all();
        $series = Series::all();

        //$plan = SubscriptionPlan::all();

        $faq = Faq::where('status', '1')->get();



        $monthly_plan = SubscriptionPlan::where('plan_days', 30)->where('status', 1)->get();
        $yearly_plan = SubscriptionPlan::where('plan_days', 365)->where('status', 1)->get();



        return view('client_site.pages.home', [
            'genres' => $genres,
            'liveStrems' => $liveStrim,
            'monthly_plan' => $monthly_plan,
            'yearly_plan' => $yearly_plan,
            'category' => $category,
            'faqs' => $faq,
            'movies' => $movies,
            'series' => $series
        ]);


    }
}
