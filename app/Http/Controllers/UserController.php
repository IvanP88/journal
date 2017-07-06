<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view('pages.user.profile', ['profile' => $profile]);
    }
}
