<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBroadcast extends Model
{
     // Define the fillable attributes
     protected $fillable = [
        'user_id',
        'title',
        'description',
        'image',
        'status',
        'key',
        'rtmp_server',
        'live_link',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
