<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class CommentPosted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $comment_id;
    public $user_id;
    public $description;
    public $user_broadcast_id;

    public function __construct($user_broadcast_id, $user_id, $description)
    {
        $this->user_broadcast_id = $user_broadcast_id;
        $this->user_id = $user_id;
        $this->description = $description;
        $this->comment_id = null;  // Set to null or fetch the actual comment ID if needed
    }

    public function broadcastOn()
    {
        return new Channel('comment-channel'); // Channel name should match
    }

    public function broadcastAs()
    {
        return 'new-comment'; // Event name that the client will listen for
    }
}
