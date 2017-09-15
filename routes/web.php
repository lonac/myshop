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
Route::get('/terms&conditions','PagesController@terms');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('news', 'PostController');

//admins
Route::resource('admins','AdminPanelController');

//Product controller
Route::resource('products','ProductController');
Route::post('products/{id}','ProductController@cost');

//Categories controller

Route::resource('categories','CategoriesController');

//reachable places
Route::get('reachableplaces','ReachablePlacesController@index');
Route::get('reachableplaces/create','ReachablePlacesController@create');
Route::post('reachableplaces/create','ReachablePlacesController@store');
Route::get('reachableplaces/{id}','ReachablePlacesController@show');
Route::get('reachableplaces/{id}/edit','ReachablePlacesController@edit');
Route::patch('reachableplaces/{id}/edit','ReachablePlacesController@update');


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

Route::resource('cart','CartController');
//Route::get('cart','CartController@index');
Route::get('products/{id}/cart/create','CartController@create');
Route::post('products/{id}/cart/create','CartController@store');
Route::get('products/{id}/cart/edit','CartController@edit');
Route::patch('products/{id}/cart/edit','CartController@update'); 


//photo upload
Route::resource('photos', 'PhotoController');

//payment modes
Route::resource('paymentmodes','PaymentModeController');


//order's details
Route::get('cart/{id}/orders','ProductOrderController@index');
Route::get('cart/{id}/orders/create','ProductOrderController@create');
Route::post('cart/{id}/orders/create','ProductOrderController@store');
Route::get('cart/{id}/orders/edit','ProductOrderController@edit');
Route::patch('cart/{id}/orders/edit','ProductOrderController@update');
Route::get('cart/{id}/orders/payments','ProductOrderController@payments');
Route::get('orders/kkoo','ProductOrderController@kkoo');


//shipping details
Route::get('cart/{id}/shippingaddress','ShippingAddressController@index');
Route::post('cart/{id}/shippingaddress','ShippingAddressController@destroy');
Route::get('cart/{id}/shippingaddress/create','ShippingAddressController@create');
Route::post('cart/{id}/shippingaddress/create','ShippingAddressController@store');
Route::get('cart/{id}/shippingaddress/edit','ShippingAddressController@edit');
Route::patch('cart/{id}/shippingaddress/edit','ShippingAddressController@update');


//search
Route::get('search',array('as'=>'search','uses'=>'SearchController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));

//phone details
Route::get('products/{id}/phonesdetails','PhoneDetailsController@index');
Route::get('products/{id}/phonesdetails/create','PhoneDetailsController@create');
Route::post('products/{id}/phonesdetails/create','PhoneDetailsController@store');
Route::get('products/{id}/phonesdetails/{phone_id}','PhoneDetailsController@show');
Route::post('products/{id}/phonesdetails/{phone_id}','PhoneDetailsController@destroy');
Route::get('products/{id}/phonesdetails/edit','PhoneDetailsController@edit');
Route::patch('products/{id}/phonesdetails/edit','PhoneDetailsController@update');

//products dimension category
Route::get('products/{id}/dimensions','ProductDimensionController@index');
Route::get('products/{id}/dimensions/create','ProductDimensionController@create');
Route::post('products/{id}/dimensions/create','ProductDimensionController@store');
Route::get('products/{id}/dimensions/{phone_id}','ProductDimensionController@show');
Route::post('products/{id}/dimensions/{phone_id}','ProductDimensionController@destroy');
Route::get('products/{id}/dimensions/edit','ProductDimensionController@edit');
Route::patch('products/{id}/dimensions/edit','ProductDimensionController@update');

//product State
Route::get('products/{id}/productstate','ProductStateController@index');
Route::get('products/{id}/productstate/create','ProductStateController@create');
Route::post('products/{id}/productstate/create','ProductStateController@store');
Route::get('products/{id}/productstate/edit','ProductStateController@edit');
Route::patch('products/{id}/productstate/edit','ProductStateController@update');