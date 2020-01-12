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

Route::get('/', 'HomeController@index');

Route::get('vehicle-license', 'HomeController@vehiclelicense');
Route::post('vehicle-license', 'HomeController@vehiclelicense_post');


Route::get('owner-license', 'HomeController@ownerlicense');
Route::post('owner-license', 'HomeController@ownerlicense_post');


Route::get('all-owner-license', 'HomeController@allownerlicense');
Route::get('all-vehicle-license', 'HomeController@allvehiclelicense');

Route::get('driving/{id}', 'HomeController@vehiclelicenseprint');
Route::get('owner/{id}', 'HomeController@ownerlicenseprint');

Route::get('all-owner-license', 'HomeController@allownerlicense');
Route::get('getownerdetals', 'HomeController@getownerdetals');
Route::post('update_owner/{id}', 'HomeController@update_owner');
Route::get('all-vehicle-license', 'HomeController@allvehiclelicense');
Route::get('licence_update', 'HomeController@licence_update');
Route::post('licence_update/{id}', 'HomeController@vehiclelicense_update');



