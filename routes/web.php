<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', function(){
    return view('about');
});
Route::get('/articles/user', 'ArticleController@user');
Route::get('/articles/view/{id}', 'ArticleController@show');
Route::get('/articles/create', 'ArticleController@create');
Route::post('/articles/post', 'ArticleController@store');
Route::post('/articles/delete/{id}', 'ArticleController@destroy');
Route::get('/articles/manage', 'ArticleController@index');
Route::get('/categories/{category}', 'ArticleController@category');
Route::get('/users', 'UserController@index');
Route::get('/profile', 'UserController@profile');
Route::post('/users/delete/{id}', 'UserController@destroy');
Route::post('/users/update/{id}', 'UserController@update');
