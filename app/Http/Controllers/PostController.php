<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function create()
    {
        $posts = Post::all();
        return view('todo.create', compact('posts'));
    }

    public function store(PostRequest $request)
    {
        Post::create([
            'content' => $request->content
        ]);

        return redirect()->route('todo.create');
    }

    public function edit(Post $post)
    {
        return view('todo.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        Post::where('id', $post->id)->update(['content' => $request->content]);

        return redirect()->route('todo.create');
    }

    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect()->route('todo.create');
    }
}
