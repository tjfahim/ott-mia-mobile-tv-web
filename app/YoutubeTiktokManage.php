<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YoutubeTiktokManage extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'type',
        'url',
        'status',
    ];
}
