<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->filter(request(['search']))->get();
        $categories = Category::all();

        return view('posts.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $categories = Category::all();
        
        if(auth()->user()->username !== 'jennifer'){
            abort(Response::HTTP_FORBIDDEN);
        }

        return view('posts.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required | min:3 |max:90',
            'body' => 'required |min:50',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'image' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post was created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        if(!$post){
            abort(404);
        }

        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        $categories = Category::all();

        if(!$post){
            abort(404);
        }

        if(auth()->user()->username !== 'jennifer'){
            abort(Response::HTTP_FORBIDDEN);
        }

        return view('posts.edit', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        $validatedData = $request->validate([
            'title' => 'required | min:3 |max:90',
            'body' => 'required |min:50',
            'category_id' => 'required',
            'image' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        
        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post was updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post was deleted successfully.');
    }
}
