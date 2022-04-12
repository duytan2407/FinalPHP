<?php

use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ThongkeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);
Route::get('loai-san-pham/{type}',[
    'as'=>'loaisanpham',
    'uses'=>'PageController@getLoaiSp'
]);
Route::get('chitiet-sanpham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChitiet'
]);
Route::get('lien-he',[
    'as'=>'lienhe',
    'uses'=>'PageController@getLienHe'
]);
Route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@getGT'
]);
/***********/
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@getCheckout'
]);

Route::post('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@postCheckout'
]);

Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@getLogin'
]);
Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);

Route::get('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@postSignin'
]);

Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/danhmuc', DanhmucController::class);
Route::resource('/khachhang', UserController::class);
Route::resource('/donhang', OrderController::class);
Route::resource('/thongke', ThongkeController::class);
