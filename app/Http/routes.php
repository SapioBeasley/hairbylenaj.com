<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
  'as' => 'home',
  'uses' => 'HomesController@index'
]);

Route::get('/about', [
  'as' => 'about',
  'uses' => 'AboutsController@index'
]);

Route::get('/services', [
  'as' => 'services',
  'uses' => 'ServicesController@index'
]);

Route::get('styles', [
  'as' => 'styles',
  'uses' => 'StylesController@index'
]);

Route::get('systems', [
  'as' => 'systems',
  'uses' => 'SystemsController@index'
]);

Route::get('discover', [
  'as' => 'discover',
  'uses' => 'DiscoversController@index'
]);

Route::get('products', [
  'as' => 'products',
  'uses' => 'ProductsController@index'
]);

Route::get('contact', [
  'as' => 'contact',
  'uses' => 'ContactsController@index'
]);
