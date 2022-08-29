<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('posts', 'Api\PostController@index')->name('post');
Route::get('posts/{post}', 'Api\PostController@show')->name('post.show');
Route::post('posts/{post/like}', 'Api\PostController@like')->name('post.like');

