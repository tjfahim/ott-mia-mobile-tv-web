<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveBroadcastManage extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
        'rtmp_server',
        'stream_key',
        'stream_url',
        'status',
    ];
}
