<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();

        $prodis = DB::table('members')
        ->select(DB::raw('COUNT(members.name) as member_count'), 'prodis.namaProdi as namaProdi')
        ->leftJoin('prodis', 'members.prodi_id', '=', 'prodis.id')
        ->groupBy('members.prodi_id', 'prodis.namaProdi')
        ->get();
    

        $chart_data = [];
        foreach ($prodis as $val) {
            $chart_data[] = [$val->namaProdi, $val->member_count];
        }

        $chart_data = json_encode($chart_data);

        return view('pages.frontend.member.index', compact('chart_data', 'members'));
    }

    public function show(Member $member)
    {
        return view('pages.frontend.member.show', compact('member'));
    }
}
