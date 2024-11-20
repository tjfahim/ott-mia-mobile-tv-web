<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production_member extends Model
{
    protected $fillable = [
        'name',
        'image',
        'nationality',
        'dof',
        'role'
    ];
}
