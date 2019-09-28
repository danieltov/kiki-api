<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/
Route::get('/category/{category}', 'CategoryController@all')->name('category.all');
Route::post('/category', 'CategoryController@store')->name('category.store');

/*
|--------------------------------------------------------------------------
| Topic Routes
|--------------------------------------------------------------------------
*/
Route::get('/topics/{topic}', 'TopicController@show')->name('topic.show');
Route::post('/topics', 'TopicController@store')->name('topic.store');
Route::put('/topics/{topic}', 'TopicController@update')->name('topic.update');
Route::delete('/topics/{topic}', 'TopicController@destroy')->name('topic.destory');