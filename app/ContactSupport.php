<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSupport extends Model
{
    protected $fillable = [
        'user_id', 
        'name', 
        'email', 
        'description'
    ];
}
