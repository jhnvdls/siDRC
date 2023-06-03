<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $posts = \App\Models\Post::where('title', 'like', '%' . $request->search . '%')->paginate(5);
        } else {
            $posts = \App\Models\Post::paginate(5);
        }
        $recent_posts = \App\Models\Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('pages.frontend.post.index', compact('posts', 'recent_posts'));
    }

    public function show(Request $request, $slug)
    {
        $post = \App\Models\Post::where('slug', $slug)->first();
        $recent_posts = \App\Models\Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('pages.frontend.post.show', compact('post', 'recent_posts'));
    }
}
