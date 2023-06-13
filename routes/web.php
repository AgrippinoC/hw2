<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ControllerWeb@home');

Route::get('login', 'App\Http\Controllers\ControllerLogin@login');
Route::post('login', 'App\Http\Controllers\ControllerLogin@login_post');
Route::get('logout', 'App\Http\Controllers\ControllerLogin@logout');
Route::get('signup', 'App\Http\Controllers\ControllerLogin@registro');
Route::post('signup', 'App\Http\Controllers\ControllerLogin@registro_post');
Route::get('signup/check/{field}', 'App\Http\Controllers\ControllerLogin@check');

Route::get('home', 'App\Http\Controllers\ControllerWeb@home');
Route::post('home/save_orange', 'App\Http\Controllers\ControllerWeb@arance');

Route::get('recipe', 'App\Http\Controllers\ControllerWeb@ricette');
Route::get('recipe/search_recipe', 'App\Http\Controllers\ControllerWeb@ricette_cerca');

Route::get('video', 'App\Http\Controllers\ControllerWeb@video');
Route::get('video/search_video', 'App\Http\Controllers\ControllerWeb@video_cerca');

Route::get('social', 'App\Http\Controllers\ControllerWeb@social');
Route::get('social/search_comment', 'App\Http\Controllers\ControllerWeb@commento_cerca');

Route::get('profile', 'App\Http\Controllers\ControllerWeb@profile');
Route::post('profile/save_comment', 'App\Http\Controllers\ControllerWeb@commento');
Route::get('profile/search_orange', 'App\Http\Controllers\ControllerWeb@arance_cerca');
