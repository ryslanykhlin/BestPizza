<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;

class accountController extends Controller
{
    public function index()
    {
        return view('pages.account');
    }
}
