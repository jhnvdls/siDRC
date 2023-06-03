<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('pages.backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'excerpt' => 'nullable|string|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:publish,draft',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/posts'), $image_name);

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'image' => $image_name,
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Post created successfully',
            'redirect' => route('admin.posts.index')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('pages.backend.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug,' . $post->id,
            'excerpt' => 'nullable|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:publish,draft',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        if ($request->hasFile('image')) {
            $path = public_path('images/posts/' . $post->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/posts'), $image_name);
            $post->image = $image_name;
        }

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;
        $post->status = $request->status;
        $post->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Post updated successfully',
            'redirect' => route('admin.posts.index')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $path = public_path('images/posts/' . $post->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $post->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Post deleted successfully',
            'redirect' => route('admin.posts.index')
        ]);
    }
}
