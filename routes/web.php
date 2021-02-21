<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/post/create', [\App\Http\Controllers\PostsController::class, 'create'])->name('profile.create');
Route::post('/post', [\App\Http\Controllers\PostsController::class, 'store'])->name('profile.store');
Route::get('post/{post}',[Controllers\PostsController::class,'show']);


Route::get('profile/{user}/edit',[Controllers\ProfilesController::class,'edit'])->name('profile.edit');
Route::get('/profile/{user}', [\App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.index');
Route::patch('/profile/{user}', [\App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
