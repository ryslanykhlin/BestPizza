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
        if ($request->input('max')){
            $filtre->where('price','<=',$request->input('max'));
        }
        if ($request->input('checkbox__category')){
            $category = $request->input('checkbox__category');
            $filtre->where('category','=',$category);
        }
        if ($request->input('max') || $request->input('min') || $request->input('checkbox__category'))
        {
            $products = $filtre->paginate(9)->withPath('?'.preg_replace('/&page=\d/','',$request->getQueryString()));
        }else {
            $products = $filtre->paginate(9);
        }
        $currentPage = $products->links()->paginator->currentPage();
        $lastPage = $products->links()->paginator->lastPage();
        $min = DB::select('select MIN(price) as min from products')[0]->min;
        $max = DB::select('select MAX(price) as max from products')[0]->max;
        return view('pages.catalog', compact('products','currentPage','lastPage','min','max'));
    }

    public function addProduct(Request $request)
    {
        product::create([
           'title' => $request->input('title'),
           'price' => $request->input('price'),
           'category' => $request->input('category'),
           'description' => $request->input('descr')
        ]);

        return redirect()->back();
    }
}
