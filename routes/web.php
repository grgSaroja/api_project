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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/network', function () {
    return view('network');
})->name('network');

Route::get('/vibrate', function () {
    return view('vibrate');
})->name('vibrate');

Route::get('/battery', function () {
    return view('battery');
})->name('battery');

Route::get('/clipboard', function () {
    return view('clipboard');
})->name('clipboard');

Route::get('/onlineOffline', function () {
    return view('onlineOffline');
})->name('onoff');

Route::get('/geolocation', function () {
    return view('geolocation');
});

Route::get('/fullScreen', function () {
    return view('fullscreen');
});
