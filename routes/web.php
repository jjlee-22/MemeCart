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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/service', 'PagesController@service');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/products', 'ProductsController@index');
Route::resource('products', 'ProductsController');

Route::get('/cart', 'CartController@index');
Route::post('emptycart', 'CartController@emptycart')->name('Overall.emptycart');
Route::post('removeitem/{id}', 'CartController@removeitem')->name('Overall.removeitem');
Route::post('addToCart/{id}/{name}/{quantity}/{price}', 'CartController@addToCart')->name('Overall.addToCart');
Route::post('updatecart/{id}', 'CartController@updatecart')->name('Overall.updatecart');

Route::resource('cart', 'CartController');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/products', 'AdminProductsController@index');
Route::resource('admin/products', 'AdminProductsController');

Route::get('/admin/posts', 'AdminPostsController@index');
Route::resource('admin/posts', 'AdminPostsController');

Route::get('/checkout', 'CheckoutController@index');
Route::get('confirm', 'CheckoutController@confirm')->name('Overall.confirm');
Route::resource('checkout', 'CheckoutController');