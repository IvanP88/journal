<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function language($lang)
    {
        if(!session()->has('locale'))
        {
            session()->put('locale', config('app.languages'));
        }
        app()->setLocale(session('locale'));
        return redirect()->back();
    }
}
