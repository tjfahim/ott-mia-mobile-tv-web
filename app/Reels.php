<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reels extends Model
{
    protected $table = 'reels';
    protected $fillable = ['title', 'video_url', 'status', 'like_count', 'comment_count'];
    protected $primaryKey = 'id';

    public function getComments(){
        return $this->hasMany(ReelsComment::class, 'reel_id');
    }
    public function getLikes(){
        return $this->hasMany(ReelsLike::class, 'reel_id');
    }
    public function likes()
    {
        return $this->hasMany(ReelsLike::class, 'reel_id');
    }
    public function replies()
    {
        return $this->hasMany(ReelsComment::class, 'parent_id');
    }

    public function comments()
    {
        return $this->hasMany(ReelsComment::class, 'reel_id');
    }
 
    // Check if the current user has liked the reel
    public function isLikedByUser()
    {
        $userId = auth()->id();

        if (!$userId) {
            return false; // Return false if the user is not authenticated
        }

        return $this->likes()->where('user_id', $userId)->exists();
    }
}
