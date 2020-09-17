<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SugnInControllerer extends Controller
{
    public function index()
    {
        return view('pages.sugnin');
    }
    public function sugnin(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required'
        ]);

        if(!Auth::attempt($request->only(['name','password']),$request->input('remember')))
        {
            return redirect()->route('catalog');
        }
        return redirect()->route('home');
    }
}
