<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBroadcastComments extends Model
{
    protected $fillable = [
        'user_broadcast_id',
        'user_id',
        'description',
        'status',
    ];

    /**
     * Define the relationship with the UserBroadcast model.
     */
    public function userBroadcast()
    {
        return $this->belongsTo(UserBroadcast::class, 'user_broadcast_id');
    }

    /**
     * Define the relationship with the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
