<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class productController extends Controller
{
    public function index(Request $request)
    {
        //                $products = $filtre->paginate(9)->withPath('?'.preg_replace('/&page=\d/','',$request->getQueryString()));
        $filtre = product::query();
        if ($request->input('max')){
            $filtre->where('price','<=',$request->input('max'));
        }
        if ($request->input('min')){
            $filtre->where('price','>=',$request->input('min'));
        }
        if ($request->input('max') || $request->input('min'))
        {
            $products = $filtre->paginate(9)->withPath('?'.preg_replace('/&page=\d/','',$request->getQueryString()));
        }else {
            $products = $filtre->paginate(9);
        }
        $currentPage = $products->links()->paginator->currentPage();
        $lastPage = $products->links()->paginator->lastPage();
        return view('pages.catalog', compact('products','currentPage','lastPage'));
    }

    public function addProduct(Request $request)
    {
        product::create([
           'title' => $request->input('title'),
           'price' => $request->input('price'),
           'description' => $request->input('descr')
        ]);

        return redirect()->back();
    }
}
