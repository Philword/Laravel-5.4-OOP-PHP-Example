<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comments;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
        'body' => 'required|max:2000'
        ]);
        Comments::create([
            'title' => request('title'),
            'body' => request('body'),
            'post_id' => $post->id,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
