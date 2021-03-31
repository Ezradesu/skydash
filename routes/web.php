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
Route::get('/soon', 'BlogController@soon');
Route::get('/about', 'BlogController@about');
Route::get('/blog', 'BlogController@blog_list');
Route::get('/blog/{slug}', 'BlogController@blog_isi');
Route::get('/blog/category/{category}', 'BlogController@list_category');
Route::get('akun/', 'BlogController@akun');
Route::patch('akun/{akun}', 'BlogController@update');

Route::get('/dashboard', 'HomeController@dashboard');

Route::resource('/dashboard/user', 'UserController');
Route::resource('/dashboard/category', 'CategoryController');
Route::resource('/dashboard/tag', 'TagController');
Route::get('/dashboard/post/hapus', 'PostController@tampil_hapus');
Route::get('/dashboard/post/restore/{id}', 'PostController@restore');
Route::delete('/dashboard/post/kill/{id}', 'PostController@kill');
Route::resource('/dashboard/post', 'PostController');
Route::resource('/dashboard/author/post', 'AuthorPostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');