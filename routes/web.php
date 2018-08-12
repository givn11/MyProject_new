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
        })  ->name('dashboard');
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
        Route::get('logout', array(
            'as' => 'logout',
            function(){
                Auth::logout();
                Session::flush();
                return Redirect::route('home');
            }
        ));
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'UserController@getProfile')->name('user.profile');
});

/*Добавление товара в корзину,  где product_id - id товара из БД*/
Route::get('/add-to-cart/{product_id}', 'CartController@addToCart')->name('product.add');
Route::get('/shopping-cart/', [
    'uses' => 'CartController@getCart',
    'as' => 'product.shoppingCart'
]);
/*Страница оформления заказа*/
Route::get('/checkout', 'CheckoutController@getCheckout')->name('get.checkout');
Route::post('/checkout', 'CheckoutController@postCheckout')->name('post.checkout');

Route::get('/clear_cart', 'CartController@clearCart')->name('clear.cart');
Route::get('/reduce/{id}', [
    'uses' => 'CartController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);
Route::get('/increase/{id}', [
    'uses' => 'CartController@getIncreaseByOne',
    'as' => 'product.increaseByOne'
]);
Route::get('/remove/{id}', [
    'uses' => 'CartController@getRemoveItem',
    'as' => 'product.remove'
]);

// Категории
Route::get('/category/{alias}', 'CategoriesController@showCategoryByAlias')->name('client.category');
