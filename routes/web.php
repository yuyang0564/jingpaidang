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

// 首页
Route::get('/', 'HomeController@home');


// 关于我们
Route::get('/about', 'HomeController@about')->name("about");


//  联系我们
Route::get('/contact', 'HomeController@contact')->name("ruzhu");


//  客户案例
Route::get('/customer', 'HomeController@customer')->name("customer");

//  查看新闻
Route::get('/new', 'HomeController@new')->name("news");