<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = "បញ្ជូលទិន្នន័យសមាជិក";
        return view("member.create", ['title' => $title]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        

        $this->data['title'] = "បញ្ជូលទិន្នន័យសមាជិក";
        return view("member.create",  $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
