<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\Admin\BroadcastManageController;
use App\Http\Controllers\Admin\ChannelManageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LiveBroadcastManageController;
use App\Http\Controllers\Admin\UpcomingMovieSeriesController;
use App\Http\Controllers\frontend\TvstationController as TvController;
use App\Http\Controllers\ReelsController;
use Illuminate\Support\Facades\Route;

use Intervention\Image\Facades\Image;

Route::post('/reels/{id}/like', [ReelsController::class, 'postLike']);
Route::get('/reels/{id}/likes', [ReelsController::class, 'ReelLike']);
Route::post('/reels/{id}/comments', [ReelsController::class, 'postComment']);
Route::get('/reels/{id}/comments', [ReelsController::class, 'ReelComment']);

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {


    //h
    Route::get('contacts', [App\Http\Controllers\Admin\ContactController::class, 'index']);
    Route::get('contacts/replay/{id}', [App\Http\Controllers\Admin\ContactController::class, 'replay']);

    Route::get('production/members', [App\Http\Controllers\Admin\ProductionMemberController::class, 'index']);
    Route::get('production/members/add', [App\Http\Controllers\Admin\ProductionMemberController::class, 'create']);
    Route::post('production/members', [App\Http\Controllers\Admin\ProductionMemberController::class, 'store']);
    Route::get('production/members/{id}/edit', [App\Http\Controllers\Admin\ProductionMemberController::class, 'edit']);
    Route::put('production/members/{id}', [App\Http\Controllers\Admin\ProductionMemberController::class, 'update']);
    Route::delete('production/members/{id}', [App\Http\Controllers\Admin\ProductionMemberController::class, 'destroy']);

    Route::get('categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index']);
    Route::get('categories/create', [App\Http\Controllers\Admin\CategoriesController::class, 'create']);
    Route::post('categories', [App\Http\Controllers\Admin\CategoriesController::class, 'store']);
    Route::get('categories/edit/{category}', [App\Http\Controllers\Admin\CategoriesController::class, 'edit']);
    Route::put('categories/{category}', [App\Http\Controllers\Admin\CategoriesController::class, 'update']);
    Route::get('categories/delete/{category}', [App\Http\Controllers\Admin\CategoriesController::class, 'destroy']);


    // h

	Route::get('/', 'IndexController@index');

	Route::get('login', [ 'as' => 'login', 'uses' => 'IndexController@index']);

	Route::post('login', 'IndexController@postLogin');
	Route::get('logout', 'IndexController@logout');

	Route::get('dashboard', 'DashboardController@index');
	Route::get('profile', 'AdminController@profile');
	Route::post('profile', 'AdminController@updateProfile');
	Route::get('verify_purchase', 'AdminController@verify_purchase');
	//Route::post('verify_purchase', 'AdminController@verify_purchase_update');

	Route::get('settings', 'SettingsController@settings');

	Route::get('find_imdb_movie', 'ImportImdbController@find_imdb_movie');
	Route::get('find_imdb_show', 'ImportImdbController@find_imdb_show');
	Route::get('find_imdb_episode', 'ImportImdbController@find_imdb_episode');


	Route::get('language', 'LanguageController@languag_list');
	Route::get('language/add_language', 'LanguageController@addLanguage');
	Route::get('language/edit_language/{id}', 'LanguageController@editLanguage');
	Route::post('language/add_edit_language', 'LanguageController@addnew');
	Route::get('language/delete/{id}', 'LanguageController@delete');

	Route::get('genres', 'GenresController@genres_list');
	Route::get('genres/add_genre', 'GenresController@addGenre');
	Route::get('genres/edit_genre/{id}', 'GenresController@editGenre');
	Route::post('genres/add_edit_genre', 'GenresController@addnew');
	Route::get('genres/delete/{id}', 'GenresController@delete');

 	Route::get('movies', 'MoviesController@movies_list');
	Route::get('movies/add_movie', 'MoviesController@addMovie');
	Route::get('movies/edit_movie/{id}', 'MoviesController@editMovie');
	Route::post('movies/add_edit_movie', 'MoviesController@addnew');
	Route::get('movies/delete/{id}', 'MoviesController@delete');


	Route::get('series', 'SeriesController@series_list');
	Route::get('series/add_series', 'SeriesController@addSeries');
	Route::get('series/edit_series/{id}', 'SeriesController@editSeries');
	Route::post('series/add_edit_series', 'SeriesController@addnew');
	Route::get('series/delete/{id}', 'SeriesController@delete');


	Route::get('season', 'SeasonController@season_list');
	Route::get('season/add_season', 'SeasonController@addSeason');
	Route::get('season/edit_season/{id}', 'SeasonController@editSeason');
	Route::post('season/add_edit_season', 'SeasonController@addnew');
	Route::get('season/delete/{id}', 'SeasonController@delete');

	Route::get('episodes', 'EpisodesController@episodes_list');
	Route::get('episodes/add_episode', 'EpisodesController@addEpisode');
	Route::get('episodes/edit_episode/{id}', 'EpisodesController@editEpisode');
	Route::post('episodes/add_edit_episode', 'EpisodesController@addnew');
	Route::get('episodes/delete/{id}', 'EpisodesController@delete');

	Route::get('ajax_get_season/{id}', 'EpisodesController@ajax_get_season_list');

	Route::get('sports_category', 'SportsCategoryController@category_list');
	Route::get('sports_category/add_category', 'SportsCategoryController@addCategory');
	Route::get('sports_category/edit_category/{id}', 'SportsCategoryController@editCategory');
	Route::post('sports_category/add_edit_category', 'SportsCategoryController@addnew');
	Route::get('sports_category/delete/{id}', 'SportsCategoryController@delete');

	Route::get('sports', 'SportsController@sports_video_list');
	Route::get('sports/add_video', 'SportsController@addVideo');
	Route::get('sports/edit_video/{id}', 'SportsController@editVideo');
	Route::post('sports/add_edit_video', 'SportsController@addnew');
	Route::get('sports/delete/{id}', 'SportsController@delete');

	Route::get('tv_category', 'TvCategoryController@category_list');
	Route::get('tv_category/add_category', 'TvCategoryController@addCategory');
	Route::get('tv_category/edit_category/{id}', 'TvCategoryController@editCategory');
	Route::post('tv_category/add_edit_category', 'TvCategoryController@addnew');
	Route::get('tv_category/delete/{id}', 'TvCategoryController@delete');

	Route::get('live_tv', 'LiveTvController@live_tv_list');
	Route::get('live_tv/add_live_tv', 'LiveTvController@addTv');
	Route::get('live_tv/edit_live_tv/{id}', 'LiveTvController@editTv');
	Route::post('live_tv/add_edit_live_tv', 'LiveTvController@addnew');
	Route::get('live_tv/delete/{id}', 'LiveTvController@delete');


	Route::get('music', 'MusicController@music_list');
	Route::get('music/add_music', 'MusicController@addMusic');
	Route::get('music/edit_music/{id}', 'MusicController@editMusic');
	Route::post('music/add_edit_music', 'MusicController@addnew');
	Route::get('music/delete/{id}', 'MusicController@delete');



	Route::get('reels', 'ReelsController@reel_list');
	Route::get('reels/add_reels', 'ReelsController@addreel');
	Route::get('reels/edit_reels/{id}', 'ReelsController@editReel');
	Route::post('reels/add_edit_reels', 'ReelsController@addnew');
	Route::get('reels/delete/{id}', 'ReelsController@delete');
	Route::get('reels/all-comments/{id}', 'ReelsController@allComments');
	Route::get('reels/comment-delete/{id}', 'ReelsController@commentDelete');
	Route::get('reels/add-reply/{id}', 'ReelsController@commentReply');
	Route::post('reels/add-reply', 'ReelsController@addNewReply');



	Route::get('slider', 'SliderController@slider_list');
	Route::get('slider/add_slider', 'SliderController@addSlider');
	Route::get('slider/edit_slider/{id}', 'SliderController@editSlider');
	Route::post('slider/add_edit_slider', 'SliderController@addnew');
	Route::get('slider/delete/{id}', 'SliderController@delete');

	Route::get('home_section', 'HomeSectionController@home_section');
	Route::post('home_section', 'HomeSectionController@update_home_section');


	Route::get('users', 'UsersController@user_list');
	Route::get('users/add_user', 'UsersController@addUser');
	Route::get('users/edit_user/{id}', 'UsersController@editUser');
	Route::post('users/add_edit_user', 'UsersController@addnew');
	Route::get('users/delete/{id}', 'UsersController@delete');
	Route::get('users/history/{id}', 'UsersController@user_history');
	Route::get('users/export', 'UsersController@user_export');

	Route::get('sub_admin', 'UsersController@admin_user_list');
	Route::get('sub_admin/add_user', 'UsersController@admin_addUser');
	Route::get('sub_admin/edit_user/{id}', 'UsersController@admin_editUser');
	Route::post('sub_admin/add_edit_user', 'UsersController@admin_addnew');
	Route::get('sub_admin/delete/{id}', 'UsersController@admin_delete');

	Route::get('subscription_plan', 'SubscriptionPlanController@subscription_plan_list');
	Route::get('subscription_plan/add_plan', 'SubscriptionPlanController@addSubscriptionPlan');
	Route::get('subscription_plan/edit_plan/{id}', 'SubscriptionPlanController@editSubscriptionPlan');
	Route::post('subscription_plan/add_edit_plan', 'SubscriptionPlanController@addnew');
	Route::get('subscription_plan/delete/{id}', 'SubscriptionPlanController@delete');

	Route::get('transactions', 'TransactionsController@transactions_list');
	Route::get('transactions/export', 'TransactionsController@transactions_export');

	Route::get('about_page', 'PagesController@about_page');
	Route::post('about_page', 'PagesController@update_about_page');
	Route::get('terms_page', 'PagesController@terms_page');
	Route::post('terms_page', 'PagesController@update_terms_page');
	Route::get('privacy_policy_page', 'PagesController@privacy_policy_page');
	Route::post('privacy_policy_page', 'PagesController@update_privacy_policy_page');
	Route::get('faq_page', 'PagesController@faq_page');
	Route::post('faq_page', 'PagesController@update_faq_page');
	Route::get('contact_page', 'PagesController@contact_page');
	Route::post('contact_page', 'PagesController@update_contact_page');


	Route::get('upcoming-movie-series', 'UpcomingMovieSeriesController@index')->name('admin.upcoming-movie-series.index');
    Route::get('upcoming-movie-series/create', 'UpcomingMovieSeriesController@create')->name('admin.upcoming-movie-series.create');
    Route::post('upcoming-movie-series', 'UpcomingMovieSeriesController@store')->name('admin.upcoming-movie-series.store');
    Route::get('upcoming-movie-series/{id}/edit', 'UpcomingMovieSeriesController@edit')->name('admin.upcoming-movie-series.edit');
    Route::delete('upcoming-movie-series/{id}', 'UpcomingMovieSeriesController@destroy')->name('admin.upcoming-movie-series.destroy');


	Route::get('youtube-tiktok', 'YoutubeTiktokManageController@index')->name('youtube-tiktok.index');
    Route::get('youtube-tiktok/create', 'YoutubeTiktokManageController@create')->name('youtube-tiktok.create');
    Route::post('youtube-tiktok/store', 'YoutubeTiktokManageController@store')->name('youtube-tiktok.store');
    Route::get('youtube-tiktok/edit/{id}', 'YoutubeTiktokManageController@edit')->name('youtube-tiktok.edit');
    Route::post('youtube-tiktok/update', 'YoutubeTiktokManageController@store')->name('youtube-tiktok.update');
    Route::delete('youtube-tiktok/delete/{id}', 'YoutubeTiktokManageController@destroy')->name('youtube-tiktok.delete');


	Route::get('general_settings', 'SettingsController@general_settings');
	Route::post('general_settings', 'SettingsController@update_general_settings');
	Route::get('email_settings', 'SettingsController@email_settings');
	Route::post('email_settings', 'SettingsController@update_email_settings');
	Route::get('payment_settings', 'SettingsController@payment_settings');
	Route::post('payment_settings', 'SettingsController@update_payment_settings');
	Route::get('social_login_settings', 'SettingsController@social_login_settings');
	Route::post('social_login_settings', 'SettingsController@update_social_login_settings');


	Route::get('player_settings', 'SettingsPlayerController@player_settings');
	Route::post('player_settings', 'SettingsPlayerController@update_player_settings');

	Route::get('ads_list', 'AdsController@ads_list');
	Route::get('ads_edit/{id}', 'AdsController@ads_edit');
	Route::post('ads_edit', 'AdsController@addnew');

	Route::get('verify_purchase_app', 'SettingsAndroidAppController@verify_purchase_app');
	Route::post('verify_purchase_app', 'SettingsAndroidAppController@verify_purchase_app_update');

	Route::get('android_settings', 'SettingsAndroidAppController@android_settings');
	Route::post('android_settings', 'SettingsAndroidAppController@update_android_settings');
	Route::get('android_notification', 'SettingsAndroidAppController@android_notification');
	Route::post('android_notification', 'SettingsAndroidAppController@send_android_notification');


	Route::get('/faqs', [FaqController::class, 'faqList'])->name('faqs.list');
    Route::get('/faqs/add', [FaqController::class, 'addFaq'])->name('faqs.add');
    Route::post('/faqs/add', [FaqController::class, 'addNew'])->name('faqs.store');
    Route::get('/faqs/edit/{id}', [FaqController::class, 'editFaq'])->name('faqs.edit');
    Route::post('/faqs/edit/{id}', [FaqController::class, 'addNew'])->name('faqs.update');
    Route::get('/faqs/delete/{id}', [FaqController::class, 'delete'])->name('faqs.delete');


	Route::get('broadcasts', [LiveBroadcastManageController::class, 'index'])->name('broadcasts.index');
    Route::get('broadcasts/create', [LiveBroadcastManageController::class, 'create'])->name('broadcasts.create');
    Route::post('broadcasts', [LiveBroadcastManageController::class, 'store'])->name('broadcasts.store');
    Route::get('broadcasts/{id}/edit', [LiveBroadcastManageController::class, 'edit'])->name('broadcasts.edit');
    Route::delete('broadcasts/{id}', [LiveBroadcastManageController::class, 'destroy'])->name('broadcasts.destroy');



    Route::get('channel-manage', [ChannelManageController::class, 'index'])->name('channel.index');
    Route::get('channel-manage/create', [ChannelManageController::class, 'create'])->name('channel.create');
    Route::post('channel-manage', [ChannelManageController::class, 'store'])->name('channel.store');
    Route::get('channel-manage/{id}/edit', [ChannelManageController::class, 'edit'])->name('channel.edit');
    Route::delete('channel-manage/{id}', [ChannelManageController::class, 'destroy'])->name('channel.destroy');

});


