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

Route::get('/', 'BlogController@index');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/dashboard/user', 'UserController');
Route::resource('/dashboard/category', 'CategoryController');
Route::resource('/dashboard/tag', 'TagController');
Route::get('/dashboard/post/hapus', 'PostController@tampil_hapus');
Route::get('/dashboard/post/restore/{id}', 'PostController@restore');
Route::delete('/dashboard/post/kill/{id}', 'PostController@kill');
Route::resource('/dashboard/post', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
