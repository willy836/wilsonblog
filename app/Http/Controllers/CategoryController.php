<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showPosts($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();

        if(!$category){
            abort(404);
        }

        $posts = $category->posts;

        return view('category', [
            'category' => $category,
            'posts' => $posts
        ]);
    }
}
