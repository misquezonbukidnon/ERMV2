<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\Position;
use App\Models\Roles;
use App\Models\User;
use App\Models\UserImage;
use App\Models\UserRelationship;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

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
            'image_upload' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $user = User::create([
            'first' => $request->first,
            'last' => $request->last,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->image_upload != null) {
            // $imageName = $user->last.'_'.$user->first.'.'.$request->image_upload->extension();
        
            // storing image to public folder
            // $request->image_upload->resize(800, 800)->move(public_path('images'), $imageName);
    
            /* Store $imageName name in DATABASE from HERE */

            // $user_image = UserImage::create([
            //     'name' => $imageName,
            // ]);

            $image = $request->file('image_upload');
            $imageName = $user->last.'_'.$user->first.'.'.$request->image_upload->extension();
        
            $img = Image::make($image->path());
            $img->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/images/users/').$imageName);

            $user_image = UserImage::create([
                'name' => $imageName,
            ]);

            $userRels = UserRelationship::create([
                'users_id' => $user->id,
                'roles_id' => $request->roles_id,
                'offices_id' => $request->offices_id,
                'positions_id' => $request->positions_id,
                'user_images_id' => $user_image->id,
            ]);
        } else {
            $userRels = UserRelationship::create([
                'users_id' => $user->id,
                'roles_id' => $request->roles_id,
                'offices_id' => $request->offices_id,
                'positions_id' => $request->positions_id,
                'user_images_id' => 1,
            ]);
        }

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
