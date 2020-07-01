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

Route::get('/', function () {
    return redirect()->route('main.index', app()->getLocale());
});

Route::group([
    /*
    'prefix' => '{locale?}',
    'where' => ['locale' => '^ru|kz$'],
    */
    'middleware' => 'setlocale'], function() {

    Route::get('/', 'MainController@index')->name('main.index');
    Route::get('/contactus','ContactController@index')->name('contacts.index');
    Route::get('/working','WorkingController@index')->name('working.index');
    Route::get('/history','HistoryController@index')->name('history.index');
    Route::get('/management','ManagementController@index')->name('management.index');

    Route::get('/news', 'NewsController@index')->name('news.index');
    Route::get('/adminpanel/news/create', 'NewsController@create')->name('news.create');
    Route::post('/newspost', 'NewsController@store')->name('news.store');
    Route::get('/adminpanel/news/edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::patch('/news/update/{id}', 'NewsController@update')->name('news.update');
    Route::get('/shows/{id}', 'NewsController@show')->name('news.show');
    Route::delete('/news/delete/{id}', 'NewsController@destroy')->name('news.delete');

    Route::get('/posts', 'PostsController@index')->name('articles.index');
    Route::get('/posts/show/{id}', 'PostsController@show')->name('articles.show');
    Route::get('/adminpanel/article/create', 'PostsController@create')->name('articles.create');
    Route::post('/articlepost', 'PostsController@store')->name('articles.store');
    Route::get('/adminpanel/article/edit/{id}', 'PostsController@edit')->name('articles.edit');
    Route::patch('/article/update/{id}', 'PostsController@update')->name('articles.update');
    Route::delete('/article/delete/{id}', 'PostsController@destroy')->name('articles.delete');

    Route::get('/engin', 'EnginController@index')->name('engin.index');
    Route::get('/engin/show/{id}', 'EnginController@show')->name('engin.show');
    Route::get('/adminpanel/engin/create', 'EnginController@create')->name('engin.create');
    Route::post('/enginpost', 'EnginController@store')->name('engin.store');
    Route::get('/adminpanel/engin/edit/{id}', 'EnginController@edit')->name('engin.edit');
    Route::patch('/engin/update/{id}', 'EnginController@update')->name('engin.update');
    Route::delete('/engin/delete/{id}', 'EnginController@destroy')->name('engin.delete');

    Route::get('/organization','OrgController@index')->name('org.index');
    Route::get('/organization/show/{id}','OrgController@show')->name('org.show');

    Route::get('/search', 'MainController@search')->name('posts.search');

    Auth::routes();

    Route::get('/adminpanel', 'AdminController@index')->name('adminpanel');

    Route::get('setlocale/{locale}', function ($locale) {
        if (in_array($locale, \Illuminate\Support\Facades\Config::get('app.locales'))) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    })->name('lang.change');
});





