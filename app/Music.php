<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'music';
    protected $primaryKey = 'music_id';
    protected $fillable = [
        'music_title',
        'music_url',
        'music_artist'
        // Add other fillable attributes as needed
    ];
}
