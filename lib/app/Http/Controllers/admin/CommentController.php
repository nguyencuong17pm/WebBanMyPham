<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Users;
use Auth;

class CommentController extends Controller
{
    public function getCom()
    {
    	$data['commentprod'] = Comment::leftjoin('db_product', 'db_product.prod_id', 'db_comment.com_prod')->get();
    	 return view('admin.comment', $data);
    }
    public function getkiemduyet($id)
    {	
    	$data['comment'] = Comment::find($id);
    	$data['prod'] = Product::find($data['comment']->com_prod);
    	return view('admin.kiemduyet',$data);
    }

    public function postkiemduyet(Request $request,$id)
    {
    	$bill = new Comment;
    	$arr['com_kiemduyet'] = $request->status;
    	$bill::where('com_id', $id)->update($arr);
        return redirect('admin/comment');
    }
     public function getdeletekiemduyet($id)
    {
    	Comment::destroy($id);
    	return back();
    }
}
