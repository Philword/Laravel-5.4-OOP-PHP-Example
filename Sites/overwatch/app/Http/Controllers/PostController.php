<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comments;
use Image;
use Links;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
        ->get();
        return view('index', compact('posts'));
    }
    public function create()
    {
        return view('create');
    }
    public function show(Post $post)
    {
        return view('single', compact('post', 'slug'));
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = auth()->id();
        $post->description = request('description');
        if ($request ->hasFile('post_image')) {
            $image = $request->file('post_image');
            $filename = time() . "." . $image->getClientOriginalExtension();
            $location = public_path('img/post/' . $filename);
            $img = Image::make($image);
            $img->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($location);
            $post->image = $filename;
        };

        $post->save();
        return redirect('/');
    }
}
