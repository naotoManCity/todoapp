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
}
