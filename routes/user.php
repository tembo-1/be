<?php
namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

// user
Route::prefix('user')->group(function () {
    Route::get('posts', 'PostController@index')->name('user.posts');
    Route::get('posts/create', 'User\PostController@create')->name('user.posts.create');
    Route::get('posts/{post}', 'User\PostController@show')->name('user.posts.show');
    Route::get('posts/{post}/edit', 'User\PostController@edit')->name('user.posts.edit');
    Route::put('posts/{post}', 'User\PostController@update')->name('user.posts.update');
    Route::post('posts', 'User\PostController@store')->name('user.posts.store');
    Route::delete('posts/{post}', 'User\PostController@delete')->name('user.posts.delete');
    Route::put('posts/{post}/like', 'User\PostController@like')->name('user.posts.like');
});
