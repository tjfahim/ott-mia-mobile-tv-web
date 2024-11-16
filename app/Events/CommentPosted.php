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

    public function __construct($user_broadcast_id, $user_id, $description, $comment_id)
    {
        // Ensure these values are not null
        $this->user_broadcast_id = $user_broadcast_id;
        $this->user_id = $user_id;
        $this->description = $description;
        $this->comment_id = $comment_id;
    }

    public function broadcastOn()
    {
        // Broadcasting on the 'comment-channel'
        return new Channel('comment-channel');
    }

    public function broadcastAs()
    {
        // Event name that the client will listen for
        return 'new-comment';
    }
}
