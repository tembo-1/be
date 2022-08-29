<?php

use Illuminate\Support\Facades\Route;

// admin
Route::prefix('admin')->group(function () {
    Route::get('posts', 'Admin\PostController@index')->name('admin.posts');
    Route::get('posts/create', 'Admin\PostController@create')->name('admin.posts.create');
    Route::get('posts/{post}', 'Admin\PostController@show')->name('admin.posts.show');
    Route::get('posts/{post}/edit', 'Admin\PostController@edit')->name('admin.posts.edit');
    Route::put('posts/{post}', 'Admin\PostController@update')->name('admin.posts.update');
    Route::post('posts', 'Admin\PostController@store')->name('admin.posts.store');
    Route::delete('posts/{post}', 'Admin\PostController@delete')->name('admin.posts.delete');
    Route::put('posts/{post}/like', 'Admin\PostController@like')->name('admin.posts.like');
});
