<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('Categories/category', compact("categories"));
    }
    public function getCreate()
    {
        return view('Categories/createCategory');
    }
    //Hàm store để thêm dữ liệu
    public function postCreate(Request $request)
    {

        $categories = new Category();
        $categories->name = $request->name;
        $categories->save();
      
       return redirect()->route('Categories/Category');;

    }
    public function getEditCate($id)
    {
       $data['cate'] = Category::find($id);
       return view('Categories/editCategory',$data);
    }
    public function postEditCate(Request $request,$id)
    {
        $categories = Category::find($id);  
        $categories->name = $request->name;
        $categories->save();
        return redirect()->route('Categories/Category');
    }
    public function delete($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return back();
        // return redirect()->route('/Categories/Category')
        // ->with('success', 'Category deleted successfully');
    }
}
