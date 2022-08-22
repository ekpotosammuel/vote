<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidate = Candidate::get();
        return response()->json([
            'message'   => 'All Candidate Record',
            'data'      => $candidate
        ]);
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
     * @param  \App\Http\Requests\StoreCandidateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCandidateRequest $request)
    {
        $this->validate($request,[
            'firstName' =>  'required',
            'lastName'  =>  'required',
            'avatar'    =>  'required|mimes:png,jpg,jpeg,gif|max:2048',
            'bio'       =>  'required'
        ]);
        $candidate = new Candidate();
        $candidate->firstName = $request->input('firstName');
        $candidate->lastName  = $request->input('lastName');
        $candidate->avatar    = $request->file('avatar')->store('buckets/candidate/images');
        $candidate->bio       = $request->input('bio');
        $candidate->save();
        return response()->json([
            'message' => 'Candidate Created successful',
            'data'    => $candidate
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate, $id)
    {
        $candidate = Candidate::findorFail($id);
        return response()->json([
            'message' => 'Record',
            'data'    => $candidate
        ]);
    }

    public function update(UpdateCandidateRequest $request, Candidate $candidate, $id)
    {
        $this->validate($request,[
            'firstName' =>  'required',
            'lastName'  =>  'required',
            'avatar'    =>  'required|mimes:png,jpg,jpeg,gif|max:2048',
            'bio'       =>  'required'
        ]);
        // return $request->all();
        $candidate = Candidate::findorFail($id);
        $candidate->firstName = $request->input('firstName');
        $candidate->lastName  = $request->input('lastName');
        $candidate->avatar    = $request->file('avatar')->store('buckets/candidate/images');
        $candidate->bio       = $request->input('bio');
        $candidate->save();
        return response()->json([
            'message' => 'Record Updated Successful',
            'data'    => $candidate
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
