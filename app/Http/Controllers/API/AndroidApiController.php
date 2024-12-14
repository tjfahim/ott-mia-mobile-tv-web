<?php

namespace App\Http\Controllers\API;

use App\ContactSupport;
use App\Music;
use App\ReelsComment;
use App\ReelsLike;
use Auth;
use App\OTP;
use App\User;
use App\Slider;
use App\Series;
use App\Season;
use App\Episodes;
use App\Events\CommentPosted;
use App\Faq;
use App\YoutubeTiktokManage;
use App\UpcomingMovieSeries;
use App\MovieSeriesFavorite;
use App\Movies;
use App\HomeSection;
use App\Sports;
use App\Pages;
use App\RecentlyWatched;
use App\Language;
use App\Genres;
use App\Settings;
use App\SportsCategory;
use App\SubscriptionPlan;
use App\Transactions;
use App\SettingsAndroidApp;
use App\TvCategory;
use App\LiveTV;
use App\Player;
use App\Reels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Response;
use App\PasswordReset;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\LiveBroadcastManage;
use App\Mail\UserSendEmailVerification;
use App\RecentWatch;
use App\UserBroadcast;
use App\ChannelManage;
use App\UserSetting;
use App\DeviceManage;
use App\UserBroadcastComments;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Session;
use URL;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\URL as FacadesURL;
use Illuminate\Support\Facades\Validator;
use Pusher\Pusher;

require(base_path() . '/public/stripe-php/init.php');

class AndroidApiController extends MainAPIController
{

    public function index()
    {
        $response[] = array('msg' => "API", 'success' => '1');

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }


    public function history(Request $request)
    {
        $user_id = $request->user_id;

        $data["history"] = DB::table('recently_watched')
            ->join('movie_videos', 'movie_videos.id', '=', 'recently_watched.video_id')
            ->select('recently_watched.*', 'movie_videos.video_title', 'movie_videos.video_title', 'movie_videos.video_image', 'movie_videos.video_url')
            ->where('recently_watched.user_id', $user_id)
            ->orderBy('recently_watched.id', 'desc')
            ->get();

        $data["image_video_url"] = URL::to('upload/source/');



        $data["status_code"] = "200";
        return response()->json($data);
    }


    public function freemovie()
    {

        $data["free_movies"] = DB::table('movie_videos')
            ->where('video_access', 'Free')
            ->orderBy('id', 'desc')
            ->get();


        $data["image_video_url"] = URL::to('upload/source/');
        $data["status_code"] = "200";
        return response()->json($data);
    }


    public function all_pages()
    {

        $data["all_pages"] = DB::table('pages')
            ->get();

        $data["status_code"] = "200";
        return response()->json($data);
    }

