<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class UserController extends Controller
{
    //
    public function getuser(){
    	$user['users'] = Users::all();
    	return view('admin.user',$user);
    }
}
