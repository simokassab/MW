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

Route::get('/', 'SliderController@index');
Route::get('/product', 'PagesController@product');
Route::get('/slider', 'PagesController@slider');
Route::get('/new', 'PagesController@new');
Route::get('/partner', 'PagesController@partner');
Route::get('/operator', 'PagesController@operator');

Route::post('/slider/save', 'SliderController@store');
Route::post('/slider/{id}/update', 'SliderController@update');
Route::get('/slider/create', 'SliderController@create');
Route::get('/slider/delete/{id}', 'SliderController@destroy');

Route::post('/product/save', 'ProductsController@store');
Route::post('/product/{id}/update', 'ProductsController@update');
Route::get('/product/create', 'ProductsController@create');
Route::get('/product/delete/{id}', 'ProductsController@destroy');

Route::post('/new/save', 'NewsController@store');
Route::post('/new/{id}/update', 'NewsController@update');
Route::get('/new/create', 'NewsController@create');
Route::get('/new/delete/{id}', 'NewsController@destroy');

Route::post('/partner/save', 'PartnersController@store');
Route::post('/partner/{id}/update', 'PartnersController@update');
Route::get('/partner/create', 'PartnersController@create');
Route::get('/partner/delete/{id}', 'PartnersController@destroy');

Route::post('/operator/save', 'OperatorsController@store');
Route::post('/operator/{id}/update', 'OperatorsController@update');
Route::get('/operator/create', 'OperatorsController@create');
Route::get('/operator/delete/{id}', 'OperatorsController@destroy');

Route::resource('/slider', 'sliderController');
Route::resource('/product', 'ProductsController');
Route::resource('/new', 'NewsController');
Route::resource('/partner', 'PartnersController');
Route::resource('/operator', 'OperatorsController');

Auth::routes();
