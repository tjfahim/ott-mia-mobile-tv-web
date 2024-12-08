<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::get('/profileDelete/{id}', 'AndroidApiController@profileDelete');

    //Route::apiResource('customers', 'AndroidApiController');

    Route::get('/', 'AndroidApiController@index');
    Route::post('app_details', 'AndroidApiController@app_details');
    Route::post('player_settings', 'AndroidApiController@player_settings');
    Route::post('payment_settings', 'AndroidApiController@payment_settings');


    Route::post('history', 'AndroidApiController@history');

    Route::get('freemovie', 'AndroidApiController@freemovie');
    Route::get('all_pages', 'AndroidApiController@all_pages');

    Route::post('login', 'AndroidApiController@postLogin');
    Route::post('signup', 'AndroidApiController@postSignup');
    Route::post('emailCheck', 'AndroidApiController@emailCheck');
    Route::post('verify_signup', 'AndroidApiController@verify_signup');

    Route::post('login_social', 'AndroidApiController@postSocialLogin');

    //Route::post('forgot_password', 'AndroidApiController@forgot_password');

    Route::post('reset_password', 'AndroidApiController@forgot_password_new');
    Route::post('verify_otp', 'AndroidApiController@verify_otp');
    Route::post('password_change', 'AndroidApiController@password_change');

    Route::post('dashboard', 'AndroidApiController@dashboard');
    Route::post('profile', 'AndroidApiController@profile');
    Route::post('profile_update', 'AndroidApiController@profile_update');
    Route::post('updateProfileImage', 'AndroidApiController@updateProfileImage');

    Route::post('check_user_plan', 'AndroidApiController@check_user_plan');
    Route::post('subscription_plan', 'AndroidApiController@subscription_plan');
    Route::post('transaction_add', 'AndroidApiController@transaction_add');


    Route::post('home', 'AndroidApiController@home');
    Route::post('latest_movies', 'AndroidApiController@latest_movies');
    Route::post('latest_shows', 'AndroidApiController@latest_shows');
    Route::post('popular_movies', 'AndroidApiController@popular_movies');
    Route::post('popular_shows', 'AndroidApiController@popular_shows');
    Route::get('popular_for_you', 'AndroidApiController@popular_for_you');

    Route::post('languages', 'AndroidApiController@languages');
    Route::post('genres', 'AndroidApiController@genres');

    Route::post('shows', 'AndroidApiController@shows');
    Route::post('shows_by_language', 'AndroidApiController@shows_by_language');
    Route::post('shows_by_genre', 'AndroidApiController@shows_by_genre');

    Route::post('show_details', 'AndroidApiController@show_details');
    Route::post('seasons', 'AndroidApiController@seasons');
    Route::post('episodes', 'AndroidApiController@episodes');
    Route::post('episodes_recently_watched', 'AndroidApiController@episodes_recently_watched');
    //Route::post('episodes_details', 'AndroidApiController@episodes_details');

    Route::post('movies', 'AndroidApiController@movies');
    Route::post('moviesalldata', 'AndroidApiController@moviesalldata');
    Route::post('movies_by_language', 'AndroidApiController@movies_by_language');
    Route::post('movies_by_genre', 'AndroidApiController@movies_by_genre');
    Route::post('movies_details', 'AndroidApiController@movies_details');

    Route::post('sports_category', 'AndroidApiController@sports_category');
    Route::post('sports', 'AndroidApiController@sports');
    Route::post('sports_by_category', 'AndroidApiController@sports_by_category');
    Route::post('sports_details', 'AndroidApiController@sports_details');


    Route::post('livetv_category', 'AndroidApiController@livetv_category');
    Route::post('livetv', 'AndroidApiController@livetv');
    Route::post('livetv_by_category', 'AndroidApiController@livetv_by_category');
    Route::post('livetv_details', 'AndroidApiController@livetv_details');

    Route::post('search', 'AndroidApiController@search');

    Route::post('stripe_token_get', 'AndroidApiController@stripe_token_get');

    Route::post('upload-music', 'AndroidApiController@uploadMusic');
    Route::get('search-music', 'AndroidApiController@searchMusic');
    Route::get('stream-music/{file}', 'AndroidApiController@streamMusic');
    Route::get('all-music', 'AndroidApiController@allMusic');

    Route::get('faq', 'AndroidApiController@faq');
    Route::post('contact-support', 'AndroidApiController@contact_support');
    Route::post('user-feedback', 'AndroidApiController@user_feedback');


    Route::get('all-reels', 'AndroidApiController@allReel');
    Route::get('reel/{id}/comment', 'AndroidApiController@ReelComment');
    Route::get('reel/{id}/likes', 'AndroidApiController@ReelLike');
    Route::post('/reels/{id}/comments', 'AndroidApiController@postComment');
    //Route::post('/reels/comment/reply/{id}', 'AndroidApiController@replyComment');
    Route::post('/reels/{id}/likes', 'AndroidApiController@postLike');

    Route::post('/favorite-movie-or-series', 'AndroidApiController@favorite');
    Route::get('/favorite-movie-or-series/{userId}', 'AndroidApiController@favoritelist');
    Route::post('/submitRecentWatch', 'AndroidApiController@submitRecentWatch');
    Route::get('/getRecentWatchesByUser/{userId}', 'AndroidApiController@getRecentWatchesByUser');
    Route::get('tranding_movies', 'AndroidApiController@tranding_movies');
    Route::get('youtube_video', 'AndroidApiController@youtube_video');
    Route::get('tiktok_video', 'AndroidApiController@tiktok_video');
    Route::get('broadcast_list', 'AndroidApiController@broadcast_list');
    Route::post('broadcast_create', 'AndroidApiController@broadcast_create');
    Route::post('comment_post', 'AndroidApiController@comment_post');
    Route::get('get_comment/{user_broadcast_id}', 'AndroidApiController@get_comment');
    Route::get('get_upcomming_data', 'AndroidApiController@get_upcomming_data');
    Route::get('get_channel_data', 'AndroidApiController@get_channel_data');

});
