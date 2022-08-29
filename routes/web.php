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

Route::get('register', 'RegisterController@index')->name('register');
Route::post('register', 'RegisterController@store')->name('register.store');

Route::get('login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@store')->name('login.store');

Route::get('blog', 'BlogController@index')->name('blog');
Route::get('blog/{post}', 'BlogController@show')->name('blog.show');
Route::post('blog/{post/like}', 'BlogController@like')->name('blog.like');


Route::resource('posts/{post}/comments', 'Posts\CommentController')->only([
    'index', 'show',
]);

Route::fallback(function () {
    return 'false';
});
