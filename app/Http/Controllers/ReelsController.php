<?php

namespace App\Http\Controllers;

use App\Reels;
use App\ReelsComment;
use App\ReelsLike;
use Illuminate\Http\Request;

class ReelsController extends Controller
{
  

    public function index()
    {
        $reels = Reels::where('status', 1)
            ->where('video_url', 'like', '%.mp4')
            ->with(['likes', 'comments' => function($query) {
                $query->where('parent_id', 0)->with('replies.user');
            }])
            ->inRandomOrder()
            ->get();
    
        return view('pages.reels_single', compact('reels'));
    }
    public function postComment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);
    
        // Check if the reel exists
        $reel = Reels::find($id);
        if (!$reel) {
            return response()->json(['message' => 'Reel not found'], 404);
        }
    
        // Create and save the comment
        $comment = new ReelsComment();
        $comment->reel_id = $id;
        $comment->user_id = auth()->id(); // Use authenticated user ID
        $comment->comment = $request->input('comment');
        if ($request->has('parent_id')) {
            $comment->parent_id = $request->input('parent_id');
        }
        $comment->save();
    
        $reel->comment_count += 1;
        $reel->save();
    
        $user = $comment->user; // Get the user who made the comment
    
        return response()->json([
            'success' => true,
            'message' => $request->has('parent_id') ? 'Comment reply successfully' : 'Comment posted successfully',
            'commentCount' => $reel->comment_count,
            'username' => $user->name,
            'user_image' => $user->user_image ? asset('upload/' . $user->user_image) : null,
            'comment' => $comment->comment
        ]);
    }
    public function postLike(Request $request, $id)
    {
        $reel = Reels::find($id);
    
        if (!$reel) {
            return response()->json(['message' => 'Reel not found'], 404);
        }
    
        $existingLike = ReelsLike::where('reel_id', $id)->where('user_id', auth()->id())->first();
    
        if ($existingLike) {
            $existingLike->delete();
            $reel->decrement('like_count');
            return response()->json([
                'message' => 'Like removed successfully',
                'likeCount' => $reel->like_count // Return updated like count
            ]);
        }
    
        $newLike = new ReelsLike();
        $newLike->reel_id = $id;
        $newLike->user_id = auth()->id();
    
        if ($newLike->save()) {
            $reel->increment('like_count');
            return response()->json([
                'message' => 'Like posted successfully',
                'likeCount' => $reel->like_count // Return updated like count
            ]);
        }
    
        return response()->json(['message' => 'Failed to post like'], 500);
    }
    
    public function ReelComment($id)
    {
        $reel_comments = ReelsComment::with('user:id,name,email,user_image')
            ->where('reel_id', $id)
            ->where('parent_id', 0)
            ->get();
    
        if ($reel_comments->isEmpty()) {
            return response()->json(['message' => 'No data found']);
        }
    
        foreach ($reel_comments as $reel_comment) {
            $replies = ReelsComment::with('user:id,name,email')
                ->where('parent_id', $reel_comment->id)
                ->get();
    
            if (!$replies->isEmpty()) {
                $reel_comment->replies = $replies;
            }
        }
    
        return response()->json(['reel_comments' => $reel_comments]);
    }
    


public function ReelLike($id)
{
    $reel_likes = ReelsLike::where('reel_id', $id)->get();

    if (!$reel_likes->isEmpty()) {
        return response()->json(['reel_likes' => $reel_likes]);
    } else {
        return response()->json(['message' => 'No data found']);
    }
}

}
