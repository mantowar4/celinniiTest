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

Route::get('/contactus','ContactController@index')->name('contacts.index');
Route::get('/working','WorkingController@index')->name('working.index');
Route::get('/organization','OrgController@index')->name('org.index');
Route::get('/history','HistoryController@index')->name('history.index');
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/show/{id}', 'NewsController@show')->name('news.show');
Route::get('/search', 'NewsController@index')->name('posts.search');
Route::get('/engin', 'EnginController@index')->name('engin.index');
Route::get('/engin/show/{id}', 'EnginController@show')->name('engin.show');
Route::get('/', 'MainController@index')->name('main.index');
