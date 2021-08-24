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

Route::group(['middleware' => 'guest'], function () {
    // Register page
    Route::livewire('/register', 'auth.register')->layout('layouts.app')->name('auth.register');
    // login page
    Route::livewire('/login', 'auth.login')->layout('layouts.app')->name('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    // dashboard page
    Route::livewire('/admin/dashboard', 'admin.dashboard')->layout('layouts.app')->name('admin.dashboard');
});
