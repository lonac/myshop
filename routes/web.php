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

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

//Product controller

Route::resource('products','ProductController');

//Categories controller

Route::resource('categories','CategoriesController');

//Subcateg
Route::get('categories/{id}/subcategories','SubCategoriesController@index');
Route::get('categories/{id}/subcategories/create','SubCategoriesController@create');
Route::post('categories/{id}/subcategories/create','SubCategoriesController@store');
Route::get('categories/{id}/subcategories/edit','SubCategoriesController@edit');
Route::get('categories/{id}/subcategories/{sub_id}','SubCategoriesController@show');
Route::patch('categories/{id}/subcategories/edit','SubCategoriesController@update');

//dimension

Route::resource('dimensions','DimensionsProductController');