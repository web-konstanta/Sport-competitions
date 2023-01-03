<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Site'], function() {
    Route::get('/', 'IndexController')->name('site.index');
    Route::post('/', 'StoreController')->name('site.store');
});
Route::group(['namespace' => 'User', 'prefix' => 'user'], function() {
    Route::get('/register', 'IndexController')->name('user.index');
    Route::post('/register', 'RegisterController')->name('user.register');
    Route::get('/login', 'LoginController')->name('user.login');
    Route::post('/login', 'AuthController')->name('user.auth');
    Route::get('/logout', 'LogoutController')->name('user.logout');
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'IndexController')->name('admin.index');
    Route::get('/edit/{customer}', 'EditController')->name('admin.edit');
    Route::patch('/edit/{customer}', 'UpdateController')->name('admin.update');
    Route::delete('/delete/{customer}', 'DestroyController')->name('admin.destroy');
});
