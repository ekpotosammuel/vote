<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {

        $profile = profile::get();
        return $profile;
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function getCurrentUser()
    // {
    //     $user = auth('sanctum')->user();
    //     $profile = profile::where('user_id', $user->id)->with('user')->first();
    //     return $profile;
    // }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile  = Profile::with('user')->findorFail([$id]);
        return $profile;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, Profile $profile, $id)
    {
        $user = auth('sanctum')->user();
        $this->validate($request, [
            'avatar'=>'required|mimes:png,jpg,jpeg,gif|max:2048',
            'contry'=>'required',
            ]);
        $profile  = Profile::findorFail($id);
        // $profile  = Profile::findorFail($user->id);
        $profile->user_id       = $user->id;
        $profile->avatar        = $request->file('avatar')->store('buckets/images');
        $profile->country       = $request->input('country');
        $profile->update();
        return response()->json([
            'message' => 'registration successful'
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
