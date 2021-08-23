<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Position;
use App\Models\Roles;
use App\Models\User;
use App\Models\UserRelationship;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offices = Office::all();
        $roles = Roles::all();
        $positions = Position::all();
        return view('auth.register', compact('offices', 'roles', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
            'offices_id' => 'required',
            'roles_id' => 'required',
            'offices_id' => 'required',
            'positions_id' => 'required',
        ]);
        
        $user = User::create([
            'first' => $request->first,
            'last' => $request->last,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $userRels = UserRelationship::create([
            'users_id' => $user->id,
            'roles_id' => $request->roles_id,
            'offices_id' => $request->offices_id,
            'positions_id' => $request->positions_id,
            'user_images_id' => $request->user_images_id,
        ]);

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
