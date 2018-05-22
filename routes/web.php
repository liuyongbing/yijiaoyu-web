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
    return redirect(route('home.index'));
});
//About:关于我们
Route::resource('about', 'AboutController');
//Brand:品牌
Route::resource('brand', 'BrandController');
//Founder:创始人
Route::resource('founder', 'FounderController');
//Home:首页
Route::resource('home', 'HomeController');
//News:资讯
Route::resource('news', 'NewsController');
