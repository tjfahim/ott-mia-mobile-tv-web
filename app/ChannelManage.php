<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChannelManage extends Model
{
     // Define the fillable properties
     protected $fillable = [
        'title',
        'image',
        'url',
        'status',
    ];
}
