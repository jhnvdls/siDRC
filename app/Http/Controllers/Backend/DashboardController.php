<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use App\Models\Event;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::count();
        $events = Event::count();
        $members = Member::count();
        return view('pages.backend.dashboard.index', compact('posts', 'events', 'members'));
    }
}
