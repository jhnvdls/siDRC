<?php

namespace App\Http\Controllers\Backend;

use App\Models\Member;
use App\Models\Position;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Prodi;

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
        $departments = Department::all();
        $positions = Position::all();
        $prodis = Prodi::all();
        return view('pages.backend.member.create', compact('departments', 'positions', 'prodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:members,nim',
            'email' => 'required|string|max:255|unique:members,email',
            'phone' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'github' => 'nullable|string|max:255',
            'prodi_id' => 'required|exists:prodis,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

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
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'github' => $request->github,
            'prodi_id' => $request->prodi_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Member created successfully',
            'redirect' => route('backend.members.index')
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:members,nim,' . $member->id,
            'email' => 'required|string|max:255|unique:members,email,' . $member->id,
            'phone' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'position_id' => 'required|exists:positions,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'linkedin' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'github' => 'nullable|string|max:255',
            'prodi_id' => 'required|exists:prodis,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        if ($request->hasFile('image')) {
            $path = public_path('images/members/' . $member->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/members'), $image_name);
        } else {
            $image_name = $member->image;
        }

        $member->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'phone' => $request->phone,
            'departement_id' => $request->department_id,
            'position_id' => $request->position_id,
            'image' => $image_name,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'github' => $request->github,
            'prodi_id' => $request->prodi_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Member updated successfully',
            'redirect' => route('backend.members.index')
        ]);
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
