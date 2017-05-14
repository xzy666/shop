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

Route::group(['middleware'=>'browser.tag'],function(){

    Route::get('/', 'HomeController@index');
    Route::get('product/{categoryId}', 'ProductController@index')->where('categoryId','\d+');
    Route::get('product/detail/{productId}', 'ProductController@detail')->where('productId','\d+');
    Route::post('cart/add', 'CartController@add');
    Route::get('cart/info', 'CartController@info');
    Route::get('cart/index', 'CartController@index');
    Route::post('cart/update', 'CartController@update');

});


//后台登录相关功能
Auth::routes();

//后台路由组
Route::group(['middleware'=>'auth'], function(){

    //后台首页
    Route::get('admin', 'Admin\DefaultController@index');

    Route::get('admin/category', 'Admin\CategoryController@index');

    //新增分类界面
    Route::get('admin/category/create', 'Admin\CategoryController@create');
    //执行新增保数据库
    Route::post('admin/category/create', 'Admin\CategoryController@doCreate');
    //修改分类界面
    Route::get('admin/category/update/{id}', 'Admin\CategoryController@update')->where(['id'=>'[0-9]+']);
    //执行修改保数据库
    Route::post('admin/category/update/{id}', 'Admin\CategoryController@doUpdate')->where(['id'=>'[0-9]+']);
    //删除分类
    Route::post('admin/category/delete', 'Admin\CategoryController@delete')->where(['id'=>'[0-9]+']);

    //商品管理
    Route::resource('admin/product', 'Admin\ProductController');

});

