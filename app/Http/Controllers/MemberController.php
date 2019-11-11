<?php

namespace App\Http\Controllers;

use App\Member;

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
        return $members;
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
