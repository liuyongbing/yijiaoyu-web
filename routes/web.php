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
//关于我们
Route::resource('about', 'AboutController');
//创始人
Route::resource('boss', 'BossController');
//创始人
Route::resource('home', 'HomeController');
//资讯
Route::resource('news', 'NewsController');
