<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $arr['products'] = Product::with('Category')->get();
        return view ('Products/Product')->with($arr);     
    }
    public function create()
    {
        $asser['Categories'] = Category::all();
        return view('Products/Create')->with($asser);
    }
    // public function store(Request $request){
    //     $input = $request->all();
    //     Product::create($input);
    //     // return redirect('/');
    //     return view ('/add-product');
    // }

}
