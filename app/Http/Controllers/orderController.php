<?php

namespace App\Http\Controllers;

use App\Models\orders;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request,[
           'tell' => 'required',
           'name' => 'required|min:2|max:20',
           'adress' => 'required|min:10',
        ]);
        orders::create([
            'tell' => $request->input('tell'),
            'name' => $request->input('name'),
            'adress' => $request->input('adress'),
            'comments' => $request->input('comments') ?? ''
        ]);

        return redirect()->home();
    }

    public function removeorder(Request $request)
    {
        DB::delete('delete from orders where id=?',[$request->input('id')]);
    }
}
