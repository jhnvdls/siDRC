<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('pages.backend.message.index', compact('messages'));
    }

    public function show(Message $message)
    {
        return view('pages.backend.message.show', compact('message'));
    }
}
