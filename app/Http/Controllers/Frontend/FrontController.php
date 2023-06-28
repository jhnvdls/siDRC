<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Member;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        return view('pages.frontend.home.index');
    }

    public function about()
    {
        $setting = Setting::all();
        return view('pages.frontend.about.index', compact('setting'));
    }

    public function sponsor()
    {
        return view('pages.frontend.sponsor.index');
    }

    public function service()
    {
        return view('pages.frontend.service.index');
    }

    public function message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully'
        ]);
    }
}
