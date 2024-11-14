<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReelsLike extends Model
{
    protected $table = 'reels_likes';
    protected $primaryKey = 'id';

    public function reels()
    {
        return $this->belongsTo(Reels::class);
    }
}
