<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Users;
use App\Http\Requests\AddProdRequest;

class ProductController extends Controller
{
    public function getProd()
    {
    	$data['prodlist'] = Product::all();
        $datacate['catelist'] = Category::all();
    	return view('admin.product', $data,$datacate);
    }

    public function getProdAdd()
    {
    	$data['catelist'] = Category::all();
    	return view('admin.addproduct', $data);
    }

    // public function getProdAddKhuyenmai()
    // {
    //     $data['catelist'] = Category::all();
    //     return view('admin.addproductkhuyenmai', $data);
    // }

    public function postProdAdd(AddProdRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $filename1 = $request->img1->getClientOriginalName();
    	$filename2 = $request->img2->getClientOriginalName();
    	$product = new Product;
    	$product->product_name = $request->name;
    	$product->product_slug = str_slug($request->name);
        $product->product_gia = $request->price;
        $product->product_giakhuyenmai = $request->price_km;
        $product->product_img = $filename;
        $product->product_img1 = $filename1;
    	$product->product_img2 = $filename2;
    	$product->product_thanhphan = $request->thanhphan;
    	$product->product_baohanh = $request->baohanh;
    	$product->product_congdung = $request->congdung;
    	$product->product_hdsd = $request->huongdansudung;
    	$product->product_trangthai = $request->status;
    	$product->prod_cate = $request->cate;
    	$product->save();
        $request->img->storeAs('avatar', $filename);
        $request->img1->storeAs('avatar', $filename1);
    	$request->img2->storeAs('avatar', $filename2);
    	return back()->with('error_thanhcong', 'Thêm Sản Phẩm Thành Công');;
    }
    
    public function getProdEdit($id)
    {
    	$data['prodlist'] = Product::find($id);
        $cate['catelist'] = Category::all();
    	return view('admin.editproduct', $data, $cate);
    }


    public function postProdEdit(Request $request,$id)
    {
        // $product = new Product;
        // $arr['product_name'] = $request->name;
        // $arr['product_slug'] = str_slug($request->name);
        // $arr['product_gia'] = $request->price;
        // $arr['product_giakhuyenmai'] = $request->price_km;
        // $arr['product_thanhphan'] = $request->thanhphan;
        // $arr['product_baohanh'] = $request->baohanh;
        // $arr['product_congdung'] = $request->congdung;
        // $arr['product_hdsd'] = $request->hdsd;
        // $arr['product_trangthai'] = $request->status;
        // $arr['prod_cate'] = $request->cate;
        // if($request->hasFile('img')){
        //     $img = $request->img->getClientOriginalName();
        //     $img = $request->img1->getClientOriginalName();
        //     $img = $request->img2->getClientOriginalName();
        //     $arr['product_img'] = $img;
        //     $arr['product_img1'] = $img1;
        //     $arr['product_img2'] = $img2;
        //     $request->img->storeAs('avatar'.$img);
        //     $request->img1->storeAs('avatar'.$img1);
        //     $request->img2->storeAs('avatar'.$img2);
        // }
        // $product::where('prod_id', $id)->update($arr);
        // return redirect('admin/product');
        $filename = $request->img->getClientOriginalName();
        $filename1 = $request->img1->getClientOriginalName();
        $filename2 = $request->img2->getClientOriginalName();
        $product = Product::find($id);
        $product->product_name = $request->name;
        $product->product_slug = str_slug($request->name);
        $product->product_gia = $request->price;
        $product->product_giakhuyenmai = $request->price_km;
        $product->product_img = $filename;
        $product->product_img1 = $filename1;
        $product->product_img2 = $filename2;
        $product->product_thanhphan = $request->thanhphan;
        $product->product_baohanh = $request->baohanh;
        $product->product_congdung = $request->congdung;
        $product->product_hdsd = $request->hdsd;
        $product->product_trangthai = $request->status;
        $product->prod_cate = $request->cate;
        $product->save();
        $request->img->storeAs('avatar', $filename);
        $request->img1->storeAs('avatar', $filename1);
        $request->img2->storeAs('avatar', $filename2);
        return back()->with('error_thanhcong', 'Sửa Sản Phẩm Thành Công');;

    }
    public function getProdDelete($id)
    {
    	Product::destroy($id);
    	return back();
    }
}
