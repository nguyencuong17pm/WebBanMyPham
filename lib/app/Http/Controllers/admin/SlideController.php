<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Http\Requests\AddCateRequest;

class SlideController extends Controller
{
    //
    public function getSlide(){
    	$slide = Slide::all();
    	return view('admin.slide',$slide);
    }

    public function getAddSlide(){
    	return view('admin.addslide');
    }

    public function postAddSlide(AddCateRequest $request){
    	$file = $request->img->getClientOriginalName();
    	$slide = new Slide;
    	$slide->s_name = $request->name;
    	$slide->s_name2 = $request->name2;
    	$slide->s_img = $file;
    	if($request->has('s_link'))
    		$slide->s_link = $request->lienket;
    	$slide->save();
    	$request->img->storeAs('avatar', $file);
    	return back();
    }

   public function geteditSlide($id){
   	$slide['slide'] = Slide::find($id);
   	return view('admin.editslide',$slide);
   }

    public function posteditSlide(AddCateRequest $request,$id){
		$file = $request->img->getClientOriginalName();
    	$slide = Slide::find($id);
    	$slide->S_name = $request->name;
    	$slide->s_name2 = $request->name2;
        $slide->s_img = $file;
        if($request->has('lienket'))
    		$slide->s_link = $request->lienket;
    	$slide->save();
        $request->img->storeAs('avatar', $file);
    	return redirect()->intended('admin/slide');
    }

    public function getdeleteSlide($id){
    	Slide::destroy($id);
    	return back();
    }
}
