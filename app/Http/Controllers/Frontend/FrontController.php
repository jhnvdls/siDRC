<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function sponsor()
    {
        return view('pages.frontend.sponsor.index');
    }

    public function service()
    {
        return view('pages.frontend.service.index');
    }
}
