<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('pages.backend.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
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
        $image->move(public_path('images/events'), $image_name);

        Event::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Event created successfully',
            'redirect' => route('backend.event.index'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('pages.backend.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|in:publish,draft',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        if ($request->hasFile('image')) {
            $path = public_path('images/events/' . $event->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/events'), $image_name);
            $event->image = $image_name;
        }

        $event->title = $request->title;
        $event->content = $request->content;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->status = $request->status;
        $event->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Event updated successfully',
            'redirect' => route('backend.event.index'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $path = public_path('images/events/' . $event->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $event->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Event deleted successfully',
        ]);
    }
}