    public function app_details(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $user_id = $request->user_id;


        if (isset($user_id) && $user_id != '') {
            $user_id = $request->user_id;
            $user_info = User::getUserInfo($user_id);

            if ($user_info != '' and $user_info->status == 1) {
                $user_status = true;
            } else {
                $user_status = false;
            }
        } else {
            $user_status = false;
        }


        $settings = SettingsAndroidApp::findOrFail('1');

        $app_name = $settings->app_name;
        $app_logo = \URL::to('upload/source/' . $settings->app_logo);
        $app_version = $settings->app_version ? $settings->app_version : '';
        $app_company = $settings->app_company ? $settings->app_company : '';
        $app_email = $settings->app_email;
        $app_website = $settings->app_website ? $settings->app_website : '';
        $app_contact = $settings->app_contact ? $settings->app_contact : '';
        $app_about = $settings->app_about ? stripslashes($settings->app_about) : '';
        $app_privacy = $settings->app_privacy ? stripslashes($settings->app_privacy) : '';
        $publisher_id = $settings->publisher_id;


        $banner_ad = $settings->banner_ad;
        $banner_ad_type = $settings->banner_ad_type;

        if ($banner_ad_type == "Facebook") {

            $banner_ad_id = $settings->fb_banner_id;
        } else {

            $banner_ad_id = $settings->banner_ad_id;
        }

        $interstital_ad = $settings->interstital_ad;

        $interstitial_ad_type = $settings->interstitial_ad_type;

        if ($interstitial_ad_type == "Facebook") {

            $interstital_ad_id = $settings->fb_interstitial_id;
        } else {

            $interstital_ad_id = $settings->interstital_ad_id;
        }


        $interstital_ad_click = $settings->interstital_ad_click;


        $app_package_name = env('BUYER_APP_PACKAGE_NAME') ? env('BUYER_APP_PACKAGE_NAME') : "";

        $response[] = array('app_package_name' => $app_package_name, 'app_name' => $app_name, 'app_logo' => $app_logo, 'app_version' => $app_version, 'app_company' => $app_company, 'app_email' => $app_email, 'app_website' => $app_website, 'app_contact' => $app_contact, 'app_about' => $app_about, 'app_privacy' => $app_privacy, 'publisher_id' => $publisher_id, 'interstital_ad' => $interstital_ad, 'interstitial_ad_type' => $interstitial_ad_type, 'interstital_ad_id' => $interstital_ad_id, 'interstital_ad_click' => $interstital_ad_click, 'banner_ad' => $banner_ad, 'banner_ad_type' => $banner_ad_type, 'banner_ad_id' => $banner_ad_id, 'success' => '1');

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'user_status' => $user_status,
            'status_code' => 200
        ));
    }

    public function player_settings()
    {

        // $get_data=checkSignSalt($_POST['data']);

        $settings = Player::findOrFail('1');

        $player_style = $settings->player_style;
        $autoplay = $settings->autoplay;
        $theater_mode = $settings->theater_mode;
        $pip_mode = $settings->pip_mode;
        $rewind_forward = $settings->rewind_forward;

        $player_watermark = $settings->player_watermark;
        $player_logo = \URL::to('upload/source/' . $settings->player_logo);
        $player_logo_position = $settings->player_logo_position;
        $player_url = $settings->player_url;


        $player_ad_on_off = $settings->player_ad_on_off;
        $ad_offset = $settings->ad_offset;
        $ad_skip = $settings->ad_skip;
        $ad_website_url = $settings->ad_web_url;
        $ad_video_type = $settings->ad_video_type;
        $ad_video_url = $settings->ad_video_url;


        $response[] = array('player_style' => $player_style, 'autoplay' => $autoplay, 'theater_mode' => $theater_mode, 'pip_mode' => $pip_mode, 'rewind_forward' => $rewind_forward, 'player_watermark' => $player_watermark, 'player_logo' => $player_logo, 'player_watermark_position' => $player_logo_position, 'player_watermark_url' => $player_url, 'player_ad_on_off' => $player_ad_on_off, 'ad_offset' => $ad_offset, 'ad_skip' => $ad_skip, 'ad_website_url' => $ad_website_url, 'ad_video_type' => $ad_video_type, 'ad_video_url' => $ad_video_url);

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function payment_settings()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $settings = Settings::findOrFail('1');

        $currency_code = $settings->currency_code;
        $paypal_payment_on_off = $settings->paypal_payment_on_off ? "true" : "false";
        $paypal_mode = $settings->paypal_mode;
        $paypal_client_id = $settings->paypal_client_id ? $settings->paypal_client_id : '';
        $paypal_secret = $settings->paypal_secret ? $settings->paypal_secret : '';
        $stripe_payment_on_off = $settings->stripe_payment_on_off ? "true" : "false";
        $stripe_secret_key = $settings->stripe_secret_key ? $settings->stripe_secret_key : '';
        $stripe_publishable_key = $settings->stripe_publishable_key ? $settings->stripe_publishable_key : '';
        $razorpay_payment_on_off = $settings->razorpay_payment_on_off ? "true" : "false";
        $razorpay_key = $settings->razorpay_key;
        $razorpay_secret = $settings->razorpay_secret;

        $paystack_payment_on_off = $settings->paystack_payment_on_off ? "true" : "false";
        $paystack_secret_key = $settings->paystack_secret_key;
        $paystack_public_key = $settings->paystack_public_key;

        $response[] = array('currency_code' => $currency_code, 'paypal_payment_on_off' => $paypal_payment_on_off, 'paypal_mode' => $paypal_mode, 'paypal_client_id' => $paypal_client_id, 'paypal_secret' => $paypal_secret, 'stripe_payment_on_off' => $stripe_payment_on_off, 'stripe_secret_key' => $stripe_secret_key, 'stripe_publishable_key' => $stripe_publishable_key, 'razorpay_payment_on_off' => $razorpay_payment_on_off, 'razorpay_key' => $razorpay_key, 'razorpay_secret' => $razorpay_secret, 'paystack_payment_on_off' => $paystack_payment_on_off, 'paystack_secret_key' => $paystack_secret_key, 'paystack_public_key' => $paystack_public_key, 'success' => '1');

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }


    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
    
        if ($email == '' || $password == '') {
            $response[] = array('msg' => "All fields are required", 'success' => '0');
            return response()->json([
                'VIDEO_STREAMING_APP' => $response,
                'status_code' => 401,
            ]);
        }
    
        $user_info = User::where('email', $email)->first();
    
        if ($user_info && Hash::check($password, $user_info->password)) {
            if ($user_info->status == 0) {
                $response[] = array('msg' => trans('words.account_banned'), 'success' => '0');
            } else {
                $user_id = $user_info->id;
                $user = User::findOrFail($user_id);
    
                $user_image = $user->user_image != '' 
                    ? \URL::asset('upload/' . $user->user_image) 
                    : \URL::asset('upload/profile.png');
    
                // Device management logic
                $device_id = $request->device_id;
                $device_name = $request->device_name;
                $ip_address = $request->ip();
    
                // Create or update device_manage record
                $device = DeviceManage::updateOrCreate(
                    [
                        'user_id' => $user_id,
                        'device_id' => $device_id,
                    ],
                    [
                        'username' => $user->name,
                        'device_name' => $device_name,
                        'ip_address' => $ip_address,
                        'is_login' => true,
                    ]
                );
    
                $response[] = array('user_id' => $user, 'msg' => 'Login successfully...', 'success' => '701');
            }
        } else {
            $response[] = array('msg' => trans('words.email_password_invalid'), 'success' => '0');
        }
    
        return response()->json([
            'VIDEO_STREAMING_APP' => $response,
            'Device data' =>  $device,
            'status_code' => 200,
        ]);
    }
    
    public function postSocialLogin(Request $request)
    {

        // $get_data=checkSignSalt($_POST['data']);

        $login_type = $request->login_type; // FB or Google
        $social_id = $request->social_id;
        $user_name = $request->name;
        $user_email = $request->email;

        if ($login_type == "google") {
            $finduser = User::where('google_id', $social_id)->orwhere('email', $user_email)->first();
        } else {
            $finduser = User::where('facebook_id', $social_id)->orwhere('email', $user_email)->first();
        }

        if ($finduser) {

            if ($finduser->user_image != '') {
                $user_image = \URL::asset('upload/' . $finduser->user_image);
            } else {
                $user_image = \URL::asset('upload/profile.png');
            }

            if ($finduser->status == 0) {

                $response[] = array('msg' => trans('words.account_banned'), 'success' => '0');
            } else {

                $response[] = array('user_id' => $finduser->id, 'name' => $finduser->name, 'email' => $finduser->email, 'user_image' => $user_image, 'msg' => 'Login successfully...', 'success' => '1');
            }
        } else {

            $newUser = User::create([
                'name' => $user_name,
                'email' => $user_email,
                'password' => bcrypt('123456dummy')
            ]);

            $user_id = $newUser->id;
            $user = User::findOrFail($user_id);
            if ($login_type == "google") {
                $user->google_id = $social_id;
            } else {
                $user->facebook_id = $social_id;
            }
            $user->save();


            if ($user->user_image != '') {
                $user_image = \URL::asset('upload/' . $user->user_image);
            } else {
                $user_image = \URL::asset('upload/profile.png');
            }

            if ($finduser->status == 0) {

                $response[] = array('msg' => trans('words.account_banned'), 'success' => '0');
            } else {
                $response[] = array('user_id' => $finduser->id, 'name' => $finduser->name, 'email' => $finduser->email, 'user_image' => $user_image, 'msg' => 'Login successfully...', 'success' => '1');
            }
        }


        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }


    public function postSignup(Request $request)
    {


        // $get_data=checkSignSalt($_POST['data']);

        //echo $get_data['name'];
        //exit;

        $name = $request->name;
        $last_name = $request->last_name;
        $email = $request->email;
        $password = $request->password;
        $username = $request->username;
        $phone = $request->phone;


        if ($name == '' and $email == '' and $password == '' and $phone == '') {

            $response[] = array('msg' => "All fields required", 'success' => '0');

            return \Response::json(array(
                'VIDEO_STREAMING_APP' => $response,
                'status_code' => 401
            ));
        }

        $user_info = User::where('email', $email)
        ->orWhere('phone', $phone)
        ->first();
    
    if ($user_info) {
        $response = [];
    
        // Check what triggered the match
        if ($user_info->email === $email) {
            $response[] = array('msg' => "Email Address Already Exists", 'success' => '0');
        }
    
        if ($user_info->phone === $phone) {
            $response[] = array('msg' => "Phone Address Already Exists", 'success' => '0');
        }
    
        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 701
        ));
    }
        $user = new User;

        //$confirmation_code = str_random(30);


        $user->usertype = 'User';
        $user->name = $name;
        $user->email = $email;
        $user->last_name = $last_name;
        $user->status = 0;
        $user->phone = $phone;
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->save();

        //Welcome Email

        // $otp = rand(100000, 999999);
        $otp = 12345;
        // Mail::to($user->email)->send(new UserSendEmailVerification($user, $otp));

        DB::table('password_resets')->updateOrInsert(
            ['email' => $user->phone],
            [
                'token' => $otp,
                'created_at' => now()
            ]
        );


        $response[] = array('msg' => trans('words.otp_send'), 'success' => '1', 'data' => $user);
        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }


    public function getUserSettings($userId)
    {
        // Fetch user settings for the given user ID
        $userSettings = UserSetting::where('user_id', $userId)->first();

        if ($userSettings) {
            return response()->json([
                'success' => true,
                'message' => 'User settings retrieved successfully',
                'data' => $userSettings
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User settings not found'
            ], 404);
        }
    }

    // Post (Create or Update) User Settings
    public function postUserSettings(Request $request, $userId)
    {
        // Validate the incoming data
        $validator = Validator::make($request->all(), [
            'display_language' => 'nullable|string',
            'default_audio_language' => 'nullable|string',
            'default_subtitle_language' => 'nullable|string',
            'auto_play_next_episode' => 'nullable|boolean',
            'auto_play_preview' => 'nullable|boolean',
            'data_usage_per_screen' => 'nullable|boolean',
            'notification_new_series_or_episode' => 'nullable|boolean',
            'notification_new_recommendation_or_arrival' => 'nullable|boolean',
            'notification_survey_and_research' => 'nullable|boolean',
            'notification_membership_offer_and_promo' => 'nullable|boolean',
            'notification_account_updates' => 'nullable|boolean',
            'notification_email_1' => 'nullable',
            'notification_email_2' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 400);
        }

        // Create or update the user settings
        $userSetting = UserSetting::updateOrCreate(
            ['user_id' => $userId],  // Check for existing record with user_id
            $request->all()  // Update fields with incoming request data
        );

        return response()->json([
            'success' => true,
            'message' => 'User settings updated successfully',
            'data' => $userSetting
        ], 200);
    }



    public function emailCheck(Request $request)
    {
        $email = $request->email;
    
        $user_info = User::where('email', $email)->first();
    
        if ($user_info) {
            return response()->json([
                'VIDEO_STREAMING_APP' => [
                    'msg' => "Email Address Already Exists",
                    'success' => '0',
                ],
                'status_code' => 409
            ], 409); // Set HTTP status code to 409
        }
    
        return response()->json([
            'VIDEO_STREAMING_APP' => [
                'msg' => "Email is valid",
                'success' => '1',
            ],
            'status_code' => 200
        ], 200); // Set HTTP status code to 200
    }
    public function verify_signup(Request $request)
    {
        $otp = $request->otp;
        $email = $request->email;

        if ($otp == '' and $email == '') {
            $response[] = array('msg' => "All fields required", 'success' => '0');
            return \Response::json(array(
                'VIDEO_STREAMING_APP' => $response,
                'status_code' => 401
            ));
        }
        $otpRecord = DB::table('password_resets')
        ->where('email', $request->email)
        ->where('token', $request->otp)
        ->first();


        if (!$otpRecord) {
            return response()->json(['message' => 'Invalid OTP'], 400);
        }
        $user = User::where('email', $request->email)
        ->orWhere('phone', $request->email)
        ->first();

        $user->status = 1;
        $user->save();
        DB::table('password_resets')->where('email', $user->email)->delete();


            $response[] = array('msg' => trans('words.account_created_successfully'), 'success' => '1', 'data' => $user);
            return \Response::json(array(
                'VIDEO_STREAMING_APP' => $response,
                'status_code' => 200
            ));
    }

    public function forgot_password(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $email = isset($request->email) ? $request->email : '';

        $user = User::where('email', $email)->first();

        //dd($user);
        //exit;

        if (!$user) {
            $response[] = array('msg' => 'We can\'t find a user with that e-mail address.', 'success' => '1');
        } else {

            $email_a = array("email" => $email);

            $response1 = Password::sendResetLink($email_a, function (Message $message) {
                $message->subject('Your Password Reset Link');
                $message->sender(getcong('site_email'));
            });


            $response[] = array('msg' => 'We have e-mailed your password reset link!', 'success' => '1');
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }
    public function forgot_password_new(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $email = isset($request->email) ? $request->email : '';
        $user = User::where('email', $email)->first();

        //dd($user);
        //exit;

        if (!$user) {
            $response[] = array('msg' => 'We can\'t find a user with that e-mail address.', 'success' => '1');
        } else {

            $newOtp = mt_rand(100000, 999999); // Replace with your OTP generation logic
            $newOtp = 1234; // Replace with your OTP generation logic

            $user = User::where('email', $request->email)->first();
            $otp = new OTP;
            $otp->user_id = $user->id;
            $otp->otp = $newOtp;
            $otp->otp_expiry = strtotime("+600 seconds");
            $otp->save();

            $user_full_name = $user->name;

            $data_email = array(
                'email' => $user->email,
                'otp' => $newOtp,
            );
            // \Mail::send('emails.otp', $data_email, function ($message) use ($user, $user_full_name) {
            //     $message->to($user->email, $user_full_name)
            //         ->from(getcong('site_email'), getcong('site_name'))
            //         ->subject('Account Recovery');
            // });


            $response[] = array('msg' => 'We have e-mailed your password reset OTP!', 'success' => '1');
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }
    public function verify_otp(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $input_code = isset($request->input_code) ? $request->input_code : '';


        // if (!$input_code) {
        //     $response[] = array('msg' => 'Please enter Valid OTP.', 'success' => '1');
        // } else {

            $user = User::where('email', $request->email)->first();
            $otps = OTP::where('user_id', $user->id)->orderBy('id', 'desc')->first();


            // Check if the OTP matches and is still valid
            if ($otps->otp != $request->input_code or $otps->otp_expiry < time()) {
                \Session::flash('error', 'Invalid OTP. Please try again.');
                $response[] = array('msg' => 'Please enter Valid OTP.', 'success' => '1');
            }
            else{
              $response[] = array('msg' => 'Succesful.','success' => '1', 'user' => $user);
            }

        // }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }
    public function password_change(Request $request)
    {

        $user = User::where('email', $request->email)->first();

        // Reset the password
        $user->password = bcrypt($request->input('password'));

        $user->save();
        $otps = OTP::where('user_id', $user->id)->orderBy('id', 'desc')->first();
        $otps->delete();

        $response[] = array('msg' => 'Your Password has been Changed','success' => '1', 'user' => $user);

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function dashboard(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $user_id = $request->user_id;

        $user = User::findOrFail($user_id);


        if ($user->user_image != '') {
            $user_image = \URL::asset('upload/' . $user->user_image);
        } else {
            $user_image = \URL::asset('upload/profile.jpg');
        }

        if ($user->plan_id == 0) {
            $current_plan = '';
        } else {
            $current_plan = SubscriptionPlan::getSubscriptionPlanInfo($user->plan_id, 'plan_name');
        }

        if ($user->exp_date) {
            $expires_on = date('F,  d, Y', $user->exp_date);
        } else {
            $expires_on = '';
        }

        if ($user->start_date) {
            $last_invoice_date = date('F,  d, Y', $user->start_date);
        } else {
            $last_invoice_date = '';
        }

        $last_invoice_plan = $current_plan;

        if ($user->plan_amount) {
            $last_invoice_amount = number_format($user->plan_amount, 2, '.', '');
        } else {
            $last_invoice_amount = '';
        }


        $response[] = array('user_id' => $user_id, 'name' => $user->name, 'email' => $user->email, 'user_image' => $user_image, 'current_plan' => $current_plan, 'expires_on' => $expires_on, 'last_invoice_date' => $last_invoice_date, 'last_invoice_plan' => $last_invoice_plan, 'last_invoice_amount' => $last_invoice_amount, 'msg' => 'Dashboard', 'success' => '1');


        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }
    public function profile(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::findOrFail($user_id);

        // Prepare the user image URL
        $user_image = $user->user_image
            ? \URL::asset('upload/' . $user->user_image)
            : \URL::asset('upload/profile.jpg');

        // Prepare the user data using an associative array
        $response = [
            'user_id' => $user_id,
            'name' => $user->name,
            'username' => $user->username ?? '',
            'email' => $user->email,
            'phone' => $user->phone ?? '',
            'user_address' => $user->user_address ?? '',
            'user_image' => $user_image ?? '',
            'msg' => 'Profile',
            'success' => '1',
        ];

        return response()->json([
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ]);
    }


    public function profile_update(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::findOrFail($user_id);

        // Handle user image upload
        if ($request->hasFile('user_image')) {
            // Delete old image if it exists
            if ($user->user_image) {
                \File::delete(public_path('/upload/') . $user->user_image);
            }

            // Store new image
            $icon = $request->file('user_image');
            $tmpFilePath = public_path('/upload/');
            $hardPath = Str::slug($user->name, '-') . '-' . md5(time());
            $img = Image::make($icon);
            $img->fit(250, 250)->save($tmpFilePath . $hardPath . '-b.jpg');

            $user->user_image = $hardPath . '-b.jpg';
        }

        // Update user data
        $user->name = $request->name ?? $user->name; // Keep existing name if not provided
        $user->phone = $request->phone ?? $user->phone; // Keep existing phone if not provided
        $user->user_address = $request->user_address ?? $user->user_address; // Keep existing address if not provided

        // Only update the password if it's provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }


        $user->save();

        // Prepare response
        $response[] = [
            'msg' => trans('words.successfully_updated'),
            'success' => '1',
            'data' => $user
        ];

        return response()->json([
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ]);
    }


    public function updateProfileImage(Request $request)
    {
        // Validate the request (ensure the user is authenticated and an image is provided)
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'user_image' => 'required|image', // Add any other validation you need
        ]);

        // Get user and check if the ID exists
        $user_id = $request->user_id;
        $user = User::findOrFail($user_id);

        // Check if the user has an existing profile image
        if ($user->user_image) {
            // Delete the old image if exists
            \File::delete(public_path('/upload/') . $user->user_image);
        }

        // Process the new uploaded image
        if ($request->hasFile('user_image')) {
            $icon = $request->file('user_image');
            $tmpFilePath = public_path('/upload/');
            $hardPath = Str::slug($user->name, '-') . '-' . md5(time());
            $img = Image::make($icon);
            $img->fit(250, 250)->save($tmpFilePath . $hardPath . '-b.jpg'); // You can adjust the image size here

            // Save the new image path in the user record
            $user->user_image = $hardPath . '-b.jpg';
            $user->save();
        }

        // Generate the full URL for the image
        $imageUrl = asset('upload/' . $user->user_image);

        // Return success response with full user data including image path and URL
        return response()->json([
            'message' => 'Profile image updated successfully',
            'success' => '1',
            'data' => [
                'id' => $user->id,
                'usertype' => $user->usertype,
                'login_status' => $user->login_status,
                'google_id' => $user->google_id,
                'facebook_id' => $user->facebook_id,
                'name' => $user->name,
                'username' => $user->username,
                'email' => $user->email,
                'phone' => $user->phone,
                'user_address' => $user->user_address,
                'user_image' => $user->user_image,  // The relative image path
                'image_url' => $imageUrl,  // Full URL to access the image
                'status' => $user->status,
                'plan_id' => $user->plan_id,
                'start_date' => $user->start_date,
                'exp_date' => $user->exp_date,
                'paypal_payment_id' => $user->paypal_payment_id,
                'stripe_payment_id' => $user->stripe_payment_id,
                'razorpay_payment_id' => $user->razorpay_payment_id,
                'paystack_payment_id' => $user->paystack_payment_id,
                'plan_amount' => $user->plan_amount,
                'confirmation_code' => $user->confirmation_code,
                'session_id' => $user->session_id,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
            ],
            'status_code' => 200
        ]);
    }




    public function faq()
    {
        // Fetch only active FAQs (status = 1)
        $faqs = Faq::where('status', 1)->get(); // Adjust this according to your needs

        // Return the FAQ data in a JSON response
        return response()->json([
            'faqs' => $faqs,
            'status_code' => 200
        ]);
    }
    public function contact_support(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 422,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Create a new contact support entry
        $contactSupport = ContactSupport::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        // Return a successful response
        return response()->json([
            'status_code' => 201,
            'message' => 'Contact support request submitted successfully.',
            'data' => $contactSupport,
        ], 201);

    }
    public function user_feedback(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'rating_number' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status_code' => 422,
                'errors' => $validator->errors(),
            ], 422);
        }

        // Create a new contact support entry
        $contactSupport = ContactSupport::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        // Return a successful response
        return response()->json([
            'status_code' => 201,
            'message' => 'Contact support request submitted successfully.',
            'data' => $contactSupport,
        ], 201);

    }

    public function check_user_plan(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $user_id = $request->user_id;

        $user_info = User::findOrFail($user_id);
        $user_plan_id = $user_info->plan_id;
        $user_plan_exp_date = $user_info->exp_date;


        if ($user_plan_id == 0) {
            //\Session::flash('flash_message', 'Login status reset!');
            $response = array('msg' => 'Please select subscription plan', 'success' => '0');

            return \Response::json(array(
                'VIDEO_STREAMING_APP' => $response,
                'status_code' => 200
            ));
        } else if (strtotime(date('m/d/Y')) > $user_plan_exp_date) {

            $current_plan = SubscriptionPlan::getSubscriptionPlanInfo($user_plan_id, 'plan_name');

            $expired_on = $user_plan_exp_date;

            $response = array('current_plan' => $current_plan, 'expired_on' => $expired_on, 'msg' => 'Renew subscription plan', 'success' => '0');

            return \Response::json(array(
                'VIDEO_STREAMING_APP' => $response,
                'status_code' => 200
            ));
        } else {
            $current_plan = SubscriptionPlan::getSubscriptionPlanInfo($user_plan_id, 'plan_name');

            $expired_on = $user_plan_exp_date;

            $response = array('current_plan' => $current_plan, 'expired_on' => $expired_on, 'msg' => 'My Subscription', 'success' => '1');

            return \Response::json(array(
                'VIDEO_STREAMING_APP' => $response,
                'status_code' => 200
            ));
        }
    }

    public function subscription_plan(Request $request)
{
    $plan_list = SubscriptionPlan::where('status', '1')->orderby('id')->get();
    $settings = Settings::findOrFail('1');
    $currency_code = $settings->currency_code;

    $monthly_plans = [];
    $yearly_plans = [];

    foreach ($plan_list as $plan_data) {
        $plan_id = $plan_data->id;
        $plan_name = $plan_data->plan_name;
        $plan_duration = SubscriptionPlan::getPlanDuration($plan_data->id); // Assuming it returns "1 Month(s)", "30 Day(s)", or "1 Year(s)"
        $plan_price = $plan_data->plan_price;
        $finalprice = $plan_data->finalprice ?? null;

        $plan_info = [
            "plan_id" => $plan_id,
            "plan_name" => $plan_name,
            "plan_duration" => $plan_duration,
            "plan_price" => $plan_price,
            "finalprice" => $finalprice,
            "currency_code" => $currency_code,
        ];

        // Updated classification logic
        if (str_contains(strtolower($plan_duration), 'month') || str_contains(strtolower($plan_duration), 'day')) {
            $monthly_plans[] = $plan_info;
        } elseif (str_contains(strtolower($plan_duration), 'year')) {
            $yearly_plans[] = $plan_info;
        }
    }

    return \Response::json([
        'VIDEO_STREAMING_APP' => [
            'monthly_plans' => $monthly_plans,
            'yearly_plans' => $yearly_plans,
        ],
        'status_code' => 200,
    ]);
}
    public function stripe_token_get(Request $request)
    {

        // $get_data=checkSignSalt($_POST['data']);

        $amount = $request->amount;

        \Stripe\Stripe::setApiKey(getcong('stripe_secret_key'));

        $currency_code = getcong('currency_code') ? getcong('currency_code') : 'USD';

        //$amount=10;

        $intent = \Stripe\PaymentIntent::create([
            'amount' => $amount * 100,
            'currency' => $currency_code,
        ]);

        if (!isset($intent->client_secret)) {
            $response[] = array("msg" => "The Stripe Token was not generated correctly", 'success' => '0');
        } else {
            $client_secret = $intent->client_secret;

            $response[] = array("stripe_payment_token" => $client_secret, "msg" => "Stripe Token", 'success' => '1');
        }


        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function transaction_add(Request $request)
    {
        //$user = User::findOrFail(348);


        $plan_id = $request->plan_id;
        $user_id = $request->user_id;
        $payment_id = $request->payment_id;
        $payment_gateway = $request->payment_gateway;

        $plan_info = SubscriptionPlan::where('id', $plan_id)->where('status', '1')->first();
        $plan_name = $plan_info->plan_name;
        $plan_days = $plan_info->plan_days;
        $plan_amount = $plan_info->plan_price;


        $user = User::findOrFail($user_id);



        $user_email = $user->email;



        $user->plan_id = $plan_id;
        $user->start_date = strtotime(date('m/d/Y'));
        $user->exp_date = strtotime(date('m/d/Y', strtotime("+$plan_days days")));

        if ($payment_gateway == "Stripe") {
            $user->stripe_payment_id = $payment_id;
        } else if ($payment_gateway == "Razorpay") {
            $user->razorpay_payment_id = $payment_id;
        } else if ($payment_gateway == "Paystack") {
            $user->paystack_payment_id = $payment_id;
        } else if ($payment_gateway == "woo") {
            $user->paystack_payment_id = $payment_id;
        } else {
            $user->paypal_payment_id = $payment_id;
        }

        $user->plan_amount = $plan_amount;
        $user->save();

        //Transactions info update
        $payment_trans = new Transactions;

        $payment_trans->user_id = $user_id;
        $payment_trans->email = $user_email;
        $payment_trans->plan_id = $plan_id;
        $payment_trans->gateway = $payment_gateway;
        $payment_trans->payment_amount = $plan_amount;
        $payment_trans->payment_id = $payment_id;
        $payment_trans->date = strtotime(date('m/d/Y H:i:s'));
        $payment_trans->save();

        $response[] = array('msg' => trans('words.payment_success'), 'success' => '1');

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function logout()
    {
        $response[] = array('msg' => 'logout', 'success' => '1');

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }


    public function home(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $slider = Slider::where('status', 1)->orderby('id', 'DESC')->get();

        foreach ($slider as $slider_data) {
            $response['slider'][] = array("slider_title" => stripslashes($slider_data->slider_title), "slider_type" => $slider_data->slider_type, "slider_post_id" => $slider_data->slider_post_id, "slider_image" => \URL::to('upload/source/' . $slider_data->slider_image));
        }

        //Recently Watched
        if (isset($request->user_id)) {
            $current_user_id = $request->user_id;
            //exit;
            $recently_watched = RecentlyWatched::where('user_id', $current_user_id)->orderby('id', 'DESC')->get();

            if (count($recently_watched) > 0) {
                foreach ($recently_watched as $watched_videos) {



                    if ($watched_videos->video_type == "Movies") {
                        $thumb_image = URL::to('upload/source/' . recently_watched_info($watched_videos->video_type, $watched_videos->video_id)->video_image);

                        $video_thumb_image = $thumb_image ? $thumb_image : "";

                        $video_id = $watched_videos->video_id;
                        $video_type = $watched_videos->video_type;
                    } else if ($watched_videos->video_type == "Sports") {
                        $thumb_image = URL::to('upload/source/' . recently_watched_info($watched_videos->video_type, $watched_videos->video_id)->video_image);

                        $video_thumb_image = $thumb_image ? $thumb_image : "";

                        $video_id = $watched_videos->video_id;
                        $video_type = $watched_videos->video_type;
                    } else if ($watched_videos->video_type == "Episodes") {
                        $thumb_image = URL::to('upload/source/' . recently_watched_info($watched_videos->video_type, $watched_videos->video_id)->video_image);

                        $video_thumb_image = $thumb_image ? $thumb_image : "";

                        $video_id = recently_watched_info($watched_videos->video_type, $watched_videos->video_id)->episode_series_id;
                        $video_type = "Shows";
                    } else if ($watched_videos->video_type == "LiveTV") {
                        $thumb_image = URL::to('upload/source/' . recently_watched_info($watched_videos->video_type, $watched_videos->video_id)->channel_thumb);

                        $video_thumb_image = $thumb_image ? $thumb_image : "";

                        $video_id = $watched_videos->video_id;
                        $video_type = $watched_videos->video_type;
                    } else {
                        $video_thumb_image = "";

                        $video_id = $watched_videos->video_id;
                        $video_type = $watched_videos->video_type;
                    }

                    $response['recently_watched'][] = array("video_id" => $video_id, "video_type" => $video_type, "video_thumb_image" => $video_thumb_image);
                }
            } else {


                $response['recently_watched'] = array();
            }
        } else {
            $response['recently_watched'] = array();
        }

        $home_sections = HomeSection::findOrFail('1');

        foreach (explode(",", $home_sections->section1_latest_movie) as $latest_movie) {
            if (Movies::getMoviesInfo($latest_movie, 'status') == 1) {
                $movie_id = Movies::getMoviesInfo($latest_movie, 'id');
                $movie_title = Movies::getMoviesInfo($latest_movie, 'video_title');
                $movie_poster = URL::to('upload/source/' . Movies::getMoviesInfo($latest_movie, 'video_image_thumb'));
                $movie_duration = Movies::getMoviesInfo($latest_movie, 'duration');
                $movie_access = Movies::getMoviesInfo($latest_movie, 'video_access');

                $response['latest_movies'][] = array(
                    "movie_id" => $movie_id,
                    "movie_title" => stripslashes($movie_title),
                    "movie_poster" => $movie_poster,
                    "movie_duration" => $movie_duration,
                    "movie_access" => $movie_access,
                    "movie_type" => 'movie',
                    "duration" => "2h 13m 46s",
                    "movie_rating" => "4.5"
                );
            }
        }
        foreach (explode(",", $home_sections->section_live_now) as $live_now) {
            if (LiveTV::getLiveTvInfo($live_now, 'status') == 1) {
                $live_id = LiveTV::getLiveTvInfo($live_now, 'id');
                $live_title = LiveTV::getLiveTvInfo($live_now, 'channel_name');
                $live_poster = URL::to('upload/source/' . LiveTV::getLiveTvInfo($live_now, 'channel_thumb'));
                $live_access = LiveTV::getLiveTvInfo($live_now, 'channel_access');

                LiveTV::getLiveTvInfo($live_now, 'channel_url_type') ? $live_url_type = LiveTV::getLiveTvInfo($live_now, 'channel_url_type') : "";
                LiveTV::getLiveTvInfo($live_now, 'channel_url') ? $live_url = LiveTV::getLiveTvInfo($live_now, 'channel_url') : "";
                LiveTV::getLiveTvInfo($live_now, 'channel_url2') ? $live_url2 = LiveTV::getLiveTvInfo($live_now, 'channel_url2') : $live_url2 = "";
                LiveTV::getLiveTvInfo($live_now, 'channel_url3') ? $live_url3 = LiveTV::getLiveTvInfo($live_now, 'channel_url3') : $live_url3 = "";
                LiveTV::getLiveTvInfo($live_now, 'channel_cat_id') ? $live_cat_id = LiveTV::getLiveTvInfo($live_now, 'channel_cat_id') : $live_cat_id = "";

                $response['live_now'][] = array("live_id" => $live_id, "live_title" => stripslashes($live_title), "live_poster" => $live_poster, "live_access" => $live_access, "live_url_type" => $live_url_type, "live_url" => $live_url, "live_url2" => $live_url2, "live_url3" => $live_url3, "live_cat_id" => $live_cat_id);
            }
        }

        foreach (explode(",", $home_sections->section2_latest_series) as $latest_series) {
            if (Series::getSeriesInfo($latest_series, 'status') == 1) {
                $show_id = Series::getSeriesInfo($latest_series, 'id');
                $show_title = Series::getSeriesInfo($latest_series, 'series_name');
                $show_poster = URL::to('upload/source/' . Series::getSeriesInfo($latest_series, 'series_poster'));

                // Adding static type and rating
                $show_type = "Series"; // Static type value
                $show_rating = "4.7"; // Static rating value

                $response['latest_shows'][] = array(
                    "show_id" => $show_id,
                    "show_title" => stripslashes($show_title),
                    "show_poster" => $show_poster,
                    "show_type" => $show_type, // Adding type
                    "duration" => "2h 13m 46s",
                    "show_rating" => $show_rating // Adding rating
                );
            }
        }

        //Popular
        foreach (explode(",", $home_sections->section3_popular_movie) as $popular_movie) {
            if (Movies::getMoviesInfo($popular_movie, 'status') == 1) {
                $movie_id = Movies::getMoviesInfo($popular_movie, 'id');
                $movie_title = Movies::getMoviesInfo($popular_movie, 'video_title');
                $movie_poster = URL::to('upload/source/' . Movies::getMoviesInfo($popular_movie, 'video_image_thumb'));
                $movie_duration = Movies::getMoviesInfo($popular_movie, 'duration');
                $movie_access = Movies::getMoviesInfo($popular_movie, 'video_access');

                // Adding static type and rating
                $movie_type = "Movie"; // Static type value
                $movie_rating = "4.5"; // Static rating value

                $response['popular_movies'][] = array(
                    "movie_id" => $movie_id,
                    "movie_title" => stripslashes($movie_title),
                    "movie_poster" => $movie_poster,
                    "movie_duration" => $movie_duration,
                    "movie_access" => $movie_access,
                    "movie_type" => $movie_type, // Adding type
                    "duration" => "2h 13m 46s",
                    "movie_rating" => $movie_rating // Adding rating
                );
            }
        }


        foreach (explode(",", $home_sections->section3_popular_series) as $popular_series) {
            if (Series::getSeriesInfo($popular_series, 'status') == 1) {
                $show_id = Series::getSeriesInfo($popular_series, 'id');
                $show_title = Series::getSeriesInfo($popular_series, 'series_name');
                $show_poster = URL::to('upload/source/' . Series::getSeriesInfo($popular_series, 'series_poster'));

                // Adding static type and rating
                $show_type = "Series"; // Static type value
                $show_rating = "4.2"; // Static rating value

                $response['popular_shows'][] = array(
                    "show_id" => $show_id,
                    "show_title" => stripslashes($show_title),
                    "show_poster" => $show_poster,
                    "show_type" => $show_type, // Adding type
                    "duration" => "2h 13m 46s",
                    "show_rating" => $show_rating // Adding rating
                );
            }
        }

        //Section 3
        $response['home_sections3_title'] = $home_sections->section3_title;
        $response['home_sections3_type'] = $home_sections->section3_type;
        $response['home_sections3_lang_id'] = $home_sections->section3_lang ? $home_sections->section3_lang : '';

        if ($home_sections->section3_type == "Series") {
            $section3_lang_id = $home_sections->section3_lang;
            $home_sections_list3 = Series::where('status', 1)->where('series_lang_id', $section3_lang_id)->orderBy('id', 'DESC')->take(10)->get();

            if (count($home_sections_list3) > 0 and  $section3_lang_id != '') {
                foreach ($home_sections_list3 as $list3_data) {
                    $s_m_id = $list3_data->id;
                    $s_m_title =  stripslashes($list3_data->series_name);
                    $s_m_poster =  URL::to('upload/source/' . $list3_data->series_poster);

                    $response['home_sections3'][] = array("show_id" => $s_m_id, "show_title" => $s_m_title, "show_poster" => $s_m_poster);
                }
            } else {
                $response['home_sections3'] = array();
            }
        } else {
            $section3_lang_id = $home_sections->section3_lang;
            $home_sections_list3 = Movies::where('status', 1)->where('movie_lang_id', $section3_lang_id)->orderBy('id', 'DESC')->take(10)->get();

            if (count($home_sections_list3) > 0 and  $section3_lang_id != '') {
                foreach ($home_sections_list3 as $list3_data) {
                    $s_m_id = $list3_data->id;
                    $s_m_title =  stripslashes($list3_data->video_title);
                    $s_m_poster =  URL::to('upload/source/' . $list3_data->video_image_thumb);
                    $s_m_duration = $list3_data->duration;
                    $s_m_access = $list3_data->video_access;

                    $response['home_sections3'][] = array("movie_id" => $s_m_id, "movie_title" => $s_m_title, "movie_poster" => $s_m_poster, "movie_duration" => $s_m_duration, "movie_access" => $s_m_access);
                }
            } else {
                $response['home_sections3'] = array();
            }
        }

        //Section 4
        $response['home_sections4_title'] = $home_sections->section4_title;
        $response['home_sections4_type'] = $home_sections->section4_type;
        $response['home_sections4_lang_id'] = $home_sections->section4_lang ? $home_sections->section4_lang : '';

        if ($home_sections->section4_type == "Series") {
            $section4_lang_id = $home_sections->section4_lang;
            $home_sections_list4 = Series::where('status', 1)->where('series_lang_id', $section4_lang_id)->orderBy('id', 'DESC')->take(10)->get();

            if (count($home_sections_list4) > 0 and  $section4_lang_id != '') {

                foreach ($home_sections_list4 as $list4_data) {
                    $s_m_id = $list4_data->id;
                    $s_m_title =  stripslashes($list4_data->series_name);
                    $s_m_poster =  URL::to('upload/source/' . $list4_data->series_poster);

                    $response['home_sections4'][] = array("show_id" => $s_m_id, "show_title" => $s_m_title, "show_poster" => $s_m_poster);
                }
            } else {
                $response['home_sections4'] = array();
            }
        } else {
            $section4_lang_id = $home_sections->section4_lang;
            $home_sections_list4 = Movies::where('status', 1)->where('movie_lang_id', $section4_lang_id)->orderBy('id', 'DESC')->take(10)->get();

            if (count($home_sections_list4) > 0 and  $section4_lang_id != '') {
                foreach ($home_sections_list4 as $list4_data) {
                    $s_m_id = $list4_data->id;
                    $s_m_title =  stripslashes($list4_data->video_title);
                    $s_m_poster =  URL::to('upload/source/' . $list4_data->video_image_thumb);
                    $s_m_duration = $list4_data->duration;
                    $s_m_access = $list4_data->video_access;

                    $response['home_sections4'][] = array("movie_id" => $s_m_id, "movie_title" => $s_m_title, "movie_poster" => $s_m_poster, "movie_duration" => $s_m_duration, "movie_access" => $s_m_access);
                }
            } else {
                $response['home_sections4'] = array();
            }
        }
        // Section 5
        $response['home_sections5_title'] = $home_sections->section5_title;
        $response['home_sections5_type'] = $home_sections->section5_type;
        $response['home_sections5_lang_id'] = $home_sections->section5_lang ? $home_sections->section5_lang : '';

        if ($home_sections->section5_type == "Series") {
            $section5_lang_id = $home_sections->section5_lang;
            $home_sections_list5 = Series::where('status', 1)->where('series_lang_id', $section5_lang_id)->orderBy('id', 'DESC')->take(10)->get();

     if (count($home_sections_list5) > 0 && $section5_lang_id != '') {
        foreach ($home_sections_list5 as $list5_data) {
            $s_m_id = $list5_data->id;
            $s_m_title = stripslashes($list5_data->series_name);
            $s_m_poster = URL::to('upload/source/' . $list5_data->series_poster);

            // Adding static type and rating for series
            $s_m_type = "Series"; // Static type value
            $s_m_rating = "4.5"; // Static rating value

            $response['home_sections5'][] = array(
                "show_id" => $s_m_id,
                "show_title" => $s_m_title,
                "show_poster" => $s_m_poster,
                "show_type" => $s_m_type, // Adding type
                "duration" => "2h 13m 46s",
                "show_rating" => $s_m_rating // Adding rating
            );
        }
        } else {
            $response['home_sections5'] = array();
        }
        } else {
            $section5_lang_id = $home_sections->section5_lang;
            $home_sections_list5 = Movies::where('status', 1)->where('movie_lang_id', $section5_lang_id)->orderBy('id', 'DESC')->take(10)->get();

            if (count($home_sections_list5) > 0 && $section5_lang_id != '') {
            foreach ($home_sections_list5 as $list5_data) {
            $s_m_id = $list5_data->id;
            $s_m_title = stripslashes($list5_data->video_title);
            $s_m_poster = URL::to('upload/source/' . $list5_data->video_image_thumb);
            $s_m_duration = $list5_data->duration;
            $s_m_access = $list5_data->video_access;

            // Adding static type and rating for movies
            $s_m_type = "Movie"; // Static type value
            $s_m_rating = "4.8"; // Static rating value

            $response['home_sections5'][] = array(
                "movie_id" => $s_m_id,
                "movie_title" => $s_m_title,
                "movie_poster" => $s_m_poster,
                "movie_duration" => $s_m_duration,
                "movie_access" => $s_m_access,
                "movie_type" => $s_m_type, // Adding type
                "duration" => "2h 13m 46s", // Fallback rating value
                // Adding type
                "movie_rating" => $s_m_rating // Adding rating
            );
        }
            } else {
                $response['home_sections5'] = array();
            }
        }
        // Retrieve recent watches
        $recentWatches = RecentWatch::with('movie')
            ->where('user_id', $request->user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        // Base URL for the image or video
        $baseUrl = URL::to('upload/source') . '/'; // Ensure the trailing slash is added

        // Prepare recent watch data array
        $response['recent_watches'] = [];

        foreach ($recentWatches as $watch) {
            if ($watch->movie) {
                $response['recent_watches'][] = array(
            "watch_id" => $watch->id,
            "movie_id" => $watch->movie->id,
            "movie_title" => stripslashes($watch->movie->video_title),
            "image_video_url" => $baseUrl . $watch->movie->video_image_thumb,
            "watch_duration" => $watch->movie->duration, // Example additional data
            "watch_access" => $watch->movie->video_access, // Example additional data
            "movie_type" => "Movie", // Static type value
            "movie_rating" => "4.5" // Static rating value
        );
        } else {
            $response['recent_watches'][] = array(
                "watch_id" => $watch->id,
                "image_video_url" => $baseUrl, // Fallback if no movie found
                "movie_type" => "N/A", // Fallback type value
                "movie_rating" => "N/A", // Fallback rating value
                "duration" => "2h 13m 46s" // Fallback rating value
            );
        }
    }

        //$response[] = array('slider' => $slider,'success'=>'1');

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function latest_movies()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $home_sections = HomeSection::findOrFail('1');


        foreach (explode(",", $home_sections->section1_latest_movie) as $latest_movie) {
            if (Movies::getMoviesInfo($latest_movie, 'status') == 1) {
                $movie_id = Movies::getMoviesInfo($latest_movie, 'id');
                $movie_title = Movies::getMoviesInfo($latest_movie, 'video_title');
                $movie_poster = URL::to('upload/source/' . Movies::getMoviesInfo($latest_movie, 'video_image_thumb'));
                $movie_duration = Movies::getMoviesInfo($latest_movie, 'duration');
                $movie_access = Movies::getMoviesInfo($latest_movie, 'video_access');

                $response[] = array("movie_id" => $movie_id, "movie_title" => stripslashes($movie_title), "movie_poster" => $movie_poster, "movie_duration" => $movie_duration, "movie_access" => $movie_access);
            }
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function latest_shows()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $home_sections = HomeSection::findOrFail('1');

        foreach (explode(",", $home_sections->section2_latest_series) as $latest_series) {
            if (Series::getSeriesInfo($latest_series, 'status') == 1) {
                $show_id = Series::getSeriesInfo($latest_series, 'id');
                $show_title = Series::getSeriesInfo($latest_series, 'series_name');
                $show_poster = URL::to('upload/source/' . Series::getSeriesInfo($latest_series, 'series_poster'));

                $response[] = array("show_id" => $show_id, "show_title" => stripslashes($show_title), "show_poster" => $show_poster);
            }
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function popular_movies()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $home_sections = HomeSection::findOrFail('1');

        foreach (explode(",", $home_sections->section3_popular_movie) as $popular_movie) {
            if (Movies::getMoviesInfo($popular_movie, 'status') == 1) {
                $movie_id = Movies::getMoviesInfo($popular_movie, 'id');
                $movie_title = Movies::getMoviesInfo($popular_movie, 'video_title');
                $movie_poster = URL::to('upload/source/' . Movies::getMoviesInfo($popular_movie, 'video_image_thumb'));
                $movie_duration = Movies::getMoviesInfo($popular_movie, 'duration');
                $movie_access = Movies::getMoviesInfo($popular_movie, 'video_access');

                $response[] = array("movie_id" => $movie_id, "movie_title" => stripslashes($movie_title), "movie_poster" => $movie_poster, "movie_duration" => $movie_duration, "movie_access" => $movie_access);
            }
        }


        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }
    public function tranding_movies()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $home_sections = HomeSection::findOrFail('1');

        foreach (explode(",", $home_sections->section3_tranding_movie) as $section3_tranding_movie) {
            if (Movies::getMoviesInfo($section3_tranding_movie, 'status') == 1) {
                $movie_id = Movies::getMoviesInfo($section3_tranding_movie, 'id');
                $movie_title = Movies::getMoviesInfo($section3_tranding_movie, 'video_title');
                $movie_poster = URL::to('upload/source/' . Movies::getMoviesInfo($section3_tranding_movie, 'video_image_thumb'));
                $movie_duration = Movies::getMoviesInfo($section3_tranding_movie, 'duration');
                $movie_access = Movies::getMoviesInfo($section3_tranding_movie, 'video_access');

                $response[] = array("movie_id" => $movie_id, "movie_title" => stripslashes($movie_title), "movie_poster" => $movie_poster, "movie_duration" => $movie_duration, "movie_access" => $movie_access);
            }
        }


        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function popular_shows()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $home_sections = HomeSection::findOrFail('1');

        foreach (explode(",", $home_sections->section3_popular_series) as $popular_series) {
            if (Series::getSeriesInfo($popular_series, 'status') == 1) {
                $show_id = Series::getSeriesInfo($popular_series, 'id');
                $show_title = Series::getSeriesInfo($popular_series, 'series_name');
                $show_poster = URL::to('upload/source/' . Series::getSeriesInfo($popular_series, 'series_poster'));

                $response[] = array("show_id" => $show_id, "show_title" => stripslashes($show_title), "show_poster" => $show_poster);
            }
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }
    public function popular_for_you()
{
    $home_sections = HomeSection::findOrFail('1');
    $response = []; // Initialize response array

    foreach (explode(",", $home_sections->section3_popular_movie) as $popular_movie) {
        if (Movies::getMoviesInfo($popular_movie, 'status') == 1) {
            $movie_id = Movies::getMoviesInfo($popular_movie, 'id');
            $movie_title = Movies::getMoviesInfo($popular_movie, 'video_title');
            $movie_poster = FacadesURL::to('upload/source/' . Movies::getMoviesInfo($popular_movie, 'video_image_thumb'));
            $movie_duration = Movies::getMoviesInfo($popular_movie, 'duration');
            $movie_access = Movies::getMoviesInfo($popular_movie, 'video_access');

            $response[] = array(
                "movie_id" => $movie_id,
                "movie_title" => stripslashes($movie_title),
                "movie_poster" => $movie_poster,
                "movie_duration" => $movie_duration,
                "movie_access" => $movie_access,
                "type" => "movie",  // Added static value
                "rating" => 4       // Added static value
            );
        }
    }

    return \Response::json(array(
        'VIDEO_STREAMING_APP' => $response,
        'status_code' => 200
    ));
}




    public function languages()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $lang_list = Language::where('status', 1)->orderby('id')->get();

        foreach ($lang_list as $lang_data) {
            $language_id = $lang_data->id;
            $language_name = stripslashes($lang_data->language_name);
            $language_image = URL::to('upload/source/' . $lang_data->language_image);

            $response[] = array("language_id" => $language_id, "language_name" => $language_name, "language_image" => $language_image);
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function genres()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $genres_list = Genres::where('status', 1)->orderby('id')->get();

        foreach ($genres_list as $genres_data) {
            $genre_id = $genres_data->id;
            $genre_name = stripslashes($genres_data->genre_name);
            $genre_image = URL::to('upload/source/' . $genres_data->genres_image);

            $response[] = array("genre_id" => $genre_id, "genre_name" => $genre_name, "genre_image" => $genre_image);
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function shows_by_language(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $series_lang_id = $request->lang_id;

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $series_list = Series::where('status', 1)->where('series_lang_id', $series_lang_id)->orderBy('id', 'ASC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $series_list = Series::where('status', 1)->where('series_lang_id', $series_lang_id)->orderBy('series_name', 'ASC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $series_list = Series::where('status', 1)->where('series_lang_id', $series_lang_id)->inRandomOrder()->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else {
                $series_list = Series::where('status', 1)->where('series_lang_id', $series_lang_id)->orderBy('id', 'DESC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $series_list = Series::where('status', 1)->where('series_lang_id', $series_lang_id)->orderBy('id', 'DESC')->paginate(12);
        }


        $total_records = Series::where('status', 1)->where('series_lang_id', $series_lang_id)->count();

        if ($series_list->count()) {
            foreach ($series_list as $series_data) {
                $show_id = $series_data->id;
                $show_title =  stripslashes($series_data->series_name);
                $show_poster =  URL::to('upload/source/' . $series_data->series_poster);

                $response[] = array("show_id" => $show_id, "show_title" => $show_title, "show_poster" => $show_poster);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function shows_by_genre(Request $request)
    {
        //    $get_data=checkSignSalt($_POST['data']);

        $series_genres_id = $request->genre_id;


        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $series_list = Series::where('status', 1)->whereRaw("find_in_set('$series_genres_id',series_genres)")->orderBy('id', 'ASC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $series_list = Series::where('status', 1)->whereRaw("find_in_set('$series_genres_id',series_genres)")->orderBy('series_name', 'ASC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $series_list = Series::where('status', 1)->whereRaw("find_in_set('$series_genres_id',series_genres)")->inRandomOrder()->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else {
                $series_list = Series::where('status', 1)->whereRaw("find_in_set('$series_genres_id',series_genres)")->orderBy('id', 'DESC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $series_list = Series::where('status', 1)->whereRaw("find_in_set('$series_genres_id',series_genres)")->orderBy('id', 'DESC')->paginate(12);
        }


        $total_records = Series::where('status', 1)->whereRaw("find_in_set('$series_genres_id',series_genres)")->count();

        if ($series_list->count()) {
            foreach ($series_list as $series_data) {
                $show_id = $series_data->id;
                $show_title =  stripslashes($series_data->series_name);
                $show_poster =  URL::to('upload/source/' . $series_data->series_poster);

                $response[] = array("show_id" => $show_id, "show_title" => $show_title, "show_poster" => $show_poster);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function shows(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $series_list = Series::where('status', 1)->orderBy('id', 'ASC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $series_list = Series::where('status', 1)->orderBy('series_name', 'ASC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $series_list = Series::where('status', 1)->inRandomOrder()->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            } else {
                $series_list = Series::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
                $series_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $series_list = Series::where('status', '1')->orderBy('id', 'DESC')->paginate(12);
        }



        $total_records = Series::where('status', '1')->count();

        if ($series_list->count()) {
            foreach ($series_list as $series_data) {
                $show_id = $series_data->id;
                $show_title =  stripslashes($series_data->series_name);
                $show_poster =  URL::to('upload/source/' . $series_data->series_poster);

                $response[] = array("show_id" => $show_id, "show_title" => $show_title, "show_poster" => $show_poster);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function show_details(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $series_id = $request->show_id;

        $series_info = Series::where('status', 1)->where('id', $series_id)->first();

        $show_poster =  $series_info->series_poster ? URL::to('upload/source/' . $series_info->series_poster) : "";

        $show_lang = Language::getLanguageInfo($series_info->series_lang_id, 'language_name');

        //Genres List
        $series_genres_ids = $series_info->series_genres;
        foreach (explode(',', $series_genres_ids) as $genres_ids) {
            $genre_name = Genres::getGenresInfo($genres_ids, 'genre_name');
            $genre_list[] = array('genre_id' => $genres_ids, 'genre_name' => $genre_name);
        }

        $imdb_rating = $series_info->imdb_rating ? $series_info->imdb_rating : "";

        $series_slug = $series_info->series_slug;

        $shareurl = "https://" . $request->server->get('SERVER_NAME') . "/series/" . $series_slug . "/" . $series_id;


        $response = array("show_id" => $series_info->id, "show_name" => stripslashes($series_info->series_name), "show_info" => stripslashes($series_info->series_info), "imdb_rating" => $imdb_rating, "show_poster" => $show_poster, 'show_lang' => $show_lang, "genre_list" => $genre_list, "share_url" => $shareurl);

        //Season List
        $season_list = Season::where('status', 1)->where('series_id', $series_id)->get();

        if ($season_list->count()) {
            foreach ($season_list as $season_data) {
                $season_id = $season_data->id;
                $season_name =  stripslashes($season_data->season_name);
                $season_poster =  URL::to('upload/source/' . $season_data->season_poster);

                $response['season_list'][] = array("season_id" => $season_id, "season_name" => $season_name, "season_poster" => $season_poster);
            }
        } else {
            $response['season_list'] = array();
        }


        //Related Shows
        $series_list = Series::where('status', '1')->where('id', "!=", $series_info->id)->where('series_lang_id', $series_info->series_lang_id)->orderBy('id', 'DESC')->take(5)->get();

        if ($series_list->count()) {
            foreach ($series_list as $series_data) {
                $show_id = $series_data->id;
                $show_title =  stripslashes($series_data->series_name);
                $show_poster =  URL::to('upload/source/' . $series_data->series_poster);

                $response['related_shows'][] = array("show_id" => $show_id, "show_title" => $show_title, "show_poster" => $show_poster);
            }
        } else {
            $response['related_shows'] = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function seasons(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $series_id = $request->show_id;

        $season_list = Season::where('status', 1)->where('series_id', $series_id)->get();

        if ($season_list->count()) {
            foreach ($season_list as $season_data) {
                $season_id = $season_data->id;
                $season_name =  stripslashes($season_data->season_name);
                $season_poster =  URL::to('upload/source/' . $season_data->season_poster);

                $response[] = array("season_id" => $season_id, "season_name" => $season_name, "season_poster" => $season_poster);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function episodes(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);



        $user_id = $request->user_id;

        if ($user_id != '') {
            $user_plan_status = check_app_user_plan($user_id);
        } else {
            $user_plan_status = false;
        }



        $season_id = $request->season_id;

        $episode_list = Episodes::where('status', 1)->where('episode_season_id', $season_id)->get();

        if ($episode_list->count()) {
            foreach ($episode_list as $episode_data) {

                $episode_id = $episode_data->id;
                $episode_title =  stripslashes($episode_data->video_title);
                $episode_image =  URL::to('upload/source/' . $episode_data->video_image);
                $video_access =  $episode_data->video_access;
                $description =  stripslashes($episode_data->video_description);

                $duration =  $episode_data->duration;
                $release_date = isset($episode_data->release_date) ? date('M d Y', $episode_data->release_date) : '';

                $video_type =  $episode_data->video_type;

                $imdb_rating = $episode_data->imdb_rating ? $episode_data->imdb_rating : "";

                if ($video_type == "Local") {
                    $video_url =  $episode_data->video_url ? URL::to('upload/source/' . $episode_data->video_url) : "";
                } else {
                    $video_url =  $episode_data->video_url ? $episode_data->video_url : "";
                }

                $video_url_480 =  $episode_data->video_url_480 ? $episode_data->video_url_480 : '';
                $video_url_720 =  $episode_data->video_url_720 ? $episode_data->video_url_720 : '';
                $video_url_1080 =  $episode_data->video_url_1080 ? $episode_data->video_url_1080 : '';

                $subtitle_language1 =  $episode_data->subtitle_language1 ? $episode_data->subtitle_language1 : '';
                $subtitle_url1 =  $episode_data->subtitle_url1 ? $episode_data->subtitle_url1 : '';

                $subtitle_language2 =  $episode_data->subtitle_language2 ? $episode_data->subtitle_language2 : '';
                $subtitle_url2 =  $episode_data->subtitle_url2 ? $episode_data->subtitle_url2 : '';

                $subtitle_language3 =  $episode_data->subtitle_language3 ? $episode_data->subtitle_language3 : '';
                $subtitle_url3 =  $episode_data->subtitle_url3 ? $episode_data->subtitle_url3 : '';

                $download_enable =  $episode_data->download_enable ? 'true' : 'false';
                $download_url =  $episode_data->download_url ? $episode_data->download_url : "";

                $series_name = Series::getSeriesInfo($episode_data->episode_series_id, 'series_name');
                $season_name = Season::getSeasonInfo($episode_data->episode_season_id, 'season_name');

                $series_lang_id = Series::getSeriesInfo($episode_data->episode_series_id, 'series_lang_id');

                //Genres List
                $series_genres_ids = Series::getSeriesInfo($episode_data->episode_series_id, 'series_genres');
                foreach (explode(',', $series_genres_ids) as $genres_ids) {
                    $genre_name = Genres::getGenresInfo($genres_ids, 'genre_name');
                    $genre_list[] = $genre_name;
                }

                $language_name = Language::getLanguageInfo($series_lang_id, 'language_name');

                $video_quality = $episode_data->video_quality ? 'true' : 'false';
                $subtitle_on_off = $episode_data->subtitle_on_off ? 'true' : 'false';

                $video_slug =  $episode_data->video_slug;
                $episode_series_id =  $episode_data->episode_season_id;




                $shareurl = "https://" . $request->server->get('SERVER_NAME') . "/series/" . $series_name . "/seasons/" . $video_slug . "/" . $episode_series_id;


                $response[] = array("episode_id" => $episode_id, "episode_title" => $episode_title, "episode_image" => $episode_image, "video_access" => $video_access, "description" => $description, "duration" => $duration, "release_date" => $release_date, "imdb_rating" => $imdb_rating, 'video_type' => $video_type, 'video_url' => $video_url, 'video_url_480' => $video_url_480, 'video_url_720' => $video_url_720, 'video_url_1080' => $video_url_1080, 'lang_id' => $series_lang_id, 'language_name' => $language_name, 'genre_list' => $genre_list, "series_name" => stripslashes($series_name), "season_name" => $season_name, "download_enable" => $download_enable, "download_url" => $download_url, 'subtitle_language1' => $subtitle_language1, 'subtitle_url1' => $subtitle_url1, 'subtitle_language2' => $subtitle_language2, 'subtitle_url2' => $subtitle_url2, 'subtitle_language3' => $subtitle_language3, 'subtitle_url3' => $subtitle_url3, 'video_quality' => $video_quality, 'subtitle_on_off' => $subtitle_on_off, 'share_url' => $shareurl);

                unset($genre_list);
            }
        } else {
            $response = array();
        }

        if ($user_id != '') {
            DB::table('recently_watched')->insert([
                'video_type' => "Shows",
                'user_id' => $request->user_id,
                'video_id' => $episode_id
            ]);
        }

        $total_records = Episodes::where('status', 1)->where('episode_season_id', $season_id)->count();

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'user_plan_status' => $user_plan_status,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function episodes_recently_watched(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        //Recently Watched
        if (isset($request->user_id) && $request->user_id != "") {
            $current_user_id = $request->user_id;
            $video_id = $request->episode_id;

            $recently_video_count = RecentlyWatched::where('video_type', 'Episodes')->where('user_id', $current_user_id)->where('video_id', $video_id)->count();

            if ($recently_video_count <= 0) {
                //Current user recently count
                $current_user_video_count = RecentlyWatched::where('user_id', $current_user_id)->count();

                if ($current_user_video_count == 10) {
                    DB::table("recently_watched")
                        ->where("user_id", "=", $current_user_id)
                        ->orderBy("id", "ASC")
                        ->take(1)
                        ->delete();

                    $video_recent_obj = new RecentlyWatched;
                    $video_recent_obj->video_type = 'Episodes';
                    $video_recent_obj->user_id = $current_user_id;
                    $video_recent_obj->video_id = $video_id;
                    $video_recent_obj->save();
                } else {
                    $video_recent_obj = new RecentlyWatched;
                    $video_recent_obj->video_type = 'Episodes';
                    $video_recent_obj->user_id = $current_user_id;
                    $video_recent_obj->video_id = $video_id;
                    $video_recent_obj->save();
                }
            }

            $response = array('success' => true);
        } else {
            $response = array('success' => true);
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function movies(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $movies_list = Movies::where('status', 1)->orderBy('id', 'ASC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $movies_list = Movies::where('status', 1)->orderBy('video_title', 'ASC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $movies_list = Movies::where('status', 1)->inRandomOrder()->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else {
                $movies_list = Movies::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $movies_list = Movies::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
        }

        $total_records = Movies::where('status', '1')->count();

        if ($movies_list->count()) {
            foreach ($movies_list  as $movie_data) {
                $movie_id = $movie_data->id;
                $movie_title = stripslashes($movie_data->video_title);
                $movie_poster = URL::to('upload/source/' . $movie_data->video_image_thumb);
                $movie_duration = $movie_data->duration;
                $movie_access = $movie_data->video_access;
                $imdb_rating = $movie_data->imdb_rating ? (string)$movie_data->imdb_rating : "0";

                // Add movie type as 'movie'
                $type = 'movie';
                $response[] = array(
                    "movie_id" => $movie_id,
                    "movie_title" => $movie_title,
                    "movie_poster" => $movie_poster,
                    "movie_duration" => $movie_duration,
                    "movie_access" => $movie_access,
                    "imdb_rating" => $imdb_rating,
                    "type" => $type
                );
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }
    public function moviesalldata(Request $request)
    {
        $searchTerm = $request->input('search', null); // Get the search term for filtering
        $genres = Genres::all(); // Fetch all genres to map with movies and series
    
        // Fetch and filter movies
        $movies = Movies::when($searchTerm, function ($query, $searchTerm) {
            $query->where('video_title', 'like', "%$searchTerm%");
        })->get();
    
        // Fetch and filter series
        $series = Series::when($searchTerm, function ($query, $searchTerm) {
            $query->where('video_title', 'like', "%$searchTerm%");
        })->get();
    
        // Fetch live TV data (filtering can be added if needed)
        $liveTV = LiveTV::all();
    
        // Group movies by genres
        $moviesByGenre = [];
        foreach ($genres as $genre) {
            $filteredMovies = $movies->filter(function ($movie) use ($genre) {
                $movieGenreIds = explode(',', $movie->movie_genre_id);
                return in_array($genre->id, $movieGenreIds);
            })->values();
    
            if ($filteredMovies->isNotEmpty()) {
                $moviesByGenre[$genre->genre_slug] = [
                    'title' => $genre->genre_name,
                    'movies' => $filteredMovies,
                ];
            }
        }
    
        // Group series by genres
        $seriesByGenre = [];
        foreach ($genres as $genre) {
            $filteredSeries = $series->filter(function ($serie) use ($genre) {
                $serieGenreIds = explode(',', $serie->series_genre_id);
                return in_array($genre->id, $serieGenreIds);
            })->values();
    
            if ($filteredSeries->isNotEmpty()) {
                $seriesByGenre[$genre->genre_slug] = [
                    'title' => $genre->genre_name,
                    'series' => $filteredSeries,
                ];
            }
        }
    
        // Return the data as JSON
        return \Response::json([
            'status_code' => 200,
            'data' => [
                'movies' => $moviesByGenre,
                'series' => $seriesByGenre,
                'liveTV' => $liveTV,
            ],
        ]);
    }

     
    public function movies_by_language(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $movie_lang_id = $request->lang_id;

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $movies_list = Movies::where('status', 1)->where('movie_lang_id', $movie_lang_id)->orderBy('id', 'ASC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $movies_list = Movies::where('status', 1)->where('movie_lang_id', $movie_lang_id)->orderBy('video_title', 'ASC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $movies_list = Movies::where('status', 1)->where('movie_lang_id', $movie_lang_id)->inRandomOrder()->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else {
                $movies_list = Movies::where('status', 1)->where('movie_lang_id', $movie_lang_id)->orderBy('id', 'DESC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $movies_list = Movies::where('status', 1)->where('movie_lang_id', $movie_lang_id)->orderBy('id', 'DESC')->paginate(12);
        }

        $total_records = Movies::where('status', '1')->where('movie_lang_id', $movie_lang_id)->count();

        if ($movies_list->count()) {
            foreach ($movies_list  as $movie_data) {

                $movie_id = $movie_data->id;
                $movie_title = stripslashes($movie_data->video_title);
                $movie_poster = URL::to('upload/source/' . $movie_data->video_image_thumb);
                $movie_duration = $movie_data->duration;
                $movie_access = $movie_data->video_access;

                $response[] = array("movie_id" => $movie_id, "movie_title" => $movie_title, "movie_poster" => $movie_poster, "movie_duration" => $movie_duration, "movie_access" => $movie_access);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function movies_by_genre(Request $request)
    {

        // $get_data=checkSignSalt($_POST['data']);

        $movie_genre_id = $request->genre_id;

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $movies_list = Movies::where('status', 1)->whereRaw("find_in_set('$movie_genre_id',movie_genre_id)")->orderBy('id', 'ASC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $movies_list = Movies::where('status', 1)->whereRaw("find_in_set('$movie_genre_id',movie_genre_id)")->orderBy('video_title', 'ASC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $movies_list = Movies::where('status', 1)->whereRaw("find_in_set('$movie_genre_id',movie_genre_id)")->inRandomOrder()->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            } else {
                $movies_list = Movies::where('status', 1)->whereRaw("find_in_set('$movie_genre_id',movie_genre_id)")->orderBy('id', 'DESC')->paginate(12);
                $movies_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $movies_list = Movies::where('status', 1)->whereRaw("find_in_set('$movie_genre_id',movie_genre_id)")->orderBy('id', 'DESC')->paginate(12);
        }

        $total_records = Movies::where('status', '1')->whereRaw("find_in_set('$movie_genre_id',movie_genre_id)")->count();

        if ($movies_list->count()) {
            foreach ($movies_list  as $movie_data) {

                $movie_id = $movie_data->id;
                $movie_title = stripslashes($movie_data->video_title);
                $movie_poster = URL::to('upload/source/' . $movie_data->video_image_thumb);
                $movie_duration = $movie_data->duration;
                $movie_access = $movie_data->video_access;
                $imdb_rating = $movie_data->imdb_rating ? (string)$movie_data->imdb_rating : "0";

                // Add movie type as 'movie'
                $type = 'movie';
                $response[] = array(
                    "movie_id" => $movie_id,
                    "movie_title" => $movie_title,
                    "movie_poster" => $movie_poster,
                    "movie_duration" => $movie_duration,
                    "movie_access" => $movie_access,
                    "imdb_rating" => $imdb_rating,
                    "type" => $type
                );
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function movies_details(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $user_id = $request->user_id;

        if ($user_id != "") {
            $user_plan_status = check_app_user_plan($user_id);
        } else {
            $user_plan_status = false;
        }


        $movie_id = $request->movie_id;
        $movies_info = Movies::where('id', $movie_id)->first();


       $favorite= MovieSeriesFavorite::where('user_id', $user_id)
            ->where('movie_videos_id', $movie_id)
            ->first();

        $is_favorite = $favorite ? $favorite->is_favorite : 0;
        $favoritecount = MovieSeriesFavorite::where('movie_videos_id', $movie_id)
            ->where('is_favorite', 1)
            ->count();

        $movie_id = $movies_info->id;
        $movie_title =  stripslashes($movies_info->video_title);
        $movie_image =  URL::to('upload/source/' . $movies_info->video_image);
        $movie_access =  $movies_info->video_access;
        $description =  stripslashes($movies_info->video_description);

        $duration =  $movies_info->duration;
        $release_date = isset($movies_info->release_date) ? date('M d Y', $movies_info->release_date) : '';

        $imdb_rating = $movies_info->imdb_rating ? $movies_info->imdb_rating : "0";
        $rating = $imdb_rating !== null ? (string)$imdb_rating : "0";
        $video_type =  $movies_info->video_type;

        if ($video_type == "Local") {
            $video_url =  $movies_info->video_url ? URL::to('upload/source/' . $movies_info->video_url) : "";
        } else {
            $video_url =  $movies_info->video_url ? $movies_info->video_url : "";
        }

        $video_url_480 =  $movies_info->video_url_480 ? $movies_info->video_url_480 : '';
        $video_url_720 =  $movies_info->video_url_720 ? $movies_info->video_url_720 : '';
        $video_url_1080 =  $movies_info->video_url_1080 ? $movies_info->video_url_1080 : '';

        $subtitle_language1 =  $movies_info->subtitle_language1 ? $movies_info->subtitle_language1 : '';
        $subtitle_url1 =  $movies_info->subtitle_url1 ? $movies_info->subtitle_url1 : '';

        $subtitle_language2 =  $movies_info->subtitle_language2 ? $movies_info->subtitle_language2 : '';
        $subtitle_url2 =  $movies_info->subtitle_url2 ? $movies_info->subtitle_url2 : '';

        $subtitle_language3 =  $movies_info->subtitle_language3 ? $movies_info->subtitle_language3 : '';
        $subtitle_url3 =  $movies_info->subtitle_url3 ? $movies_info->subtitle_url3 : '';

        $download_enable =  $movies_info->download_enable ? 'true' : 'false';
        $download_url =  $movies_info->download_url ? $movies_info->download_url : "";

        $movie_lang_id = $movies_info->movie_lang_id;

        //Genres List
        $movies_genres_ids = $movies_info->movie_genre_id;
        foreach (explode(',', $movies_genres_ids) as $genres_ids) {
            $genre_name = Genres::getGenresInfo($genres_ids, 'genre_name');
            $genre_list[] = array('genre_id' => $genres_ids, 'genre_name' => $genre_name);
        }

        $language_name = Language::getLanguageInfo($movie_lang_id, 'language_name');

        $video_quality = $movies_info->video_quality ? 'true' : 'false';
        $subtitle_on_off = $movies_info->subtitle_on_off ? 'true' : 'false';

        $video_slug = $movies_info->video_slug;

        $shareurl = "https://" . $request->server->get('SERVER_NAME') . "/movies/" . $video_slug . "/" . $movie_id;

        $response = array("movie_id" => $movie_id,"rating" => $rating,"movie_title" => $movie_title,"favoritecount" => $favoritecount,"is_favorite" => $is_favorite, "movie_image" => $movie_image, "movie_access" => $movie_access, "description" => $description, "movie_duration" => $duration, "release_date" => $release_date, "imdb_rating" => $imdb_rating, "video_type" => $video_type, "video_url" => $video_url, 'video_url_480' => $video_url_480, 'video_url_720' => $video_url_720, 'video_url_1080' => $video_url_1080, "download_enable" => $download_enable, "download_url" => $download_url, 'lang_id' => $movie_lang_id, 'language_name' => $language_name, 'genre_list' => $genre_list, 'subtitle_language1' => $subtitle_language1, 'subtitle_url1' => $subtitle_url1, 'subtitle_language2' => $subtitle_language2, 'subtitle_url2' => $subtitle_url2, 'subtitle_language3' => $subtitle_language3, 'subtitle_url3' => $subtitle_url3, 'video_quality' => $video_quality, 'subtitle_on_off' => $subtitle_on_off, 'share_url' => $shareurl);



        //Related Movies List
        $related_movies_list = Movies::where('status', 1)
        ->where('id', '!=', $movie_id)
        ->where('movie_lang_id', $movies_info->movie_lang_id)
        ->orderBy('id', 'DESC')->get();

        if ($related_movies_list->count()) {
            foreach ($related_movies_list as $related_movies_data) {
                $r_movie_id = $related_movies_data->id;
                $r_movie_title = stripslashes($related_movies_data->video_title);
                $r_movie_poster = URL::to('upload/source/' . $related_movies_data->video_image_thumb);
                $r_movie_access = $related_movies_data->video_access;
                $r_duration = $related_movies_data->duration;

                // Retrieve the IMDb rating for the related movie
                $related_imdb_rating = $related_movies_data->imdb_rating ? $related_movies_data->imdb_rating : "0";
                $related_rating = $related_imdb_rating !== null ? (string)$related_imdb_rating : "0";

                $response['related_movies'][] = array(
                    "movie_id" => $r_movie_id,
                    "movie_title" => $r_movie_title,
                    "movie_poster" => $r_movie_poster,
                    "movie_duration" => $r_duration,
                    "movie_access" => $r_movie_access,
                    "type" => "Movie",  // Assuming you still want this as a static value or update it accordingly
                    "rating" => $related_rating  // Add the dynamic rating here
                );
            }
        } else {
            $response['related_movies'] = array();
        }

        //Recently Watched
        if ($request->user_id != "") {
            $current_user_id = $request->user_id;
            $video_id = $movies_info->id;

            $recently_video_count = RecentlyWatched::where('video_type', 'Movies')->where('user_id', $current_user_id)->where('video_id', $video_id)->count();

            if ($recently_video_count <= 0) {
                //Current user recently count
                $current_user_video_count = RecentlyWatched::where('user_id', $current_user_id)->count();

                if ($current_user_video_count == 10) {
                    DB::table("recently_watched")
                        ->where("user_id", "=", $current_user_id)
                        ->orderBy("id", "ASC")
                        ->take(1)
                        ->delete();

                    $video_recent_obj = new RecentlyWatched;
                    $video_recent_obj->video_type = 'Movies';
                    $video_recent_obj->user_id = $current_user_id;
                    $video_recent_obj->video_id = $video_id;
                    $video_recent_obj->save();
                } else {
                    $video_recent_obj = new RecentlyWatched;
                    $video_recent_obj->video_type = 'Movies';
                    $video_recent_obj->user_id = $current_user_id;
                    $video_recent_obj->video_id = $video_id;
                    $video_recent_obj->save();
                }
            }
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'user_plan_status' => $user_plan_status,
            'status_code' => 200
        ));
    }

    public function sports_category()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $cat_list = SportsCategory::where('status', 1)->orderby('id')->get();

        foreach ($cat_list as $cat_data) {
            $category_id = $cat_data->id;
            $category_name = stripslashes($cat_data->category_name);

            $response[] = array("category_id" => $category_id, "category_name" => $category_name);
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function sports(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $sports_video_list = Sports::where('status', 1)->orderBy('id', 'ASC')->paginate(12);
                $sports_video_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $sports_video_list = Sports::where('status', 1)->orderBy('video_title', 'ASC')->paginate(12);
                $sports_video_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $sports_video_list = Sports::where('status', 1)->inRandomOrder()->paginate(12);
                $sports_video_list->appends(\Request::only('filter'))->links();
            } else {
                $sports_video_list = Sports::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
                $sports_video_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $sports_video_list = Sports::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
        }

        $total_records = Sports::where('status', '1')->count();

        if ($sports_video_list->count()) {
            foreach ($sports_video_list  as $sports_data) {

                $sport_id = $sports_data->id;
                $sport_title = stripslashes($sports_data->video_title);
                $sport_poster = URL::to('upload/source/' . $sports_data->video_image);
                $sport_duration = $sports_data->duration;
                $sport_access = $sports_data->video_access;

                $response[] = array("sport_id" => $sport_id, "sport_title" => $sport_title, "sport_image" => $sport_poster, "sport_duration" => $sport_duration, "sport_access" => $sport_access);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function sports_by_category(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $sports_cat_id = $request->category_id;

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $sports_video_list = Sports::where('status', 1)->where('sports_cat_id', $sports_cat_id)->orderBy('id', 'ASC')->paginate(12);
                $sports_video_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $sports_video_list = Sports::where('status', 1)->where('sports_cat_id', $sports_cat_id)->orderBy('video_title', 'ASC')->paginate(12);
                $sports_video_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $sports_video_list = Sports::where('status', 1)->where('sports_cat_id', $sports_cat_id)->inRandomOrder()->paginate(12);
                $sports_video_list->appends(\Request::only('filter'))->links();
            } else {
                $sports_video_list = Sports::where('status', 1)->where('sports_cat_id', $sports_cat_id)->orderBy('id', 'DESC')->paginate(12);
                $sports_video_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $sports_video_list = Sports::where('status', 1)->where('sports_cat_id', $sports_cat_id)->orderBy('id', 'DESC')->paginate(12);
        }

        $total_records = Sports::where('status', '1')->where('sports_cat_id', $sports_cat_id)->count();

        if ($sports_video_list->count()) {
            foreach ($sports_video_list  as $sports_data) {

                $sport_id = $sports_data->id;
                $sport_title = stripslashes($sports_data->video_title);
                $sport_poster = URL::to('upload/source/' . $sports_data->video_image);
                $sport_duration = $sports_data->duration;
                $sport_access = $sports_data->video_access;

                $response[] = array("sport_id" => $sport_id, "sport_title" => $sport_title, "sport_image" => $sport_poster, "sport_duration" => $sport_duration, "sport_access" => $sport_access);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function sports_details(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $user_id = $request->user_id;

        if ($user_id != "") {
            $user_plan_status = check_app_user_plan($user_id);
        } else {
            $user_plan_status = false;
        }

        $sport_id = $request->sport_id;
        $sports_info = Sports::where('id', $sport_id)->first();

        $sport_id = $sports_info->id;
        $sport_title =  stripslashes($sports_info->video_title);
        $sport_image =  URL::to('upload/source/' . $sports_info->video_image);
        $sport_access =  $sports_info->video_access;
        $description =  stripslashes($sports_info->video_description);

        $duration =  $sports_info->duration;
        $date = isset($sports_info->date) ? date('M d Y', $sports_info->date) : '';

        $video_type =  $sports_info->video_type;

        if ($video_type == "Local") {
            $video_url =  $sports_info->video_url ? URL::to('upload/source/' . $sports_info->video_url) : "";
        } else {
            $video_url =  $sports_info->video_url ? $sports_info->video_url : "";
        }

        $video_url_480 =  $sports_info->video_url_480 ? $sports_info->video_url_480 : '';
        $video_url_720 =  $sports_info->video_url_720 ? $sports_info->video_url_720 : '';
        $video_url_1080 =  $sports_info->video_url_1080 ? $sports_info->video_url_1080 : '';

        $subtitle_language1 =  $sports_info->subtitle_language1 ? $sports_info->subtitle_language1 : '';
        $subtitle_url1 =  $sports_info->subtitle_url1 ? $sports_info->subtitle_url1 : '';

        $subtitle_language2 =  $sports_info->subtitle_language2 ? $sports_info->subtitle_language2 : '';
        $subtitle_url2 =  $sports_info->subtitle_url2 ? $sports_info->subtitle_url2 : '';

        $subtitle_language3 =  $sports_info->subtitle_language3 ? $sports_info->subtitle_language3 : '';
        $subtitle_url3 =  $sports_info->subtitle_url3 ? $sports_info->subtitle_url3 : '';

        $download_enable =  $sports_info->download_enable ? 'true' : 'false';
        $download_url =  $sports_info->download_url ? $sports_info->download_url : "";

        $sport_cat_id = $sports_info->sports_cat_id;


        $category_name = SportsCategory::getSportsCategoryInfo($sport_cat_id, 'category_name');

        $video_quality = $sports_info->video_quality ? 'true' : 'false';
        $subtitle_on_off = $sports_info->subtitle_on_off ? 'true' : 'false';

        $response = array("sport_id" => $sport_id, "sport_title" => $sport_title, "sport_image" => $sport_image, "sport_access" => $sport_access, "description" => $description, "sport_duration" => $duration, "date" => $date, "video_type" => $video_type, "video_url" => $video_url, 'video_url_480' => $video_url_480, 'video_url_720' => $video_url_720, 'video_url_1080' => $video_url_1080, 'sport_cat_id' => $sport_cat_id, 'category_name' => $category_name, 'download_enable' => $download_enable, 'download_url' => $download_url, 'subtitle_language1' => $subtitle_language1, 'subtitle_url1' => $subtitle_url1, 'subtitle_language2' => $subtitle_language2, 'subtitle_url2' => $subtitle_url2, 'subtitle_language3' => $subtitle_language3, 'subtitle_url3' => $subtitle_url3, 'video_quality' => $video_quality, 'subtitle_on_off' => $subtitle_on_off);


        //Related Movies List
        $related_sports_list = Sports::where('status', 1)->where('id', '!=', $sport_id)->where('sports_cat_id', $sport_cat_id)->orderBy('id', 'DESC')->get();

        if ($related_sports_list->count()) {
            foreach ($related_sports_list as $related_sports_data) {
                $l_sport_id = $related_sports_data->id;
                $l_sport_title =  stripslashes($related_sports_data->video_title);
                $l_sport_poster =  URL::to('upload/source/' . $related_sports_data->video_image);
                $l_sport_access =  $related_sports_data->video_access;
                $l_sport_duration =  $related_sports_data->duration;

                $response['related_sports'][] = array("sport_id" => $l_sport_id, "sport_title" => $l_sport_title, "sport_image" => $l_sport_poster, "sport_access" => $l_sport_access, "sport_duration" => $l_sport_duration);
            }
        } else {
            $response['related_sports'] = array();
        }

        //Recently Watched
        if (isset($request->user_id) && $request->user_id != "") {
            $current_user_id = $request->user_id;
            $video_id = $sports_info->id;

            $recently_video_count = RecentlyWatched::where('video_type', 'Sports')->where('user_id', $current_user_id)->where('video_id', $video_id)->count();

            if ($recently_video_count <= 0) {
                //Current user recently count
                $current_user_video_count = RecentlyWatched::where('user_id', $current_user_id)->count();

                if ($current_user_video_count == 10) {
                    DB::table("recently_watched")
                        ->where("user_id", "=", $current_user_id)
                        ->orderBy("id", "ASC")
                        ->take(1)
                        ->delete();

                    $video_recent_obj = new RecentlyWatched;
                    $video_recent_obj->video_type = 'Sports';
                    $video_recent_obj->user_id = $current_user_id;
                    $video_recent_obj->video_id = $video_id;
                    $video_recent_obj->save();
                } else {
                    $video_recent_obj = new RecentlyWatched;
                    $video_recent_obj->video_type = 'Sports';
                    $video_recent_obj->user_id = $current_user_id;
                    $video_recent_obj->video_id = $video_id;
                    $video_recent_obj->save();
                }
            }
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'user_plan_status' => $user_plan_status,
            'status_code' => 200
        ));
    }

    public function livetv_category()
    {
        // $get_data=checkSignSalt($_POST['data']);

        $cat_list = TvCategory::where('status', 1)->orderby('category_name')->get();

        foreach ($cat_list as $cat_data) {
            $category_id = $cat_data->id;
            $category_name = stripslashes($cat_data->category_name);

            $response[] = array("category_id" => $category_id, "category_name" => $category_name);
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function livetv(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $live_tv_list = LiveTV::where('status', 1)->orderBy('id', 'ASC')->paginate(12);
                $live_tv_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $live_tv_list = LiveTV::where('status', 1)->orderBy('channel_name', 'ASC')->paginate(12);
                $live_tv_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $live_tv_list = LiveTV::where('status', 1)->inRandomOrder()->paginate(12);
                $live_tv_list->appends(\Request::only('filter'))->links();
            } else {
                $live_tv_list = LiveTV::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
                $live_tv_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $live_tv_list = LiveTV::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
        }

        $total_records = LiveTV::where('status', '1')->count();

        if ($live_tv_list->count()) {
            foreach ($live_tv_list  as $live_tv_data) {

                $tv_id = $live_tv_data->id;
                $tv_title = stripslashes($live_tv_data->channel_name);
                $tv_logo = URL::to('upload/source/' . $live_tv_data->channel_thumb);
                $tv_access = $live_tv_data->channel_access;

                $response[] = array("tv_id" => $tv_id, "tv_title" => $tv_title, "tv_logo" => $tv_logo, "tv_access" => $tv_access);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function livetv_by_category(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $channel_cat_id = $request->category_id;

        if (isset($request->filter)) {
            $keyword = $request->filter;

            if ($keyword == 'old') {
                $live_tv_list = LiveTV::where('status', 1)->where('channel_cat_id', $channel_cat_id)->orderBy('id', 'ASC')->paginate(12);
                $live_tv_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'alpha') {
                $live_tv_list = LiveTV::where('status', 1)->where('channel_cat_id', $channel_cat_id)->orderBy('channel_name', 'ASC')->paginate(12);
                $live_tv_list->appends(\Request::only('filter'))->links();
            } else if ($keyword == 'rand') {
                $live_tv_list = LiveTV::where('status', 1)->where('channel_cat_id', $channel_cat_id)->inRandomOrder()->paginate(12);
                $live_tv_list->appends(\Request::only('filter'))->links();
            } else {
                $live_tv_list = LiveTV::where('status', 1)->where('channel_cat_id', $channel_cat_id)->orderBy('id', 'DESC')->paginate(12);
                $live_tv_list->appends(\Request::only('filter'))->links();
            }
        } else {
            $live_tv_list = LiveTV::where('status', 1)->where('channel_cat_id', $channel_cat_id)->orderBy('id', 'DESC')->paginate(12);
        }

        $total_records = LiveTV::where('status', '1')->where('channel_cat_id', $channel_cat_id)->count();

        if ($live_tv_list->count()) {
            foreach ($live_tv_list  as $live_tv_data) {

                $tv_id = $live_tv_data->id;
                $tv_title = stripslashes($live_tv_data->channel_name);
                $tv_logo = URL::to('upload/source/' . $live_tv_data->channel_thumb);
                $tv_access = $live_tv_data->channel_access;

                $response[] = array("tv_id" => $tv_id, "tv_title" => $tv_title, "tv_logo" => $tv_logo, "tv_access" => $tv_access);
            }
        } else {
            $response = array();
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'total_records' => $total_records,
            'status_code' => 200
        ));
    }

    public function livetv_details(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);


        $user_id = $request->user_id;

        if ($user_id != "") {
            $user_plan_status = check_app_user_plan($user_id);
        } else {
            $user_plan_status = false;
        }

        $live_tv_id = $request->tv_id;

        $live_tv_info = LiveTV::where('id', $live_tv_id)->first();

        $tv_id = $live_tv_info->id;
        $tv_title =  stripslashes($live_tv_info->channel_name);
        $tv_logo =  URL::to('upload/source/' . $live_tv_info->channel_thumb);
        $tv_access =  $live_tv_info->channel_access;
        $description =  stripslashes($live_tv_info->channel_description);

        $tv_url_type =  $live_tv_info->channel_url_type;
        //$tv_url=  $live_tv_info->channel_url;

        $tv_url =  $live_tv_info->channel_url ? $live_tv_info->channel_url : "";

        $tv_url2 =  $live_tv_info->channel_url2 ? $live_tv_info->channel_url2 : "";
        $tv_url3 =  $live_tv_info->channel_url3 ? $live_tv_info->channel_url3 : "";

        $tv_cat_id = $live_tv_info->channel_cat_id;



        $category_name = TvCategory::getTvCategoryInfo($tv_cat_id, 'category_name');

        $response = array("tv_id" => $tv_id, "tv_title" => $tv_title, "tv_logo" => $tv_logo, "tv_access" => $tv_access, "description" => $description, "tv_url_type" => $tv_url_type, "tv_url" => $tv_url, "tv_url2" => $tv_url2, "tv_url3" => $tv_url3, 'tv_cat_id' => $tv_cat_id, 'category_name' => $category_name);


        //Related Live TV List
        $related_live_tv_list = LiveTV::where('status', 1)->where('id', '!=', $live_tv_id)->where('channel_cat_id', $tv_cat_id)->orderBy('id', 'DESC')->get();

        if ($related_live_tv_list->count()) {
            foreach ($related_live_tv_list as $related_livetv_data) {
                $l_tv_id = $related_livetv_data->id;
                $l_tv_title = $related_livetv_data->channel_name;
                $l_tv_logo = URL::to('upload/source/' . $related_livetv_data->channel_thumb);
                $l_tv_access = $related_livetv_data->channel_access;

                $response['related_live_tv'][] = array("tv_id" => $l_tv_id, "tv_title" => $l_tv_title, "tv_logo" => $l_tv_logo, "tv_access" => $l_tv_access);
            }
        } else {
            $response['related_live_tv'] = array();
        }

        //Recently Watched
        if (isset($request->user_id) && $request->user_id != "") {
            $current_user_id = $request->user_id;
            $video_id = $live_tv_info->id;

            $recently_video_count = RecentlyWatched::where('video_type', 'LiveTV')->where('user_id', $current_user_id)->where('video_id', $video_id)->count();

            if ($recently_video_count <= 0) {
                //Current user recently count
                $current_user_video_count = RecentlyWatched::where('user_id', $current_user_id)->count();

                if ($current_user_video_count == 10) {
                    DB::table("recently_watched")
                        ->where("user_id", "=", $current_user_id)
                        ->orderBy("id", "ASC")
                        ->take(1)
                        ->delete();

                    $video_recent_obj = new RecentlyWatched;
                    $video_recent_obj->video_type = 'LiveTV';
                    $video_recent_obj->user_id = $current_user_id;
                    $video_recent_obj->video_id = $video_id;
                    $video_recent_obj->save();
                } else {
                    $video_recent_obj = new RecentlyWatched;
                    $video_recent_obj->video_type = 'LiveTV';
                    $video_recent_obj->user_id = $current_user_id;
                    $video_recent_obj->video_id = $video_id;
                    $video_recent_obj->save();
                }
            }
        }

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'user_plan_status' => $user_plan_status,
            'status_code' => 200
        ));
    }

    public function search(Request $request)
    {
        // $get_data=checkSignSalt($_POST['data']);

        $keyword = $request->search_text;

        //Movie Data
        $movies_list = Movies::where('status', 1)->where("video_title", "LIKE", "%$keyword%")->orderBy('video_title')->get();

        if ($movies_list->count()) {
            foreach ($movies_list  as $movie_data) {

                $movie_id = $movie_data->id;
                $movie_title = stripslashes($movie_data->video_title);
                $movie_poster = URL::to('upload/source/' . $movie_data->video_image_thumb);
                $movie_duration = $movie_data->duration;
                $movie_access = $movie_data->video_access;
                $imdb_rating = $movie_data->imdb_rating ? (string)$movie_data->imdb_rating : "0";

                $response['movies'][] = array("movie_id" => $movie_id, "movie_title" => $movie_title, "movie_poster" => $movie_poster,"imdb_rating"=>$imdb_rating, "movie_duration" => $movie_duration, "movie_access" => $movie_access);
            }
        } else {
            $response['movies'] = array();
        }

        //Movie End

        //Show Start
        $series_list = Series::where('status', 1)->where("series_name", "LIKE", "%$keyword%")->orderBy('series_name')->get();

        if ($series_list->count()) {
            foreach ($series_list as $series_data) {
                $show_id = $series_data->id;
                $show_title =  stripslashes($series_data->series_name);
                $show_poster =  URL::to('upload/source/' . $series_data->series_poster);

                $imdb_rating = $series_data->imdb_rating ? (string)$series_data->imdb_rating : "0";

                $response['shows'][] = array("show_id" => $show_id, "show_title" => $show_title,"imdb_rating"=>$imdb_rating, "show_poster" => $show_poster);
            }
        } else {
            $response['shows'] = array();
        }
        //Show End

        //Sports Start
        $sports_video_list = Sports::where('status', 1)->where("video_title", "LIKE", "%$keyword%")->orderBy('video_title')->get();

        if ($sports_video_list->count()) {
            foreach ($sports_video_list  as $sports_data) {

                $sport_id = $sports_data->id;
                $sport_title = stripslashes($sports_data->video_title);
                $sport_poster = URL::to('upload/source/' . $sports_data->video_image);
                $sport_duration = $sports_data->duration;
                $sport_access = $sports_data->video_access;

                $response['sports'][] = array("sport_id" => $sport_id, "sport_title" => $sport_title, "sport_image" => $sport_poster, "sport_duration" => $sport_duration, "sport_access" => $sport_access);
            }
        } else {
            $response['sports'] = array();
        }
        //Sports End

        //Live TV Start
        $live_tv_list = LiveTV::where('status', 1)->where("channel_name", "LIKE", "%$keyword%")->orderBy('channel_name')->get();

        if ($live_tv_list->count()) {
            foreach ($live_tv_list  as $live_tv_data) {

                $tv_id = $live_tv_data->id;
                $tv_title = stripslashes($live_tv_data->channel_name);
                $tv_logo = URL::to('upload/source/' . $live_tv_data->channel_thumb);
                $tv_access = $live_tv_data->channel_access;

                $response['live_tv'][] = array("tv_id" => $tv_id, "tv_title" => $tv_title, "tv_logo" => $tv_logo, "tv_access" => $tv_access);
            }
        } else {
            $response['live_tv'] = array();
        }
        //Live TV End

        return \Response::json(array(
            'VIDEO_STREAMING_APP' => $response,
            'status_code' => 200
        ));
    }

    public function uploadMusic(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'music_title' => 'required|string',
            'music_artist' => 'required|string',
            'music_url' => 'required|file|mimes:mp3', // Adjust validation rules for file types
        ]);

        // Retrieve the file from the request

        //$publicUrl = str_replace('public/', '', $path);
        // Create a new music track record in the database
        $musicTrack = new Music([
            'music_title' => $request->music_title,
            'music_artist' => $request->music_artist,
        ]);

        if($request->music_thumbnail_url) {
            $file_thumbnail = $request->file('music_thumbnail_url');
            $path_thumbnail = $file_thumbnail->store('upload/source');
            $musicTrack->music_thumbnail_url = $path_thumbnail;
        }
        $request->music_genre ? $musicTrack->music_genre = $request->music_genre : '';
        $request->audio_type ? $musicTrack->audio_type = $request->audio_type : '';
        $request->music_release_date ? $musicTrack->music_release_date = strtotime($request->music_release_date) : '';
        if($request['audio_type']=="URL")
         {
            $musicTrack->music_url = $request['music_url'];

         }
         else
         {
            $file = $request->file('music_url');

            // Store the file in a storage directory (e.g., 'uploads')
            $path = $file->store('upload/source');

            $musicTrack->music_url = $path;

          }
        $link = URL::to($musicTrack->music_url);

        $musicTrack->save();

        // Respond with a success message
        return response()->json([
            'message' => 'Music track uploaded successfully',
            'music_track' => $musicTrack,
            'link' => $link,
        ]);
    }

    public function searchMusic(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');

        // Perform a search in the database based on the title or artist
        $results = Music::where('music_title', 'like', "%$query%")
            ->get();
            $results->each(function ($music) {
                $music->music_url = URL::to($music->music_url);
            });
        // Respond with the search results
        return response()->json(['results' => $results]);
    }

    // public function streamMusic($file)
    // {
    //     // Define the storage disk where music files are stored
    //     $filePath = public_path('upload/music/' . $file);
    //     //dd($filePath);
    //     // Debugging: Check the value of $filePath
    //     // dd($filePath);

    //     $contentType = mime_content_type($filePath);
    //     //dd($filePath)
    // if ($contentType !== false) {
    //     return response()->file($filePath, ['Content-Type' => $contentType, 'ok'=>true]);
    // } else {
    //     // Handle the case where the content type couldn't be determined.
    //     abort(404, 'Music not found');
    // }
    // }






    // public function allMusic(){
    //     $music = Music::all();
    //     $music->each(function ($music) {
    //         $music->music_url = URL::to($music->music_url);
    //     });
    //     return response()->json(['music' => $music]);
    // }

    public function allMusic()
    {
        $music = Music::all()->map(function ($music) {
            $music->music_url = URL::to($music->music_url);
            return $music;
        });

        return response()->json(['music' => $music]);
    }


    // public function allReel(Request $request){
    //     $reels = Reels::with('getComments', 'getLikes')->paginate(5);;
    //     foreach ($reels as $reel) {
    //         $comments = $reel->getComments; // Access the comments for the current reel

    //         foreach ($comments as $comment) {
    //             $comment->user_id = $comment->user->name; // Access the user's name
    //         }
    //         $shareurl = "https://" . $request->server->get('SERVER_NAME') . "/reel/". $reel->id;
    //         $reel->shareurl = $shareurl;
    //     }
    //     return response()->json(['reels' => $reels]);
    // }


    public function allReel(Request $request)
    {
        $reels = Reels::with('getComments.user', 'getLikes') ->inRandomOrder()->paginate(5);
        // $reels = Reels::with('getComments.user', 'getLikes')->get();

        $reels->each(function ($reel) use ($request) {
            $reel->shareurl = "https://" . $request->server->get('SERVER_NAME') . "/reel/". $reel->id;
        });

        return response()->json(['reels' => $reels]);
    }



    public function postComment(Request $request, $id)
        {
            // Validate the request data
            $request->validate([
                'comment' => 'required|string|max:255',
            ]);

            // Create and save the comment
            $comment = new ReelsComment();
            $comment->reel_id = $id;
            $comment->user_id = $request->user_id; // Assuming you have user authentication
            $comment->comment = $request->input('comment');
            $request->parent_id ? $comment->parent_id = $request->parent_id : '';
            $save = $comment->save();

            if ($save) {
                $reel_like_count_add = Reels::find($id);
                $reel_like_count_add->comment_count = $reel_like_count_add->comment_count + 1;
                $reel_like_count_add->save();

            }

            if($request->parent_id){
                return response()->json(['message' => 'Comment reply successfully']);
            }
            else{
            return response()->json(['message' => 'Comment posted successfully']);
            }
        }

    // public function postLike(Request $request,$id)
    // {
    //     $reel_like_count_add = Reels::find($id);
    //     $liked = ReelsLike::where('reel_id', $id)->where('user_id', $request->user_id)->first();
    //     if($liked){
    //         $liked->delete();
    //         $reel_like_count_add->like_count = $reel_like_count_add->like_count - 1;
    //         $reel_like_count_add->save();
    //         return response()->json(['message' => 'Like removed successfully']);
    //     }
    //     $like = new ReelsLike();
    //     $like->reel_id = $id;
    //     $like->user_id = $request->user_id;// Assuming you have user authentication
    //     $save = $like->save();

    //     if ($save) {

    //         $reel_like_count_add->like_count = $reel_like_count_add->like_count + 1;
    //         $reel_like_count_add->save();

    //     }

    //     return response()->json(['message' => 'Like posted successfully']);
    // }



    public function postLike(Request $request, $id)
    {
        $reels = Reels::find($id);

        if (!$reels) {
            return response()->json(['message' => 'Reel not found'], 404);
        }

        $existingLike = ReelsLike::where('reel_id', $id)->where('user_id', $request->user_id)->first();

        if ($existingLike) {
            $existingLike->delete();
            $reels->decrement('like_count');
            return response()->json(['message' => 'Like removed successfully']);
        }

        $newLike = new ReelsLike();
        $newLike->reel_id = $id;
        $newLike->user_id = $request->user_id;

        if ($newLike->save()) {
            $reels->increment('like_count');
            return response()->json(['message' => 'Like posted successfully']);
        }

        return response()->json(['message' => 'Failed to post like'], 500);
    }





    // public function ReelComment($id){
    //     $reel_comments = ReelsComment::with('user:id,name,email')->where('reel_id', $id)->where('parent_id', '=', 0)->get();

    //     foreach ($reel_comments as $reel_comment) {
    //         $replies = ReelsComment::with('user:id,name,email')->where('parent_id', $reel_comment->id)->get();

    //         if(!$replies->isEmpty()){
    //             $reel_comment->replies = $replies;
    //         }

    //     }

    //     if(!$reel_comments->isEmpty()){
    //         return response()->json(['reel_comments' => $reel_comments]);
    //     }
    //     else{
    //         return response()->json(['message' => 'No data found']);
    //     }
    // }



    public function ReelComment($id)
    {
        $reel_comments = ReelsComment::with('user:id,name,email')->where('reel_id', $id)->where('parent_id', '=', 0)->get();

        if ($reel_comments->isEmpty()) {
            return response()->json(['message' => 'No data found']);
        }

        foreach ($reel_comments as $reel_comment) {
            $replies = ReelsComment::with('user:id,name,email')->where('parent_id', $reel_comment->id)->get();

            if (!$replies->isEmpty()) {
                $reel_comment->replies = $replies;
            }
        }

        return response()->json(['reel_comments' => $reel_comments]);
    }



    public function ReelLike($id){
        $reel_likes = ReelsLike::where('reel_id', $id)->get();
        if(!$reel_likes->isEmpty()){
            return response()->json(['reel_likes' => $reel_likes]);
        }
        else{
            return response()->json(['message' => 'No data found']);
        }
    }


    public function profileDelete($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'Profile deleted successfully.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Profile deletion failed. Please try again later.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function favorite(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'movie_videos_id' => 'nullable|exists:movie_videos,id',
            'is_favorite' => 'required',
        ]);
        // Create or update the favorite entry
        $favorite = MovieSeriesFavorite::updateOrCreate(
            [
                'user_id' => $request->user_id,
                'movie_videos_id' => $request->movie_videos_id,
            ],
            [
                'is_favorite' => $request->is_favorite,
            ]
        );

        // Return a success response
        return response()->json([
            'status_code' => 200,
            'message' => 'Favorite updated successfully.',
            'data' => $favorite,
        ]);
    }
    public function favoritelist($userId)
    {
        // Retrieve favorite movies with their details
        $movieFavorites = MovieSeriesFavorite::with('movie') // Ensure a relationship exists in the model
            ->where('user_id', $userId)
            ->where('is_favorite', true)
            ->whereNotNull('movie_videos_id')
            ->get()
            ->map(function ($movieFavorite) {
                // Extract relevant details from the related movie
                if ($movieFavorite->movie) {
                    return [
                        "movie_id" => $movieFavorite->movie->id,
                        "movie_title" => stripslashes($movieFavorite->movie->video_title),
                        "movie_poster" => URL::to('upload/source/' . $movieFavorite->movie->video_image_thumb),
                        "movie_duration" => $movieFavorite->movie->duration,
                        "movie_access" => $movieFavorite->movie->video_access,
                        "imdb_rating" => $movieFavorite->movie->imdb_rating ? (string)$movieFavorite->movie->imdb_rating : "0",
                        "type" => "movie"
                    ];
                }

                return null; // Skip if the related movie is not found
            })->filter(); // Remove any null items from the collection

        $total_records = $movieFavorites->count();

        return response()->json([
            'VIDEO_STREAMING_APP' => $movieFavorites->values(), // Ensure a clean JSON array
            'total_records' => $total_records,
            'status_code' => 200
        ]);
    }


    public function submitRecentWatch(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'user_id' => 'required|exists:users,id',
                'movie_videos_id' => 'nullable|exists:movie_videos,id',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status_code' => 422,
                'errors' => $e->errors(),
            ], 422);
        }

        // Update or create a recent watch record
        $recentWatch = RecentWatch::updateOrCreate(
            [
                'user_id' => $validatedData['user_id'],
                'movie_videos_id' => $validatedData['movie_videos_id'],
            ],
            [
                // This is the data that will be set if creating/updating
                'updated_at' => now(), // Update timestamp
            ]
        );

        // Return a JSON response
        return response()->json([
            'status_code' => 201,
            'message' => 'Recent watch data submitted successfully.',
            'data' => $recentWatch,
        ]);
    }


        public function getRecentWatchesByUser($userId)
        {
            $recentWatches = RecentWatch::with('movie')
                ->where('user_id', $userId)
                ->orderBy('created_at', 'desc') // Order by created_at in descending order
                ->get();

            // Base URL for the image or video
            $baseUrl = URL::to('upload/source/');

            // Append the image_video_url to each recent watch
            foreach ($recentWatches as $watch) {
                // Assuming the 'movie' relationship is loaded and has 'video_image_thumb'
                if ($watch->movie) {
                    $watch->image_video_url = $baseUrl . $watch->movie->video_image_thumb;
                } else {
                    $watch->image_video_url = $baseUrl; // Fallback if no movie found
                }
            }

            return response()->json([
                'status_code' => 200,
                'recent_watches' => $recentWatches,
            ]);
        }

        public function youtube_video()
        {
            // Fetch active YouTube data
            $youtubeData = YoutubeTiktokManage::where('type', 'YouTube')->where('status', 1)->get();

            return response()->json([
                'status' => 'success',
                'data' => $youtubeData
            ]);
        }

        // Function to get active TikTok data
        public function tiktok_video()
        {
            // Fetch active TikTok data
            $tiktokData = YoutubeTiktokManage::where('type', 'TikTok')->where('status', 1)->get();

            $tiktokData = $tiktokData->map(function($tiktokData) {
                // Add the asset URL for the image (if it exists)
                $tiktokData->image = $tiktokData->image ? asset('/' . $tiktokData->image) : null;

                return $tiktokData;
            });
            return response()->json([
                'status' => 'success',
                'data' => $tiktokData
            ]);
        }
        protected function generateUniqueKey()
        {
            // Generate a random unique string with a length of 32 characters (you can adjust the length)
            return Str::random(12); // You can use a different length based on your requirements
        }

        public function broadcast_list()
        {
            // Fetch active broadcasts (where status is 1)
            $broadcasts = LiveBroadcastManage::where('status', 1)->orderBy('id', 'DESC')->get();

            // Fetch active YouTube data
            $youtubeData = YoutubeTiktokManage::where('type', 'YouTube')->where('status', 1)->get();

            // Fetch active TikTok data
            $tiktokData = YoutubeTiktokManage::where('type', 'TikTok')->where('status', 1)->get();

            // Prepare the response data
            $response = [
                'status' => 1,
                'data' => [],
                'youtube' => [],
                'tiktok' => [],
            ];

            // Add broadcast data to response
            foreach ($broadcasts as $broadcast) {
                $response['data'][] = [
                    'id' => $broadcast->id,
                    'user_id' => $broadcast->user_id,
                    'title' => stripslashes($broadcast->title),
                    'description' => stripslashes($broadcast->description),
                    'image' => $broadcast->image ? asset('/' . $broadcast->image) : null,
                    'rtmp_server' => $broadcast->rtmp_server,
                    'stream_key' => $broadcast->stream_key,
                    'stream_url' => $broadcast->stream_url,
                    'status' => $broadcast->status,
                    'created_at' => $broadcast->created_at,
                    'updated_at' => $broadcast->updated_at,
                ];
            }

            // Add YouTube data to response
            foreach ($youtubeData as $video) {
                $response['youtube'][] = [
                    'id' => $video->id,
                    'title' => $video->title,
                    'description' => $video->description,
                    'url' => $video->url, // Adjust based on your actual column name
                    'image' => $video->image ? asset('/' . $video->image) : null, // Include the image
                    'status' => $video->status,
                    'created_at' => $video->created_at,
                ];
            }

            // Add TikTok data to response
            foreach ($tiktokData as $video) {
                $response['tiktok'][] = [
                    'id' => $video->id,
                    'title' => $video->title,
                    'description' => $video->description,
                    'url' => $video->url, // Adjust based on your actual column name
                    'image' => $video->image ? asset('/' . $video->image) : null, // Include the image
                    'status' => $video->status,
                    'created_at' => $video->created_at,
                ];
            }

            return response()->json($response);
        }


        public function broadcast_create(Request $request)
        {
                // Define custom validation rules
            $rules = [
            'user_id' => 'required|exists:users,id', // Ensure the user exists
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional image upload validation
            ];

            // Manually validate the request
            $validator = Validator::make($request->all(), $rules);

            // Check if validation fails
            if ($validator->fails()) {
                // Return custom error response with validation errors
            return response()->json([
                'VIDEO_STREAMING_APP' => [['msg' => "Validation failed", 'success' => '0']],
                'status_code' => 422,
                'errors' => $validator->errors() // Return detailed validation errors
            ]);
            }
                $user = User::find($request->user_id);
                if (!$user) {
                    return response()->json([
                        'VIDEO_STREAMING_APP' => [['msg' => "User not found", 'success' => '0']],
                        'status_code' => 404
                    ]);
                }

                // Use the username as the stream key
                $key = $user->username ?? $this->generateUniqueKey();

                // Handle image upload if provided
                $imagePath = null;
                if ($request->hasFile('image')) {
                    // Validate the image and move it to the 'uploads' directory
                    $image = $request->file('image');
                    $imagePath = $image->store('uploads', 'public'); // Store image in the 'uploads' folder inside 'public' disk
                }

                // Get the broadcast link from the settings (use default if null)
                $setting = Settings::first();
                $rtmp_server = $setting->broadcast_link ?? '194.233.65.161:1935/new';  // Default RTMP server if not provided in settings

                // Ensure the RTMP server URL is valid and contains a scheme (http:// or https://)
                if (!empty($rtmp_server)) {
                    // If the RTMP server URL does not start with a scheme, add "http://"
                    if (!preg_match('/^http(s)?:\/\//', $rtmp_server)) {
                        $rtmp_server = 'http://' . $rtmp_server;
                    }

                    // Parse RTMP server URL to get the host (IP or domain) and path (e.g., /new)
                    $parsedUrl = parse_url($rtmp_server);

                    // Ensure the 'host' index exists in the parsed URL
                    if (isset($parsedUrl['host'])) {
                        $ipAddress = $parsedUrl['host'];  // Extract the host part (IP or domain)
                    } else {
                        return response()->json([
                            'VIDEO_STREAMING_APP' => [['msg' => "Invalid RTMP server URL", 'success' => '0']],
                            'status_code' => 400,
                        ]);
                    }

                    // Ensure the 'path' part is properly assigned (if it exists in the URL)
                    $path = $parsedUrl['path'] ?? '/new'; // Default to '/new' if no path is provided in the URL
                } else {
                    return response()->json([
                        'VIDEO_STREAMING_APP' => [['msg' => "RTMP server URL is required", 'success' => '0']],
                        'status_code' => 400,
                    ]);
                }

                // Construct the HLS URL based on the parsed RTMP server, stream key, and path
                $streamUrl = 'http://' . $ipAddress . ':8080/hls/' . $key . '.m3u8';

                // Create the user broadcast record
                $userBroadcast = new UserBroadcast();
                $userBroadcast->user_id = $request->user_id;
                $userBroadcast->title = $request->title;
                $userBroadcast->description = $request->description;
                $userBroadcast->image = $imagePath;  // Store the image path in the database
                $userBroadcast->status = 'active';  // Default status to 'active' (or any other default state)
                $userBroadcast->key = $key;
                $userBroadcast->rtmp_server = $rtmp_server;
                $userBroadcast->rtmp_server_url = $streamUrl;

                // Construct the live link with the full RTMP server URL including the path and the stream key
                $userBroadcast->live_link = 'rtmp://' . $ipAddress . ':' . (isset($parsedUrl['port']) ? $parsedUrl['port'] : '1935') . $path . '/' . $key;

                // Save the user broadcast record
                $userBroadcast->save();

                // Return success response
                return response()->json([
                    'VIDEO_STREAMING_APP' => [['msg' => "Broadcast created successfully", 'success' => '1']],
                    'status_code' => 200,
                    'data' => $userBroadcast // Optionally return the created broadcast object
                ]);
        }



public function comment_post(Request $request)
{
    // Validation rules
    $rules = [
        'user_broadcast_id' => 'required|exists:user_broadcasts,id', // Ensure the broadcast exists
        'user_id' => 'required|exists:users,id', // Ensure the user exists
        'description' => 'required|string', // Ensure the comment has a description
    ];

    // Validate the request
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json([
            'VIDEO_STREAMING_APP' => [['msg' => "Validation failed", 'success' => '0']],
            'status_code' => 422,
            'errors' => $validator->errors() // Return detailed validation errors
        ]);
    }

    // Create the new comment
    $comment = new UserBroadcastComments();
    $comment->user_broadcast_id = $request->user_broadcast_id;
    $comment->user_id = $request->user_id;
    $comment->description = $request->description;
    $comment->status = 'approved';

    // Save the comment to the database
    $comment->save();

    // Manually initialize Pusher
    $pusher = new Pusher(
        '0bb1d0215c0158be673b', // Pusher App Key
        '8dae2ec7d0f01a9a881b', // Pusher App Secret
        '1890174',              // Pusher App ID
        [
            'cluster' => 'ap2', // Pusher Cluster
            'useTLS' => true,
        ]
    );

    try {
        // Trigger the Pusher event
        $pusher->trigger('comment-channel', 'new-comment', [
            'user_broadcast_id' => $request->user_broadcast_id,
            'user_id' => $request->user_id,
            'description' => $request->description,
            'timestamp' => now(),
        ]);
    } catch (\Pusher\PusherException $e) {
        return response()->json([
            'error' => 'Pusher error: ' . $e->getMessage(),
        ], 500);
    }

    // Dispatch Laravel event for broadcasting (optional if you also want to broadcast)
    event(new CommentPosted(
        $request->user_broadcast_id,
        $request->user_id,
        $request->description
    ));

    // Return success response
    return response()->json([
        'VIDEO_STREAMING_APP' => [['msg' => "Comment posted successfully", 'success' => '1']],
        'status_code' => 200,
        'data' => $comment, // Optionally return the created comment object
    ]);
}



        public function get_comment($user_broadcast_id)
        {
            // Validate the incoming broadcast ID
            $broadcast = UserBroadcast::find($user_broadcast_id);

            if (!$broadcast) {
                return response()->json([
                    'VIDEO_STREAMING_APP' => [['msg' => "Broadcast not found", 'success' => '0']],
                    'status_code' => 404
                ]);
            }

            // Retrieve all comments related to the specific broadcast
            $comments = UserBroadcastComments::with('user:id,username') // Load related user info (username)
                ->where('user_broadcast_id', $user_broadcast_id)
                ->get();

            // Return the comments
            return response()->json([
                'VIDEO_STREAMING_APP' => [['msg' => "Comments retrieved successfully", 'success' => '1']],
                'status_code' => 200,
                'data' => $comments,
            ]);
        }

        public function get_upcomming_data()
        {
            $movie_series_list = UpcomingMovieSeries::orderBy('id', 'DESC')->get();

            $movie_series_data = $movie_series_list->map(function($movie_series) {
                // Add the asset URL for the image (if it exists)
                $movie_series->image = $movie_series->image ? asset('/' . $movie_series->image) : null;

                return $movie_series;
            });

            // Return the comments
            return response()->json([
                'VIDEO_STREAMING_APP' => [['msg' => "Data retrieved successfully", 'success' => '1']],
                'status_code' => 200,
                'data' => $movie_series_list,
            ]);
        }
        public function get_channel_data()
        {
            $cannel = ChannelManage::orderBy('id', 'DESC')->get();

            $movie_series_data = $cannel->map(function($movie_series) {
                // Add the asset URL for the image (if it exists)
                $movie_series->image = $movie_series->image ? asset('/' . $movie_series->image) : null;

                return $movie_series;
            });

            // Return the comments
            return response()->json([
                'VIDEO_STREAMING_APP' => [['msg' => "Data retrieved successfully", 'success' => '1']],
                'status_code' => 200,
                'data' => $cannel,
            ]);
        }



}
