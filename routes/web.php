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


Auth::routes();

Route::get('/','PagesController@index')->name('KKOO');
Route::get('/about','PagesController@about')->name('About');
Route::get('/contacts','PagesController@contacts')->name('contacts');
Route::get('/help','PagesController@help')->name('help');



Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('news', 'PostController');

//Product controller
Route::resource('products','ProductController');
Route::post('products/{id}','ProductController@cost');

//Route::get('categories/{id}/subcategories/{sub_id}/products','ProductController@index');
//Route::get('categories/{id}/subcategories/{sub_id}/products/create','ProductController@create');
//Route::post('categories/{id}/subcategories/{sub_id}/products/create','ProductController@store');
//Route::get('categories/{id}/subcategories/{sub_id}/products/{prod_id}','ProductController@show');




//Categories controller

Route::resource('categories','CategoriesController');

//reachable places
Route::resource('reachableplaces','ReachablePlacesController');


//Subcateg
Route::get('categories/{id}/subcategories','SubCategoriesController@index');
Route::get('categories/{id}/subcategories/create','SubCategoriesController@create');
Route::post('categories/{id}/subcategories/create','SubCategoriesController@store');
Route::get('categories/{id}/subcategories/edit','SubCategoriesController@edit');
Route::get('categories/{id}/subcategories/{sub_id}','SubCategoriesController@show')->name('categories.subcategories.show');
Route::patch('categories/{id}/subcategories/edit','SubCategoriesController@update');

//dimension

Route::resource('dimensions','DimensionsProductController');

//cart
Route::get('cart','CartController@index');
Route::get('cart/show','CartController@show');
Route::get('products/{id}/cart/create','CartController@create');
Route::post('products/{id}/cart/create','CartController@store');
Route::get('products/{id}/cart/edit','CartController@edit');
Route::patch('products/{id}/cart/edit','CartController@update');


//photo upload
Route::resource('photos', 'PhotoController');

//payment modes
Route::resource('paymentmodes','PaymentModeController');

//customer's details
Route::get('customerdetails','CustomersDetailsController@index');
Route::get('customerdetails/create','CustomersDetailsController@create');
Route::post('customerdetails/create','CustomersDetailsController@store');
Route::get('customerdetails/edit','CustomersDetailsController@edit');
Route::get('customerdetails/show','CustomersDetailsController@show');
Route::patch('customerdetails/edit','CustomersDetailsController@update');

//order's details
Route::get('orders','OrderController@index');
Route::get('orders/create','OrderController@create');
Route::post('orders/create','OrderController@store');
Route::get('orders/edit','OrderController@edit');
Route::patch('orders/edit','OrderController@update');
Route::get('orders/kkoo','OrderController@kkoo');

