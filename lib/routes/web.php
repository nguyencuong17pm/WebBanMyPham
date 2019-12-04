<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@getHome');
Route::get('product','FrontendController@getProduct');
Route::get('productkhuyenmai','FrontendController@getProductkhuyenmai');

Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');
Route::post('detail/{id}/{slug}.html', 'FrontendController@postDetail');

Route::get('category/{id}/{slug}.html', 'FrontendController@getCate');

Route::get('contact', 'FrontendController@getContact');

Route::get('search', 'FrontendController@getSearch');

Route::group(['prefix'=>'card'],function(){
	Route::get('add/{id}','CartController@getAddCart');

});

// Route::get('dangki', 'FrontendController@getregister');

// Route::post('dangki','FrontendController@postregister');

// Route::get('dangnhap', 'FrontendController@getlogin');

// Route::post('dangnhap','FrontendController@postlogin');

// Route::get('dangxuat','FrontendController@getdangxuat');

// Route::get('thongtin','FrontendController@getthongtin');

Route::post('comment/{id}','FrontendController@postComment');

Route::group(['prefix'=>'cart'], function(){
	Route::get('add/{id}', 'CartController@getAddCart');
	Route::get('show', 'CartController@getShowCart');
	Route::post('show', 'CartController@postComtplete');
	Route::get('delete/{id}', 'CartController@getCartDelete');
	Route::get('update', 'CartController@getUpdateCart');
	Route::get('complete', 'CartController@getComplete');
});

Route::group(['namespace'=>'admin'], function(){
	Route::group(['prefix'=>'login'], function(){
		Route::get('/', 'LoginController@getLogin');
		Route::post('/', 'LoginController@postLogin');
	});

	Route::get('logout', 'LoginController@getLogout');
	Route::get('resetpassword/{id}', 'LoginController@getResetpassword');
	Route::post('resetpassword/{id}', 'LoginController@postResetpassword');

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedIn'], function(){
		Route::get('home', 'HomeController@getHome');

		Route::group(['prefix'=>'category'], function(){
			Route::get('/', 'CategoryController@getCate');
			Route::post('/', 'CategoryController@postCate');

			Route::get('edit/{id}', 'CategoryController@getCateEdit');
			Route::post('edit/{id}', 'CategoryController@postCateEdit');

			Route::get('delete/{id}', 'CategoryController@getCateDelete');

		});


		Route::group(['prefix'=>'comment'], function(){
			Route::get('/', 'CommentController@getCom');
			Route::get('kiemduyet/{id}','CommentController@getkiemduyet');
			Route::post('kiemduyet/{id}','CommentController@postkiemduyet');
			Route::get('delete/{id}','CommentController@getdeletekiemduyet');

		});

		Route::group(['prefix'=>'slide'], function(){
			Route::get('/', 'SlideController@getSlide');

			Route::get('add', 'SlideController@getAddSlide');
			Route::post('add', 'SlideController@postAddSlide');

			Route::get('editslide/{id}', 'SlideController@geteditSlide');
			Route::post('editslide/{id}', 'SlideController@posteditSlide');

			Route::get('delete/{id}', 'SlideController@getdeleteSlide');
		});

		Route::group(['prefix'=>'user'], function(){
			Route::get('/', 'UserController@getuser');

			// Route::get('add', 'UserController@getAdduser');
			// Route::post('add', 'UserController@postAdduser');

			// Route::get('editslide/{id}', 'UserController@getedituser');
			// Route::post('editslide/{id}', 'UserController@postedituser');

			// Route::get('delete/{id}', 'UserController@getdeleteuser');
		});


		Route::group(['prefix'=>'bill'], function(){
			Route::get('/', 'BillController@getBill');

			Route::get('edit/{id}', 'BillController@getEditBill');
			Route::post('edit/{id}', 'BillController@postEditBill');

			Route::get('delete/{id}', 'BillController@getDelete');
		});

		Route::group(['prefix'=>'product'], function(){
			Route::get('/', 'ProductController@getProd');

			Route::get('add', 'ProductController@getProdAdd');
			Route::post('add', 'ProductController@postProdAdd');

			// Route::get('addkhuyenmai', 'ProductController@getProdAddKhuyenmai');
			// Route::post('addkhuyenmai', 'ProductController@postProdAddKhuyenmai');

			Route::get('edit/{id}', 'ProductController@getProdEdit');
			Route::post('edit/{id}', 'ProductController@postProdEdit');

			// Route::get('editkhuyenmai/{id}', 'ProductController@getProdEditKhuyenmai');
			// Route::post('editkhuyenmai/{id}', 'ProductController@postProdEditKhuyenmai');

			Route::post('/','ProductController@postProd');

			Route::get('delete/{id}', 'ProductController@getProdDelete');
		});
	});
});
