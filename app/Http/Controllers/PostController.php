<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content
        ]);

        return redirect()->route('posts.show', $post);
    }

    public function show($post)
    {
        $post = Post::find($post);
        return view('posts.show', ['post' => $post]);
    }
    
    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $post = Post::find($post);

        $post->update([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content
        ]);

        return redirect()->route('posts.show', $post);
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();

        return redirect('/posts');
    }
}
