<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $arr['products'] = Product::with('Category')->get();
        return view ('Products/Product')->with($arr);
        // return view ('Products/Product');
    }
}
