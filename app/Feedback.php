<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'message',
        'rating'
    ];
}
