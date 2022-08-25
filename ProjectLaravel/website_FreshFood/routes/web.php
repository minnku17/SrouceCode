<?php

use Illuminate\Support\Facades\Route;

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
//Khách hàng: frontend
Route::get('/', 'HomeController@index');
Route::get('/trangchu', 'HomeController@index');
Route::get('/Cacsanpham', 'HomeController@LProduct');
Route::get('/ChitietSP', 'HomeController@PDetails');
Route::get('/Giohang', 'HomeController@Cart');
Route::get('/LienHe', 'HomeController@Constact');
Route::get('/Vechungtoi', 'HomeController@About');

//Admin: backend
//
Route::get('/admin/login', 'AdminController@loginPage');

Route::get('/admin', 'AdminController@index');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin/home', 'AdminController@admin_home');
///////////////////////////////////////////////////////////////////////////
Route::get('/add_category_product', 'CategoryProductController@add_category_product');
Route::get('/all_category_product', 'CategoryProductController@view_category_product');
Route::post('/LuuSP', 'CategoryProductController@save_category_product');

Route::get('/SuaSP/{category_product_id}','CategoryProductController@edit_category_product');
Route::get('/XoaSP/{category_product_id}', 'CategoryProductController@delete_category_product');
Route::post('/CapNhatSP/{category_product_id}','CategoryProductController@update_category_product');

