<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReelsComment extends Model
{
    protected $table = 'reels_comments';
    protected $primaryKey = 'id';

    public function reels()
    {
        return $this->hasOne(Reels::class, 'id', 'reel_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function replies()
    {
        return $this->hasMany(ReelsComment::class, 'parent_id');
    }
}