//Site

//Route::get('/', 'IndexController@index');


// Route::get('login', 'IndexController@login');
// Route::get('register', 'IndexController@register');
// Route::post('login', 'IndexController@postLogin');

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

// Route::get('signup', 'IndexController@signup');
// Route::post('signup', 'IndexController@postSignup');

Route::get('logout', 'IndexController@logout');

Route::get('settings', 'UserController@settings');

// Route::get('dashboard', 'UserController@dashboard');
// Route::get('profile', 'UserController@profile');
// Route::post('profile', 'UserController@editprofile');
// Route::get('membership_plan', 'UserController@membership_plan');
// Route::get('payment_method/{plan_id}', 'UserController@payment_method');

// Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
// Route::get('paypal', array('as' => 'payment.status','uses' => 'PaypalController@getPaymentStatus',));

// //Route::get('stripe/stripe_payments', 'StripeController@stripe_payments');

// Route::get('stripe/{plan_id}', 'StripeController@payWithStripe');
// Route::post('stripe', 'StripeController@postPaymentWithStripe');

// Route::post('pay', 'PaystackController@redirectToGateway')->name('pay');
// Route::get('payment/callback', 'PaystackController@handleGatewayCallback');

# Call Route
//Route::get('payment', ['as' => 'payment', 'uses' => 'PayuController@payment']);
# Status Route
//Route::get('payment/status', ['as' => 'payment.status', 'uses' => 'PayuController@status']);


