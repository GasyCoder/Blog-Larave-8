<?php

use Illuminate\Support\Facades\Route;


Route::get('post/create', \App\Http\Livewire\PostCreate::class);

Route::get('post/{slug}', \App\Http\Livewire\Post::class);

Route::get('/search/', \App\Http\Livewire\Post::class);

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('about', function (){
	return view('about');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
