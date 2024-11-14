<?php

namespace App\Http\Controllers\Admin;

use App\ReelsComment;
use App\ReelsLike;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use App\Reels;
use Illuminate\Http\Request;

class ReelsController extends MainAdminController
{
    public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct();
        check_verify_purchase(); 	
		  
    }

    public function reel_list()
    {
        if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
        {

            \Session::flash('flash_message', trans('words.access_denied'));
            return redirect('dashboard');
            
         }
        
        $page_title=trans('words.reel_text');
        
        if(isset($_GET['s']))
        {
            $keyword = $_GET['s'];  
            $reels_list = Reels::where("title", "LIKE","%$keyword%")->orderBy('title')->paginate(10);

            $reels_list->appends(\Request::only('s'))->links();
        }    
        else
        {
            $reels_list = Reels::orderBy('id','DESC')->paginate(10);
        }
         foreach($reels_list as $key => $value)
         {

            $reels_list[$key]['comment_count'] = ReelsComment::where('reel_id',$value['id'])->count();
            $reels_list[$key]['like_count'] = ReelsLike::where('reel_id',$value['id'])->count();

            Reels::where('id', $value['id'])->update([
                'comment_count' => $reels_list[$key]['comment_count'],
                'like_count' => $reels_list[$key]['like_count'],
            ]);

         }         
        return view('admin.pages.reel_list',compact('page_title','reels_list'));
    }
    public function addReel()    { 
        
        if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
        {

                \Session::flash('flash_message', trans('words.access_denied'));

                return redirect('dashboard');
                
        }
        $username = Auth::User()->name;
        $user_img = Auth::User()->user_image? \URL::to('upload/'.Auth::User()->user_image): \URL::to('admin_assets/images/users/avatar-9.jpg');

        $page_title=trans('words.add_reel');
        return view('admin.pages.addeditreel',compact('page_title', 'username', 'user_img'));
    }

public function reel_single($id){
    $reel = Reels::where('status', 1)->where('id', $id)->first();
    if($reel == '') {
        abort(404, 'Unauthorized action.');
    }
        if(Auth::check()) {
            
                $user_id = Auth::User()->id;
                $user_info = User::findOrFail($user_id);
                return $reel;
        } else {
            \Session::flash('error_flash_message', 'Access denied!');

            return redirect('login');
        }
}

    public function editReel($id)    
    {      
          if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
        {

                \Session::flash('flash_message', trans('words.access_denied'));

                return redirect('dashboard');
                
        }  
        $username = Auth::User()->name;
        $user_img = \URL::to('upload/'.Auth::User()->user_image);

          $page_title=trans('words.edit_reel');

          $reel = Reels::findOrFail($id);   

          return view('admin.pages.addeditreel',compact('page_title','reel', 'username', 'user_img'));
        
    }	 
    
    public function delete($id)
    {
    	if(Auth::User()->usertype=="Admin" OR Auth::User()->usertype=="Sub_Admin")
        {
        
        $music = Reels::findOrFail($id)->delete();
        $comment = ReelsComment::where('reel_id',$id)->delete();
        $like = ReelsLike::where('reel_id',$id)->delete();

        \Session::flash('flash_message', trans('words.deleted'));

        return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', trans('words.access_denied'));

            return redirect('admin/dashboard');

        }
    }


    public function addnew(Request $request)
    { 
        
        $data =  \Request::except(array('_token')) ;
        
        if(!empty($inputs['id'])){
                $rule=array(
                    'username' => 'required',
                    'user_img' => 'required',
                        'title' => 'required',
                        'video_url' => 'required',
                        'status' => 'required',
                         );
        }else
        {
            $rule=array(
                'username' => 'required',
                    'user_img' => 'required',
                'title' => 'required',
                        'video_url' => 'required',
                        'status' => 'required',                        
                         );
        }

         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withInput()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $reel_obj = Reels::findOrFail($inputs['id']);

        }else{

            $reel_obj = new Reels;

        }          
        $reel_obj->username = addslashes($inputs['username']);
        $reel_obj->user_img = $inputs['user_img'];
         $reel_obj->title = addslashes($inputs['title']);
         $reel_obj->video_url = $inputs['video_url'];
         $reel_obj->status = $inputs['status'];
         $reel_obj->save();
         
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', trans('words.successfully_updated'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', trans('words.added'));

            return \Redirect::back();
        }      
    }  
    
    public function allComments($id){
        $page_title=trans('words.comments');
        $comments = ReelsComment::with('user:id,name,email,user_image','reels:id,title')->where('reel_id',$id)->get();
        //return $comments;
        return view('admin.pages.commentslist',compact('comments', 'id','page_title'));
    }


    public function commentDelete($id){
        $comment = ReelsComment::findOrFail($id);
    $comment->delete();

    // Find the associated reel
    $reel_like_count_add = Reels::find($comment->reel_id);

    if ($reel_like_count_add) {
        // Decrement the comment count if the reel is found
        $reel_like_count_add->comment_count = $reel_like_count_add->comment_count - 1;
        $reel_like_count_add->save();
    }

    return redirect()->back();
    }

    public function commentReply($id){
        $page_title=trans('words.add_reply');
        $username = Auth::User()->name;
        return view('admin.pages.addreply',compact('page_title','id','username'));
    }
    public function addNewReply(Request $request){
        $data =  \Request::except(array('_token')) ;
        
        if(!empty($inputs['id'])){
                $rule=array(
                    'comments' => 'required',
                        'status' => 'required',
                         );
        }else
        {
            $rule=array(
                'comments' => 'required',
                        'status' => 'required',                        
                         );
        }

         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withInput()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        $reel = ReelsComment::findOrFail($inputs['id']);

            $reply_obj = new ReelsComment;
      
        $reply_obj->comment = addslashes($inputs['comments']);
         $reply_obj->status = $inputs['status'];
         $reply_obj->user_id = Auth::User()->id;
         $reply_obj->parent_id = $inputs['id'];
            $reply_obj->reel_id = $reel->reel_id;
         $reply_obj->save();
         

            \Session::flash('flash_message', trans('words.added'));

            return \Redirect::back();  
    }
   
}
