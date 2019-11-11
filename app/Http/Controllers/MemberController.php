<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        // return $members;
        // $members = DB::table('members')->select(['name', 'picture', 'position', 'quote', 'links'])->get();
        return view('members', compact('members'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }
}
