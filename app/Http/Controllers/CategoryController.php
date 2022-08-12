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
        $categories->category_name = $request->category_name;
        $categories->save();
      
       return redirect()->route('Categories/Category');;

    }
    public function getEditCate($category_id)
    {
       $data['cate'] = Category::find($category_id);
       return view('Categories/editCategory',$data);
    }
    public function postEditCate(Request $request,$category_id)
    {
        $categories = Category::find($category_id);  
        $categories->category_name = $request->category_name;
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
