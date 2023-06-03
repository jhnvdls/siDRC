<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('pages.frontend.home.index');
    }

    public function about()
    {
        return view('pages.frontend.about.index');
    }

    public function member()
    {
        $members = \App\Models\Member::all();
        return view('pages.frontend.member.index', compact('members'));
    }

    public function sponsor()
    {
        return view('pages.frontend.sponsor.index');
    }

    public function service()
    {
        return view('pages.frontend.service.index');
    }
}
