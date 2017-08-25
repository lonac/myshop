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
Route::get('products/{id}/cart/create','CartController@create');
Route::post('products/{id}/cart/create','CartController@store');

//photo upload
Route::resource('photos', 'PhotoController');

//payment modes
Route::resource('paymentmodes','PaymentModeController');


