<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'FrontEndController@index');

Route::get('/properties/1', 'FrontEndController@propertyDetails');
Route::get('/search', 'FrontEndController@search');


Route::group(['prefix' => 'agent'], function () {
    Route::get('/', 'FrontEndController@profile');
    Route::patch('/', 'FrontEndController@profileUpdate');
    Route::get('/dashboard', 'FrontEndController@dashboard');

    Route::get('/properties', 'FrontEndController@allProperties');
    Route::get('/properties/add', 'FrontEndController@add');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', 'AdminController@index');
    Route::resource('/slides', 'Admin\SliderController');
    Route::resource('/popups', 'Admin\PopupController');
});


Auth::routes();
