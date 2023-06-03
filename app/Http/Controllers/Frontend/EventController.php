<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(9);
        return view('pages.frontend.event.index', compact('events'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('pages.frontend.event.show', compact('event'));
    }
}
