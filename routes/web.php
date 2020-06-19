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
Route::get('/management','ManagementController@index')->name('management.index');

Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/show/{id}', 'NewsController@show')->name('news.show');
Route::get('/adminpanel/news/create', 'NewsController@create')->name('news.create');
Route::post('/newspost', 'NewsController@store')->name('news.store');
Route::get('/adminpanel/news/edit/{id}', 'NewsController@edit')->name('news.edit');
Route::patch('/news/update/{id}', 'NewsController@update')->name('news.update');

Route::get('/posts', 'PostsController@index')->name('articles.index');
Route::get('/posts/show/{id}', 'PostsController@show')->name('articles.show');
Route::get('/adminpanel/article/create', 'PostsController@create')->name('articles.create');
Route::post('/articlepost', 'PostsController@store')->name('articles.store');
Route::get('/adminpanel/article/edit/{id}', 'PostsController@edit')->name('articles.edit');
Route::patch('/article/update/{id}', 'PostsController@update')->name('articles.update');

Route::get('/engin', 'EnginController@index')->name('engin.index');
Route::get('/engin/show/{id}', 'EnginController@show')->name('engin.show');
Route::get('/adminpanel/engin/create', 'EnginController@create')->name('engin.create');
Route::post('/enginpost', 'EnginController@store')->name('engin.store');
Route::get('/adminpanel/engin/edit/{id}', 'EnginController@edit')->name('engin.edit');
Route::patch('/engin/update/{id}', 'EnginController@update')->name('engin.update');

Route::get('/search', 'NewsController@index')->name('posts.search');
Route::get('/', 'MainController@index')->name('main.index');

Auth::routes();

Route::get('/adminpanel', 'HomeController@index')->name('adminpanel');
