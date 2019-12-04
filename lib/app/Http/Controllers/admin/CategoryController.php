<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CategoryController extends Controller
{
    public function getCate()
    {
    	$data['catelist'] = Category::all();
    	return view('admin.category', $data);
    }

    public function postCate(AddCateRequest $request)
    {
        $file = $request->img->getClientOriginalName();
    	$category = new Category;
    	$category->cate_name = $request->name;
    	$category->cate_slug = str_slug($request->name);
        $category->cate_img = $file;
    	$category->save();
        $request->img->storeAs('avatar', $file);
    	return back();
    }

    public function getCateEdit($id)
    {
    	$data['cate'] = Category::find($id);
    	return view('admin.editcategory', $data);
    }

    public function postCateEdit(Request $request,$id)
    {
        $file = $request->img->getClientOriginalName();
    	$category = Category::find($id);
    	$category->cate_name = $request->name;
    	$category->cate_slug = str_slug($request->name);
        $category->cate_img = $file;
    	$category->save();
        $request->img->storeAs('avatar', $file);
    	return redirect()->intended('admin/category');
    }

    public function getCateDelete($id)
    {
    	Category::destroy($id);
    	return back();
    }
}
