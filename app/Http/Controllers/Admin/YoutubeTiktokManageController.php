<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\YoutubeTiktokManage; // Ensure the correct namespace for the model
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class YoutubeTiktokManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'YouTube & TikTok Management';
        $videos = YoutubeTiktokManage::orderBy('id', 'DESC')->paginate(10); // Fixed variable name from $list to $videos

        return view('admin.pages.youtube_tiktok_list', compact('page_title', 'videos'));
    }

    public function create()
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Add YouTube/TikTok Entry';

        return view('admin.pages.add_edit_youtube_tiktok', compact('page_title'));
    }
    
    public function store(Request $request)
    {
        // Exclude CSRF token from input data
        $data = $request->except(['_token']);
    
        // Validation rules
        $rules = [
            'title' => 'required',
            'type' => 'required',
            'url' => 'required|url', // URL validation
            'status' => 'required|boolean', // Ensure status is boolean
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image if present
        ];
    
        // Run validation
        $validator = \Validator::make($data, $rules);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
    
        // Find or create the entry based on whether an id is provided
        $entry = $request->id ? YoutubeTiktokManage::findOrFail($request->id) : new YoutubeTiktokManage;
    
        // Assign the request data to the entry
        $entry->title = $request->title;
        $entry->description = $request->description;
        $entry->type = $request->type;
        $entry->url = $request->url;
        $entry->status = $request->status;
    
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Get the uploaded image file
            $image = $request->file('image');
            
            // Generate a unique file name based on current time and original file name
            $imageName = time() . '_' . $image->getClientOriginalName();
    
            // Store the image in the 'upload/source' directory in the public disk
            $imagePath = $image->storeAs('upload/source', $imageName, 'public');
    
            // Save the image path to the entry
            $entry->image = $imagePath;
        }
    
        // Save the entry (either new or updated)
        $entry->save();
    
        // Set the success message based on whether it's an update or a new entry
        $message = $request->id ? 'Successfully updated' : 'Successfully added';
        Session::flash('flash_message', $message);
    
        // Redirect back to the index page (or another appropriate location)
        return redirect()->route('youtube-tiktok.index');
    }
    

    public function edit($id)
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Edit YouTube/TikTok Entry';
        $entry = YoutubeTiktokManage::findOrFail($id);

        return view('admin.pages.add_edit_youtube_tiktok', compact('page_title', 'entry'));
    }

    public function destroy($id)
    {
        if (Auth::user()->usertype == "Admin" || Auth::user()->usertype == "Sub_Admin") {
            $entry = YoutubeTiktokManage::findOrFail($id);
            $entry->delete();

            Session::flash('flash_message', 'Deleted successfully');
            return redirect()->route('youtube-tiktok.index'); // Redirecting to the index page
        } else {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }
    }
}
