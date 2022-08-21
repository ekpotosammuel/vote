<?php

namespace App\Http\Controllers;

use App\Models\ElectionType;
use App\Http\Requests\StoreElectionTypeRequest;
use App\Http\Requests\UpdateElectionTypeRequest;

class ElectionTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreElectionTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElectionTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ElectionType  $electionType
     * @return \Illuminate\Http\Response
     */
    public function show(ElectionType $electionType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ElectionType  $electionType
     * @return \Illuminate\Http\Response
     */
    public function edit(ElectionType $electionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateElectionTypeRequest  $request
     * @param  \App\Models\ElectionType  $electionType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElectionTypeRequest $request, ElectionType $electionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElectionType  $electionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElectionType $electionType)
    {
        //
    }
}
