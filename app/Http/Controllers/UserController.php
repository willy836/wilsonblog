<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAuthorPosts ($username)
    {
        $author = User::where('username', $username)->first();

        if(!$author){
            abort(404);
        }

        $posts = $author->posts;

        return view('author', [
            'author' => $author,
            'posts' => $posts
        ]);
    }
}
