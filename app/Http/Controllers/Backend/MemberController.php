<?php

namespace App\Http\Controllers\Backend;

use App\Models\Member;
use App\Models\Position;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('pages.backend.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Departement::all();
        $positions = Position::all();
        return view('pages.backend.member.create', compact('departments', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:members,nim',
            'email' => 'required|string|max:255|unique:members,email',
            'phone' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/members'), $image_name);

        Member::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'phone' => $request->phone,
            'department_id' => $request->department_id,
            'position_id' => $request->position_id,
            'image' => $image_name,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Member created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('pages.backend.member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $path = public_path('images/members/' . $member->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $member->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Member deleted successfully'
        ]);
    }
}
