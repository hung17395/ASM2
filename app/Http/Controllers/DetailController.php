<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class DetailController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        return view('detail', ['product' => $product]);
    }

}
