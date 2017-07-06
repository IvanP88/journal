<?php

namespace App\Http\Controllers;

use App\Models\Forms\ProfileForm;
use App\Models\Profile;
use App\User;
use Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function profile(Profile $model_profile, User $model_user)
    {
        $profile = $model_profile::where('user_id', Auth::user()->id)->first();
        $user = $model_user::find(Auth::user()->id);
        return view('pages.user.profile', ['profile' => $profile, 'user'=>$user]);
    }

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

}
