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
use App\TheLoai;
Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dangnhap','UserController@getDangnhapAdmin');
Route::post('admin/dangnhap','UserController@postDangnhapAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin');

Route::group(['prefix'=>'admin'],function(){
	route::group(['prefix'=>'theloai'],function(){
		route::get('danhsach','TheLoaiController@getDanhSach');

		route::get('sua/{id}','TheLoaiController@getSua');
		route::post('sua/{id}','TheLoaiController@postSua');

		route::get('them','TheLoaiController@getThem');
		route::post('them','TheLoaiController@postThem');

		route::get('xoa/{id}','TheLoaiController@getXoa');


	});

	route::group(['prefix'=>'loaitin'],function(){
		route::get('danhsach','LoaiTinController@getDanhSach');

		route::get('sua/{id}','LoaiTinController@getSua');
		route::post('sua/{id}','LoaiTinController@postSua');

		route::get('them','LoaiTinController@getThem');
		route::post('them','LoaiTinController@postThem');

		route::get('xoa/{id}','LoaiTinController@getXoa');

	});

		route::group(['prefix'=>'tintuc'],function(){
		route::get('danhsach','TinTucController@getDanhSach');

		route::get('sua/{id}','TinTucController@getSua');
		route::post('sua/{id}','TinTucController@postSua');
		

		route::get('them','TinTucController@getThem');
		route::post('them','tintucController@postThem');

		route::get('xoa/{id}','TinTucController@getXoa');

	});

		route::group(['prefix'=>'silde'],function(){
		route::get('danhsach','SlideController@getDanhSach');

		route::get('sua/{id}','SlideController@getSua');
		route::post('sua/{id}','SlideController@postSua');
		

		route::get('them','SlideController@getThem');
		route::post('them','SlideController@postThem');

		route::get('xoa/{id}','SlideController@getXoa');

	});

		route::group(['prefix'=>'comment'],function(){
		route::get('xoa/{id}/{idTinTuc}','CommentController@getXoa');

	});


		route::group(['prefix'=>'ajax'],function(){
		route::get('loaitin/{idTheLoai}','AjaxController@getLoaiTin');
	});

		route::group(['prefix'=>'user'],function(){
		route::get('danhsach','UserController@getDanhSach');

		route::get('sua/{id}','UserController@getSua');
		route::post('sua/{id}','UserController@postSua');
		

		route::get('them','UserController@getThem');
		route::post('them','UserController@postThem');

		route::get('xoa/{id}','UserController@getXoa');

	});
		

});




route::get('trangchu','pagecontroller@trangchu');
route::get('lienhe','pagecontroller@lienhe');
route::get('loaitin/{id}/{TenKhongDau}.html','pagecontroller@loaitin');
route::get('tintuc/{id}/{TieuDeKhongDau}.html','pagecontroller@tintuc');
route::get('dangnhap','pagecontroller@getDangnhap');
route::post('dangnhap','pagecontroller@postDangnhap');
route::get('gioithieu','pagecontroller@gioithieu');
route::get('dangky','pagecontroller@getDangky');
route::post('dangky','pagecontroller@postDangky');
route::get('dangxuat','pagecontroller@getDangxuat');
route::get('nguoidung','pagecontroller@getNguoidung');
route::post('nguoidung','pagecontroller@postNguoidung');
route::post('timkiem','pagecontroller@timkiem');

route::post('comment/{id}','Commentcontroller@postComment');
