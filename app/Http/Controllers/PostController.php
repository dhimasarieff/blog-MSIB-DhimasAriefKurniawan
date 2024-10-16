<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $posts = Post::with('category')->get();
        return view('posts.index', compact('posts'));
    }
    
    public function create() {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }
    
    public function store(Request $request) {
        $request->validate(['title' => 'required', 'content' => 'required']);
        Post::create($request->all());
        return redirect()->route('posts.index');
    }
    
    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }
    
    public function edit(Post $post) {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }
    
    public function update(Request $request, Post $post) {
        $request->validate(['title' => 'required', 'content' => 'required']);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }
    
    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index');
    }
    
}