// Route::get('series', 'SeriesController@series');
// Route::get('series/latest', 'SeriesController@series_latest');
// Route::get('series/popular', 'SeriesController@series_popular');
// Route::get('series/{series_slug}/{id}', 'SeriesController@series_single');
// Route::get('series/{series_slug}/seasons/{season_slug}/{id}', 'SeriesController@season_episodes');
// Route::get('series/{series_slug}/{episodes_slug}/{id}', 'SeriesController@episodes_details')->name('episodes_single');

// Route::get('language/series', 'LanguageController@series_language');
// Route::get('language/series/{slug}', 'LanguageController@series_by_language');
// Route::get('language/movies', 'LanguageController@movies_language');
// Route::get('language/movies/{slug}', 'LanguageController@movies_by_language');


// Route::get('genres/series', 'GenresController@series_genres');
// Route::get('genres/series/{slug}', 'GenresController@series_by_genres');
// Route::get('genres/movies', 'GenresController@movies_genres');
// Route::get('genres/movies/{slug}', 'GenresController@movies_by_genres');


// Route::get('movies', 'MoviesController@movies');
// Route::get('movies/latest', 'MoviesController@movies_latest');
// Route::get('movies/popular', 'MoviesController@movies_popular');
// Route::get('movies/{slug}/{id}', 'MoviesController@movies_single')->name('movies_single');


