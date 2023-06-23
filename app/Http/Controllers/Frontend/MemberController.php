<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('pages.frontend.member.index', compact('members'));
    }

    public function show(Member $member)
    {
        return view('pages.frontend.member.show', compact('member'));
    }
}
