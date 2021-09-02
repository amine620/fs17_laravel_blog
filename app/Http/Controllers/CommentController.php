<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $req)
    {
        $req->validate([
            "content" => 'required'
        ]);
        $comment = new Comment();
        $comment->content = $req->content;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $req->post_id;
        $comment->save();
        return back();
    }

    public function commentPage($id)
    {
        $post = Post::find($id);
        return view('commentPage', ['post' => $post]);
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        return back();

    }
}