// Route::get('reel/{slug}/{id}', 'ReelsController@reel_single')->name('reel_single');
// Route::get('/reels', [ReelsController::class, 'index'])->name('reels');
// Route::get('reels/{id}', [ReelsController::class, 'show'])->name('reels.show');


// Route::get('sports', 'SportsController@sports');
// Route::get('sports/{slug}', 'SportsController@sports_by_category');
// Route::get('sports/{slug}/{id}', 'SportsController@sports_single')->name('sports_single');

// Route::get('live-tv', 'LiveTvController@live_tv_list');
// Route::get('live-tv/{slug}', 'LiveTvController@live_tv_by_category');
// Route::get('live-tv/{slug}/{id}', 'LiveTvController@live_tv_single')->name('tv_single');

// Route::get('page/{slug}', 'PagesController@get_page');
// Route::post('contact_send', 'PagesController@contact_send');

// Route::get('search', 'IndexController@search');

// Route::get('password/email', 'Auth\PasswordController@getEmail');
// Route::post('password/email', 'Auth\PasswordController@postEmail');

// Route::get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('password_reset_form');
// Route::post('password/reset', 'Auth\PasswordController@postReset')->name('password.reset');

// Route::get('sitemap.xml', 'IndexController@sitemap');
// Route::get('sitemap-misc.xml', 'IndexController@sitemap_misc');
// Route::get('sitemap-movies.xml', 'IndexController@sitemap_movies');
// Route::get('sitemap-show.xml', 'IndexController@sitemap_show');
// Route::get('sitemap-sports.xml', 'IndexController@sitemap_sports');
// Route::get('sitemap-livetv.xml', 'IndexController@sitemap_livetv');

