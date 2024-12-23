<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IpTVContent extends Model
{

    protected $table = 'iptv_content';

    protected $fillable = [
        'tvg-id',
        'name',
       'title',
        'image',
        'url',
    ];
}
