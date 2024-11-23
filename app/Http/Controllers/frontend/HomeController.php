<?php

namespace App\Http\Controllers\frontend;

use App\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Genres;
use App\LiveTV;
use App\SubscriptionPlan;

class HomeController extends Controller
{
    public function index()
    {
        $genres = Genres::all();
        $liveStrim = LiveTV::all();

        //$plan = SubscriptionPlan::all();

        $faq = Faq::where('status', '1')->get();

        

        $monthly_plan = SubscriptionPlan::where('plan_days', 30)->get();
        $yearly_plan = SubscriptionPlan::where('plan_days', 365)->get();

        

        return view('frontend.index', [
            'genres' => $genres,
            'liveStrems' => $liveStrim,
            'monthly_plan' => $monthly_plan,
            'yearly_plan' => $yearly_plan,
            'faqs' => $faq
        ]);


    }
}