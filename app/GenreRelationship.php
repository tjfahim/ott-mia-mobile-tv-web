<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreRelationship extends Model
{
    protected $fillable = [
        'parent_id',
        'child_id'
    ];
}
