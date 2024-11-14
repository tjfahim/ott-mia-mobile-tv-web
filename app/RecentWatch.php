<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecentWatch extends Model
{
    protected $fillable = [
        'user_id',
        'movie_videos_id',
    ];

    public function movie()
    {
        return $this->belongsTo(Movies::class, 'movie_videos_id'); // Link to the Movie model
    }
}
