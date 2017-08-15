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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

//Product controller

Route::resource('products','ProductController');

//Categories controller

Route::resource('categories','CategoriesController');

//Subcateg

Route::resource('subcategories','SubCategoriesController');

Route::get('categories/{id}/subcategories/create','SubCategoriesController@create');
Route::post('categories/{id}/subcategories/create','SubCategoriesController@store');
Route::get('categories/{id}/subcategories/edit','SubCategoriesController@edit');
Route::get('categories/{id}/subcategories/show','SubCategoriesController@show');
Route::patch('categories/{id}/subcategories/edit','SubCategoriesController@update');