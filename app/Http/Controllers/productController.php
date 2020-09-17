<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->paginate(9);
        $currentPage = $products->links()->paginator->currentPage();
        $lastPage = $products->links()->paginator->lastPage();
        return view('pages.catalog', compact('products','currentPage','lastPage'));
    }
}