// Route::get('razorpay', 'RazorpayController@pay');
// Route::post('razorpay-success', 'RazorpayController@payment_success');

//  Route::get('test', 'IndexController@test');



//  Route::get('/forgot-password', 'ForgotPasswordController@showForgotPasswordForm')->name('password.request');
// Route::post('/forgot-password', 'ForgotPasswordController@sendOTP');
// Route::post('/verify-otp', 'ForgotPasswordController@verifyOTP');
// Route::get('/reset-password', 'ForgotPasswordController@showResetPasswordForm')->name('password.reset');
// Route::post('/reset-password', 'ForgotPasswordController@resetPassword');
//Route::post('/resend-otp', 'OtpController@resend')->name('resend.otp');




// frontend controller

// auth

// h

// Route::get('login', [App\Http\Controllers\frontend\auth\loginController::class, 'index']);
Route::post('login', [App\Http\Controllers\frontend\auth\loginController::class, 'store']);

// Route::get('signup', [App\Http\Controllers\frontend\auth\SignupController::class,'index']);
Route::post('signup', [App\Http\Controllers\frontend\auth\SignupController::class,'store']);

Route::get('/', [App\Http\Controllers\frontend\HomeController::class, 'index']);
Route::get('tvstation', [App\Http\Controllers\frontend\TvstationController::class, 'index']);


