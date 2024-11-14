<?php

namespace App\Http\Controllers\Admin;

use App\ChannelManage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ChannelManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Display the list of channels
    public function index(Request $request)
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }
    
        $page_title = 'Channel Management';
        
        // Check if a search term is provided
        $search = $request->get('s');
        $channels = ChannelManage::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%");
        })->orderBy('id', 'DESC')->paginate(10);
    
        return view('admin.pages.channel_manage_list', compact('page_title', 'channels'));
    }
    
    // Show the form to add a new channel
    public function create()
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Add Channel';
        return view('admin.pages.addedit_channel', compact('page_title'));
    }

    // Store a new channel or update an existing one
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
    
        // Validation rules
        $rules = [
            'title' => 'required',
            'url' => 'required|url',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    
        $validator = Validator::make($data, $rules);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
    
        // Check if it's an update or a new entry
        $channel = $request->id ? ChannelManage::findOrFail($request->id) : new ChannelManage;
    
        $channel->title = $request->title;
        $channel->url = $request->url;
        $channel->status = $request->status;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('channels', 'public');
            $channel->image = $imagePath;
        }
    
        // Save the channel
        $channel->save();
    
        // Flash message for success
        $message = $request->id ? 'Successfully updated' : 'Successfully added';
        Session::flash('flash_message', $message);
    
        return redirect()->route('channel.index');
    }
    
    // Show the form to edit an existing channel
    public function edit($id)
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Edit Channel';
        $channel = ChannelManage::findOrFail($id);

        return view('admin.pages.addedit_channel', compact('page_title', 'channel'));
    }

    // Delete a channel
    public function destroy($id)
    {
        if (Auth::user()->usertype == "Admin" || Auth::user()->usertype == "Sub_Admin") {
            $channel = ChannelManage::findOrFail($id);
            $channel->delete();

            Session::flash('flash_message', 'Successfully deleted');
            return redirect()->back();
        } else {
            Session::flash('flash_message', 'Access Denied');
            return redirect('admin/dashboard');
        }
    }
}
