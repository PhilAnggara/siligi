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

Route::middleware(['auth'])->group(function () {

    Route::get('/', 'MainController@index')->name('home');
    Route::resource('dokren/renstra', 'RenstraController');
    Route::resource('pagu-anggaran/monev', 'MonevController');
    
});

require __DIR__.'/auth.php';
