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

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('trang-chu','UserController@getTrangChu');
//Login
Route::get('admin-login','LoginController@getAminLogin');
Route::get('user-login','LoginController@getUserLogin');

Route::post('admin-login', 'LoginController@postAdminLogin');
Route::post('user-login', 'LoginController@postUserLogin');
//Danh saach bai viet
Route::get('author-bai-viet','UserController@getAuthorBaiViet');
Route::get('admin-bai-viet','UserController@getAdminBaiViet');
//Bai viet
Route::get('author-bai-viet/xoa/{id_tintuc}','UserController@getAuthorBaiVietXoa');

Route::get('author-bai-viet/themmoi','UserController@getAuthorBaiVietThem');
Route::post('author-bai-viet/themmoi','UserController@postAuthorBaiVietThem');

Route::get('author-bai-viet/sua/{id}','UserController@getAuthorBaiVietSua');
Route::post('author-bai-viet/sua/{id}','UserController@postAuthorBaiVietSua');

Route::get('admin-bai-viet/duyet/{id_tintuc}','UserController@getAdminBaiVietDuyet');


