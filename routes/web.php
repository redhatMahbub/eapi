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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin route
Route::group(['as' => 'admin.', 'namespace' => 'admin', 'prefix' => 'admin', 'middleware' => ['auth','admin']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('menu','MenuController');
    Route::resource('category','CategoryController');
});

// author route
Route::group(['as' => 'author.', 'namespace' => 'author', 'prefix' => 'author', 'middleware' => ['auth','author']],function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

// page route
Route::group(['as' => 'page','namespace' => 'pages'],function (){
    Route::get('about','PageController@getPage');
});