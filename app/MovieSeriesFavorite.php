<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class MovieSeriesFavorite extends Model
{
    protected $fillable = [
        'user_id',
        'movie_videos_id',
        'is_favorite',
    ];

    public function movie()
    {
        return $this->belongsTo(Movies::class, 'movie_videos_id'); // Link to the Movie model
    }

   
}