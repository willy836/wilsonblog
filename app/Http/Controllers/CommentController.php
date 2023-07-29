<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
   public function store (Request $request, Post $post)
   {
        if (!Auth::check()) {
            return back()->withErrors('You need to be logged in to post a comment.');
        }

        $validatedData = $request->validate([
            'body' => 'required | max:255'
        ]);
        
        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $validatedData['body']
        ]);

        return back();
   } 

// public function store(Request $request)
//     {
//         $validatedData = $request->validate([
//             'body' => 'required|max:255',
//         ]);

//         $post = Post::find($request->post_id);
//         $user = User::find($request->user_id);

//         $comment = new Comment([
//             'body' => $validatedData['body'],
//         ]);

//         $comment->user()->associate($user);
//         $comment->post()->associate($post);

//         $comment->save();
//     }
}
