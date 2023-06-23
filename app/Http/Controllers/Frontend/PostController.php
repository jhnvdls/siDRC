<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $posts = Post::where('title', 'like', '%' . $request->search . '%')->paginate(5);
        } else {
            $posts = Post::paginate(5);
        }
        $recent_posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('pages.frontend.post.index', compact('posts', 'recent_posts'));
    }

    public function show(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $recent_posts = \App\Models\Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('pages.frontend.post.show', compact('post', 'recent_posts'));
    }
}
