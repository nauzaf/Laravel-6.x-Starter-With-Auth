<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('view.login');

// Auth Controller
Route::post('/login', 'Auth\LoginController@login')->name('post.login');
Route::post('/logout', 'Auth\LoginController@logout')->name('post.logout');

// Authorized View
Route::middleware(['auth', 'role:super_admin'])->group(function (){

    Route::get('/home', function(){return view('home');})->name('home');

});
