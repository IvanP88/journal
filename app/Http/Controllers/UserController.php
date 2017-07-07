<?php

namespace App\Http\Controllers;

use App\Models\Forms\ProfileForm;
use App\Models\Profile;
use App\Models\Role;
use App\User;
use Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile(Profile $model_profile, User $model_user)
    {
        $profile = $model_profile::where('user_id', Auth::user()->id)->first();
        $user = $model_user::find(Auth::user()->id);
        return view('pages.user.profile', ['profile' => $profile, 'user'=>$user]);
    }

    public function roles(Profile $profile, User $user)
    {
        if(Auth::user()->role->name != 'director'){
            return redirect('/');
        }
        $director_id = $user::where('role_id', User::DIRECTOR_ID)->first();
        $all_profile = $profile::where('user_id', '!=', $director_id->id)->get();

        return view('pages.user.roles', ['profiles' => $all_profile]);
    }
    public function roles_change(Profile $profile, Role $role, $id)
    {
//        dd($id);
        $one_profile = $profile::where('user_id', $id)->first();
        $all_roles = $role::all();
        $roles_array = [];
        $x = 0;
        foreach($all_roles as $item){
            $roles_array[++$x] = $item->name;
        }
        return view('pages.user.role', ['profile' => $one_profile, 'roles' => $roles_array]);
    }
//    Form
    public function profile_save(Request $request, Profile $model_profile, ProfileForm $profileForm)
    {
        if ($request->isMethod('post')) {
            $validator = $profileForm::validate_form($request);

            if ($validator->fails()) {
                return redirect('/profile')
                    ->withErrors($validator)
                    ->withInput();
            } else{
                $profileForm::profile_save($request, Auth::user()->id);
            }
        }
        return redirect('/profile');
    }
    public function role_save(Request $request, ProfileForm $profileForm)
    {
//        dd($request);
        if ($request->isMethod('post')) {
            $validator = $profileForm::validate_role($request);

            if ($validator->fails()) {
                return redirect('/roles')
                    ->withErrors($validator)
                    ->withInput();
            } else{
                $profileForm::role_save($request);
            }
        }
        return redirect('/roles');
    }


}
