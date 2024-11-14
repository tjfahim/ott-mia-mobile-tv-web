<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFeedBack extends Model
{
    protected $fillable = [
        'user_id', 
        'name', 
        'email', 
        'rating_number', 
        'description'
    ];
}
