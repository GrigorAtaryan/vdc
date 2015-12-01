<?php

Route::get('home', 'WelcomeController@index');
Route::get('about', 'AboutController@get');
Route::get('partners', 'PartnersController@get');
Route::get('contact', 'ContactController@index');
Route::post('mail', 'ContactController@send_mail');
Route::get('product/{name}/{id}', 'ProductController');

Route::get('/', 'WelcomeController@index');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

Route::get('auth', 'Auth\AuthController@admin');
Route::get('auth/home', 'HomeController@index');

Route::get('auth/about', 'Auth\AboutController@index');
Route::post('update_about', 'Auth\AboutController@update_about');

Route::get('auth/partners', 'Auth\PartnersController@index');
Route::post('update_partners', 'Auth\PartnersController@update_partners');

Route::any('auth/allproducts', 'Auth\ProductsController@index');
Route::post('auth/add_category', 'Auth\ProductsController@add_category');
Route::get('auth/show_product/{id}', 'Auth\ProductsController@show_product');
Route::post('auth/add_subcategory/{id}', 'Auth\SubProductsController@add_sub_category');
Route::post('auth/subcategory/{id}', 'Auth\SubProductsController@add_sub_category');
Route::get('auth/products/{id}', 'Auth\AllProductsController@index');
Route::get('/auth/add_products/{id}', 'Auth\AllProductsController@index');
Route::post('/auth/add_products/{id}', 'Auth\AllProductsController@add_new_product');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
