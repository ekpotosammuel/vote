<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserRole;
use App\Models\Profile;
use Illuminate\Support\Str;


class RegistrationController extends Controller
{
    public function register(Request $request)
    {

        // return $request->all();
        $this->validate($request, [
            'firstName'     => 'required',
            'lastName'      => 'required',
            'email'         =>  'required',
            'password'      =>  'required|confirmed',
        ]);

        $user = User::create([
            'firstName'     => $request->firstName,
            'lastName'      => $request->lastName,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
        ]);


        $user_role = UserRole::create([
            'user_id'     => $user->id,
            'role_id'      => 2,
        ]);

        // $profile  = Profile::create([
        //     'user_id'   =>$user->id,
        //     'avatar'    => $request->avatar,
        //     'country'   => $request->country,
        //     'voteNumber'=> rand(10000,99999).Str::random(2)

        // ]);
        $profile  = new Profile();
        $profile->user_id       = $user->id;
        $profile->avatar        = $request->avatar;
        $profile->country       = $request->country;
        $profile->voteNumber    = rand(10000,99999).Str::random(2);
        $profile->save();
        return response()->json([
            'message' => 'registration successful'
        ],201);

    }
}
