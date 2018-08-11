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

/*Route::get('/', function () {
    return view('shop.index');
});*/

Auth::routes();

//Главная
Route::get('/', 'MainController@index')->name('home');
Route::get('/news', 'MainController@getNews')->name('news');

Route::group(['prefix' => 'dashboard'], function () {
    Route::group(['middleware' => 'auth'], function (){
        Route::get('/', function (){
            return view('dashboard.main');
        });
        Route::resource('/news', 'NewsController', array(
            /*    'only' => [
                    'index',
                    'create',
                    'store'
                ],*/
            /*      'middleware' => [
                      'store' => 'ResizeImage'
                  ]*/
        ));
        Route::resource('/categories', 'CategoriesController');
        Route::resource('/products', 'ProductController');
    });
});

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/dashboard', 'TestController@dashboard')->name('dashboard');
Route::group(['prefix' => 'test'], function (){
//Список
        Route::get('/index', 'TestController@index');
//Создание
        Route::get('/create', 'TestController@create');
        Route::get('/store', 'TestController@store');
//Обновление
        Route::get('/edit', 'TestController@edit');
        Route::get('/update', 'TestController@update');
//Удаление
        Route::get('/delete', 'TestController@delete');
    });
