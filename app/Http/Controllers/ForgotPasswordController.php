<?php

namespace App\Http\Controllers;

use App\OTP;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\SendOTP;
use Illuminate\Support\Str;
use Session;
class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendOTP(Request $request)
    {
        // Validate the user's email
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
        $email = $request->email;
        // Generate a random OTP
        $otpString  = mt_rand(100000, 999999);

        // Store the OTP and its expiration time in the user's record
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            \Session::flash('error', 'Email not found. Please try again.');
             return redirect()->back()->with('message', 'Successfully Updated!');
        }
        $otp = new OTP;
        $otp->user_id = $user->id;
        $otp->otp = $otpString;
        $otp->otp_expiry = strtotime("+600 seconds"); // Adjust the expiration time as needed
        //$user->otp = $otp;
        //$user->otp_expiry = now()->addMinutes(10); // Adjust the expiration time as needed
        $otp->save();

        // Send the OTP via email
        //Mail::to($user->email)->send(new SendOTP($otpString));

        $user_full_name = $user->name;

        $data_email = array(
            'name' => $user_full_name,
            'email' => $user->email,
            'otp' => $otpString,
        );
        \Mail::send('emails.otp', $data_email, function ($message) use ($user, $user_full_name) {
            $message->to($user->email, $user_full_name)
                ->from(getcong('site_email'), getcong('site_name'))
                ->subject('Account Recovery');
        });

        return view('pages.verify-otp', compact('email')); // Create this view to prompt the user to enter the OTP
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForgotPasswordForm()
    {
        return view('pages.forgot_password_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verifyOTP(Request $request)
    {

        $request->validate([
            'combinedInput' => 'required|max:6',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();
        $otps = OTP::where('user_id', $user->id)->orderBy('id', 'desc')->first();
        
        // Check if the OTP matches and is still valid
        if (!$user or $otps->otp != $request->combinedInput or $otps->otp_expiry < time()) {
            \Session::flash('error', 'Invalid OTP. Please try again.');
            return redirect('/forgot-password');
        }
        else{
              return view('pages.reset_password_new', compact('user')); // Create this view for resetting the password
        }

      
        // // return $request->all();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request)
    {
        // Validate and update the password
        $request->validate([
            'email' => 'required',
            'password' => 'required|same:password_confirmation',
            'password_confirmation' => 'required',
        ]);

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // Reset the password
        $user->password = bcrypt($request->input('password'));

        $user->save();
        $otps = OTP::where('user_id', $user->id)->orderBy('id', 'desc')->first();
        $otps->delete();
        // Redirect to the login page or any other appropriate page
        return redirect('/login')->with('success', 'Password reset successful. You can now log in with your new password.');
    }



    public function resend(Request $request)
{
    // Generate a new OTP code (you can use your OTP generation logic)
    $newOtp = Str::random(6); // Replace with your OTP generation logic

    $user = User::where('email', $request->email)->first();
        $otp = new OTP;
        $otp->user_id = $user->id;
        $otp->otp = $newOtp;
        $otp->otp_expiry = strtotime("+600 seconds");
        $otp->save();

        $user_full_name = $user->name;

        $data_email = array(
            'name' => $user_full_name,
            'email' => $user->email,
            'otp' => $newOtp,
        );
        \Mail::send('emails.otp', $data_email, function ($message) use ($user, $user_full_name) {
            $message->to($user->email, $user_full_name)
                ->from(getcong('site_email'), getcong('site_name'))
                ->subject('Account Recovery');
        });

    return redirect()->back()->with('success', 'New OTP code sent successfully');
}
}
