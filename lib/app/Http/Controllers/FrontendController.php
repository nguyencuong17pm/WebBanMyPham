<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Http\Requests\RegisterRequest;
use App\Models\Users;
use Auth;
class FrontendController extends Controller
{
	 public function getHome()
    {
    	
    	$data['news'] = Product::orderBy('prod_id', 'desc')->take(12)->get();
        return view('frontend.index',$data);
      
    }
    public function getProduct(){
        $data['product'] = Product::all();
        $cate['category'] = Category::all();
        return view('frontend.product',$data,$cate);
    }
    public function getProductkhuyenmai(){
        $data['product'] = Product::all();
        $cate['category'] = Category::all();
        return view('frontend.productkhuyenmai',$data,$cate);
    }
    public function getDetail($id)
    {
    	$data['item'] = Product::find($id);
        $data['comments'] = Comment::where('com_prod', $id)->get();
    	return view('frontend.productdetail', $data);
    }

    public function getCate($id)
    {
    	$data['cateName'] = Category::find($id);
    	$data['items'] = Product::where('prod_cate', $id)->orderBy('prod_id', 'desc')->paginate(8);
    	return view('frontend.productwithcategory', $data);
    }

    public function getContact(){
        return view('frontend.contact');
    }

    // public function getregister(){
    //     return view('frontend.register');
    // }

    // public function postregister(RegisterRequest $request){
    //     $regis = new Users;
    //     $regis->name = $request->taikhoan;
    //     $regis->email = $request->email;
    //     $regis->password = bcrypt($request->matkhau);
    //     $regis->level = $request->level;
    //     if($request->matkhau == $request->matkhauagain){
    //         $regis->save();
    //     return redirect('dangki')->with('error_thanhcong','Chúc mừng bạn đăng kí thành công');
    //     }
    //     else{
    //         return redirect('dangki')->with('error', 'Xác nhận mật khẩu không đúng! ');
    //     }
        

    // }

    // public function getlogin(){
    //     return view('frontend.login');
    // }

    // public function postlogin(Request $request)
    // {
    //     $arr = ['name'=>$request->taikhoan, 'password'=>$request->matkhau];
    //     if(Auth::attempt($arr)){
    //         return redirect()->intended('/');
    //     }
    //     else
    //     {
    //         return back()->with('error', 'Tài khoản hoặc mật khẩu chưa chính xác');
    //     }
    // }

    // public function getdangxuat()
    // {
    //     Auth::logout();
    //     return redirect()->intended('/');
    // }

    // public function getthongtin()
    // {
    //     return view('frontend.thongtin');
    // }

    public function postDetail($id,Request $request){
        $data = new Comment;
        $data->com_prod = $id;
        $data->com_name = $request->name;
        $data->com_content = $request->content;
        $data->com_kiemduyet = $request->kiemduyet;
        $data->save();
        return back()->with('error_thanhcong','Đăng bình luận thành công và đang chờ kiểm duyệt');
    }











    // public function postComment(Request $request,$id)
    // {
    // 	$comment = new Comment;
    // 	$comment->com_name = $request->name;
    // 	$comment->com_email = $request->email;
    // 	$comment->com_content = $request->content;
    // 	$comment->com_prod = $id;
    // 	$comment->save();
    // 	return back();
    // }

    public function getSearch(Request $request)
    {
    	$result = $request->tukhoa;
    	$data['nameSearch'] = $result;
    	$result = str_replace(' ', '-', $result);
    	$data['items'] = Product::where('product_name','like','%'.$request->tukhoa.'%')
                                    ->orWhere('product_gia',$request->tukhoa)
                                    ->get();
        // dd($data);
    	return view('frontend.search', $data);
    }
}
