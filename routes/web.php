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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', 'ProfileController@index')->name('profile');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'u'], function () {
    Route::get('{username}', 'ProfileController@show');
});

Route::group(['prefix' => 'l'], function () {
    Route::get('{guid}', 'LinkController@link');
});

require __DIR__ . '/auth.php';
