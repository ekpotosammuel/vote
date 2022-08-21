<?php

namespace App\Http\Controllers;

use App\Models\UserParty;
use App\Http\Requests\StoreUserPartyRequest;
use App\Http\Requests\UpdateUserPartyRequest;

class UserPartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserPartyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPartyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserParty  $userParty
     * @return \Illuminate\Http\Response
     */
    public function show(UserParty $userParty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserParty  $userParty
     * @return \Illuminate\Http\Response
     */
    public function edit(UserParty $userParty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPartyRequest  $request
     * @param  \App\Models\UserParty  $userParty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPartyRequest $request, UserParty $userParty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserParty  $userParty
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserParty $userParty)
    {
        //
    }
}
