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
Route::get('/', 'HomeController@home')->name("home");

// 关于我们
Route::get('/about', 'HomeController@about')->name("about");

//  联系我们
Route::get('/contact', 'HomeController@contact')->name("ruzhu");

//  客户案例
Route::get('/customer', 'HomeController@customer')->name("customer");

//  新闻快报
Route::get('/new', 'HomeController@news')->name("news");

// 新闻详情
Route::get('/new/{id}','HomeController@newInfo')->name("newInfo");

// 提交用户的信息
Route::post('/post_user','HomeController@postUser')->name("postUser");

// 首页提交信息
Route::post('/post_Company','HomeController@postCompany')->name("postCompany");