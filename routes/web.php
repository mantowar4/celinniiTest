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

Route::get('/working','WorkingController@index')->name('working.index');
Route::get('/organization','OrgController@index')->name('org.index');
Route::get('/history','HistoryController@index')->name('history.index');
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/show/{id}', 'NewsController@show')->name('news.show');
Route::get('/posts', 'NewsController@index')->name('posts.search');
Route::get('/', 'MainController@index')->name('main.index');
