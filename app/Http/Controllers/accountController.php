<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class accountController extends Controller
{
    public function index()
    {
        return view('pages.account');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->home();
    }
}
