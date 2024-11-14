<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<style>
body {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
}
</style>
<body>
  <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
      <div style="border-bottom:1px solid #eee">
        <a href="{{ url('/') }}" target="_blank"><img src="{{ URL::asset('upload/source/'.getcong('site_logo')) }}" alt="" style="width: 150px;height: 150px;"></a>
      </div>
      <p style="font-size:1.1em">Hi,</p>
      <p>Thank you for choosing {{getcong('site_name')}}. Use the following OTP to complete your Sign Up procedures. OTP is valid for 10 minutes</p>
      <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">{{ $otp }}</h2>
      <p style="font-size:0.9em;">Regards,<br />{{getcong('site_name')}}</p>
      <hr style="border:none;border-top:1px solid #eee" />
      <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
        <p>{{getcong('site_name')}}</p>
      </div>
    </div>
  </div>
 <p style="font-size: 13px;text-align: right;margin-top: 10px;position: relative;right: 27.5%;">&copy; {{getcong('site_name')}}</p>
</body>
</html>

