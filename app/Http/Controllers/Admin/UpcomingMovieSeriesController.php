<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UpcomingMovieSeries;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UpcomingMovieSeriesController extends Controller
{
    // Constructor to apply middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display the list of upcoming movies/series
    public function index()
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Upcoming Movies & Series';
        $movie_series_list = UpcomingMovieSeries::orderBy('id', 'DESC')->paginate(10);

        return view('admin.pages.upcoming_movie_series_list', compact('page_title', 'movie_series_list'));
    }

    // Show the form to add a new upcoming movie/series
    public function create()
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Add Upcoming Movie/Series';
        return view('admin.pages.addedit_upcoming_movie_series', compact('page_title'));
    }

    // Store a new upcoming movie/series or update an existing one
    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        // Validation rules
        $rules = [
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'release_date' => 'nullable|date',
            'type' => 'required|string',
            'status' => 'required|string',
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }

        // Check if it's an update or a new entry
        $movie_series = $request->id ? UpcomingMovieSeries::findOrFail($request->id) : new UpcomingMovieSeries;

        $movie_series->title = $request->title;
        $movie_series->description = $request->description;
        $movie_series->release_date = $request->release_date;
        $movie_series->type = $request->type;
        $movie_series->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('upcoming_movies_series_images', 'public');
            $movie_series->image = $imagePath;
        }

        // Save the movie/series
        $movie_series->save();

        // Flash message for success
        $message = $request->id ? 'Successfully updated' : 'Successfully added';
        Session::flash('flash_message', $message);

        return redirect()->back();
    }

    // Show the form to edit an existing movie/series
    public function edit($id)
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Edit Upcoming Movie/Series';
        $movie_series = UpcomingMovieSeries::findOrFail($id);

        return view('admin.pages.addedit_upcoming_movie_series', compact('page_title', 'movie_series'));
    }

    // Delete an upcoming movie/series
    public function destroy($id)
    {
        if (Auth::user()->usertype == "Admin" || Auth::user()->usertype == "Sub_Admin") {
            $movie_series = UpcomingMovieSeries::findOrFail($id);
            $movie_series->delete();

            Session::flash('flash_message', 'Successfully deleted');
            return redirect()->back();
        } else {
            Session::flash('flash_message', 'Access Denied');
            return redirect('admin/dashboard');
        }
    }
}
