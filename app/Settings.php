<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'site_name',
        'currency_symbol',
        'site_email',
        'site_logo',
        'site_favicon',
        'site_description',
        'site_header_code',
        'site_footer_code',
        'site_copyright',
        'footer_fb_link',
        'footer_linkdin_link',
        'footer_twitter_link'
    ];



	 public $timestamps = false;

}