Route::get('vod/movies', [App\Http\Controllers\frontend\VodController::class, 'movies']);
Route::get('vod/shows', [App\Http\Controllers\frontend\VodController::class, 'shows']);
Route::get('vod/lives', [App\Http\Controllers\frontend\VodController::class, 'lives']);

Route::get('vod/movies/all', [App\Http\Controllers\frontend\VodController::class, 'allMovies']);
Route::get('vod/shows/all', [App\Http\Controllers\frontend\VodController::class, 'allShows']);

Route::get('/lives', [App\Http\Controllers\frontend\LiveController::class, 'index']);

// Route::get('contact', [App\Http\Controllers\frontend\ContactController::class, 'index']);
Route::post('contact', [App\Http\Controllers\frontend\ContactController::class, 'store']);
Route::post('feedback', [App\Http\Controllers\frontend\ContactController::class, 'feedbackStore']);

Route::get('movie/{slug}', [App\Http\Controllers\frontend\ContentController::class, 'show']);
Route::get('movie/play/{slug}', [App\Http\Controllers\frontend\ContentController::class, 'play']);

Route::get('show/{slug}', [App\Http\Controllers\frontend\ContentController::class, 'serise_show']);
Route::get('show/play/{slug}', [App\Http\Controllers\frontend\ContentController::class, 'play_series']);



Route::get('play/{slug}/{type}', [App\Http\Controllers\frontend\PlayController::class, 'index']);


// account



Route::get('account/info', [App\Http\Controllers\frontend\user\AccountController::class, 'info'])->middleware('authUser');
Route::get('account/subscription', [App\Http\Controllers\frontend\user\AccountController::class, 'subscripbtion'])->middleware('authUser');
Route::get('account/device', [App\Http\Controllers\frontend\user\AccountController::class, 'deviceInfo'])->middleware('authUser');
Route::get('account/preferences', [App\Http\Controllers\frontend\user\AccountController::class, 'preferences'])->middleware('authUser');
Route::get('favorite', [App\Http\Controllers\frontend\user\AccountController::class, 'favorite']);
Route::post('favorite', [App\Http\Controllers\frontend\user\AccountController::class, 'storefavourite']);
Route::post('favorite/remove', [App\Http\Controllers\frontend\user\AccountController::class, 'removeFavourite']);


// create image api


Route::get('test', function(){
    $url1 = 'https://placehold.co/400x600?text=hadi.png';
    $url2 = 'https://placehold.co/400x600?text=rony';
    $url3 = 'https://placehold.co/400x600?text=zaman';



    $img = Image::make(asset('frontend/images/bg-hero.png'));

    return 1;

    $img->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
    });


    $fileName = 'resized_image_' . time() . '.jpg';
    $img->save(public_path('images/' . $fileName));


    return "image genrate successfully";
});

// h
