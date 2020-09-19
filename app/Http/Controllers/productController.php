<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class productController extends Controller
{
    public function index(Request $request)
    {
        $filtre = product::query();
        if ($request->input('max'))
        {
            $filtre->where('price','<=',$request->input('max'));
            if (isset($_GET['page'])){
                $products = $filtre->paginate(9)->withPath('?'.preg_replace('/&page=\d/','',$request->getQueryString()));
            }
        } else{
            $products = $filtre->paginate(9);
        }
        if ($request->input('min'))
        {
            $filtre->where('price','>=',$request->input('min'));
            if (isset($_GET['page'])){
                $products = $filtre->paginate(9)->withPath('?'.preg_replace('/&page=\d/','',$request->getQueryString()));
            }
        } else{
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
