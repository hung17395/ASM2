<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Detail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
        // $arr['products'] = Product::with('Category')->get();
        // return view ('Products/Product')->with($arr);   
    }

    public function lienhe()
    {
        return view('lienhe');
    }

    public function home()
    {
        return view('index');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('detail', ['product' => $product]);
    }
}
