<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
//    public function store(Post $post, Request $request) // leverage dependency injection
    public function store(Post $post)
    {
//        Post::create(request()->all());
        // validation
        request()->validate([
            'body' => 'required'
        ]);

        $post->comments()->create([
//            'user_id' => auth()->id() or auth()->user()->id() or request()->user()->id or $request->user()->id,
//            'body' => $request->input('body')
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
