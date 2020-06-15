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
Route::get('/properties/{property}', 'FrontEndController@showProperty');
Route::get('/agents/{agent}', 'FrontEndController@showAgentProperties');
Route::get('/properties', 'FrontEndController@showProperties');
Route::get('/search', 'FrontEndController@search');


Route::group(['prefix' => 'agent'], function () {
    Route::get('/', 'FrontEndController@profile');
    Route::patch('/', 'FrontEndController@profileUpdate');
    Route::get('/dashboard', 'FrontEndController@dashboard');
    Route::resource('/properties', 'AgentPropertyController');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', 'AdminController@index');
    Route::resource('/slides', 'Admin\SliderController');
    Route::resource('/popups', 'Admin\PopupController');
    Route::resource('/properties', 'Admin\PropertyController');
    Route::resource('/articles', 'Admin\ArticleController');
    Route::resource('/events', 'Admin\EventController');
    Route::resource('/events-categories', 'Admin\EventCategoryController');
});


Auth::routes();
