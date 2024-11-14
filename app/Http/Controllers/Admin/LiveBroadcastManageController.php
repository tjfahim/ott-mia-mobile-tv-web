<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LiveBroadcastManage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LiveBroadcastManageController extends Controller
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

        $page_title = 'Broadcasts';
        $broadcasts = LiveBroadcastManage::orderBy('id', 'DESC')->paginate(10);

        return view('admin.pages.broadcast_list', compact('page_title', 'broadcasts'));
    }

    public function create()
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Add Broadcast';

        return view('admin.pages.addeditbroadcast', compact('page_title'));
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'rtmp_server' => 'required',
            'stream_key' => 'required',
            'stream_url' => 'nullable',
            'image' => 'image|nullable',
        ];
    
        $validator = \Validator::make($data, $rules);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
        }
    
        $broadcast = $request->id ? LiveBroadcastManage::findOrFail($request->id) : new LiveBroadcastManage;
    
        $broadcast->title = $request->title;
        $broadcast->user_id = auth()->id();
        $broadcast->description = $request->description;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('upload/source', $imageName, 'public');
            $broadcast->image = $imagePath;
        }
    
        $broadcast->rtmp_server = $request->rtmp_server;
        $broadcast->stream_key = $request->stream_key;

        $parsedUrl = parse_url($broadcast->rtmp_server);
        $ipAddress = $parsedUrl['host']; 

        // Construct the HLS URL
        $broadcast->stream_url = 'http://' . $ipAddress . ':8080/hls/' . $broadcast->stream_key . '.m3u8';


        $broadcast->status = $request->status;
    
        $broadcast->save();
    
        $message = $request->id ? 'Successfully updated' : 'Added';
        Session::flash('flash_message', $message);
    
        return redirect()->back();
    }
    

    public function edit($id)
    {
        if (Auth::user()->usertype != "Admin" && Auth::user()->usertype != "Sub_Admin") {
            Session::flash('flash_message', 'Access Denied');
            return redirect('dashboard');
        }

        $page_title = 'Edit Broadcast';
        $broadcast_info = LiveBroadcastManage::findOrFail($id);

        return view('admin.pages.addeditbroadcast', compact('page_title', 'broadcast_info'));
    }

    public function destroy($id)
    {
        if (Auth::user()->usertype == "Admin" || Auth::user()->usertype == "Sub_Admin") {
            $broadcast = LiveBroadcastManage::findOrFail($id);
    
            // Check if the image exists and delete it
            if ($broadcast->image && \Storage::disk('public')->exists($broadcast->image)) {
                \Storage::disk('public')->delete($broadcast->image);
            }
    
            $broadcast->delete();
    
            Session::flash('flash_message', 'Deleted');
            return redirect()->back();
        } else {
            Session::flash('flash_message', 'Access Denied');
            return redirect('admin/dashboard');
        }
    }
    
}
