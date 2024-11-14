<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests;
use App\Music;
use Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class MusicController extends MainAdminController
{
    public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct();
        check_verify_purchase(); 	
		  
    }
    public function music_list()
    {
        if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
        {

            \Session::flash('flash_message', trans('words.access_denied'));
            return redirect('dashboard');
            
         }
        
        $page_title=trans('words.music_text');
        
        if(isset($_GET['s']))
        {
            $keyword = $_GET['s'];  
            $musics_list = Music::where("music_title", "LIKE","%$keyword%")->orderBy('music_title')->paginate(10);

            $musics_list->appends(\Request::only('s'))->links();
        }    
        else
        {
            $musics_list = Music::orderBy('music_id','DESC')->paginate(10);
        } 
         
        return view('admin.pages.music_list',compact('page_title','musics_list'));
    }
    public function addMusic()    { 
        
        if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
        {

                \Session::flash('flash_message', trans('words.access_denied'));

                return redirect('dashboard');
                
        }

        $page_title=trans('words.add_music');

        return view('admin.pages.addeditmusic',compact('page_title'));
    }



    public function editMusic($id)    
    {      
          if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
        {

                \Session::flash('flash_message', trans('words.access_denied'));

                return redirect('dashboard');
                
        }  

          $page_title=trans('words.edit_music');

          $music = Music::findOrFail($id);   

          return view('admin.pages.addeditmusic',compact('page_title','music'));
        
    }	 
    
    public function delete($id)
    {
    	if(Auth::User()->usertype=="Admin" OR Auth::User()->usertype=="Sub_Admin")
        {
        
        $music = Music::findOrFail($id);
        $music->delete();

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
                        'music_title' => 'required',
                        'music_artist' => 'required',
                         );
        }else
        {
            $rule=array(
                'music_title' => 'required',
                'music_artist' => 'required',                         
                         );
        }

         $validator = \Validator::make($data,$rule);
 
        if ($validator->fails())
        {
                return redirect()->back()->withInput()->withErrors($validator->messages());
        } 
        $inputs = $request->all();
        
        if(!empty($inputs['id'])){
           
            $movie_obj = Music::findOrFail($inputs['id']);

        }else{

            $movie_obj = new Music;

        }          
   
         $movie_obj->music_title = addslashes($inputs['music_title']);
         $movie_obj->audio_type = $inputs['audio_type'];
         $movie_obj->music_genre = addslashes($inputs['music_genre']);
         $movie_obj->music_artist = addslashes($inputs['music_artist']);

         $movie_obj->music_release_date = strtotime($inputs['music_release_date']);


         if($inputs['audio_type']=="URL")
         {  
            $movie_obj->music_url = $inputs['music_url'];

         }
         else
         {            

            $movie_obj->music_url = 'upload/source/'.$inputs['music_url_local'];

          }

         $movie_obj->music_thumbnail_url = $inputs['music_thumbnail_url'];

         if(isset($inputs['thumb_link']) && $inputs['thumb_link']!='')
         {
             $image_source           =   $inputs['thumb_link'];
             $save_to                =   public_path('/upload/source/'.$inputs['music_thumbnail_url']);
             grab_image($image_source,$save_to);

         }
         $movie_obj->save();
         
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', trans('words.successfully_updated'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', trans('words.added'));

            return \Redirect::back();
        }      
        //return $request->all();      
    }     
   
}
