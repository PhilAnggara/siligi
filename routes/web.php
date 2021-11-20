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
    Route::resource('master/data-kecamatan', 'KecamatanController');
    Route::resource('master/data-desa', 'DesaController');
    Route::get('master/peta/json', 'MainController@kirim_json');
    Route::resource('master/peta', 'PetaController');
    Route::resource('kegiatan/monev', 'MonevController');
    Route::resource('dokren/renstra', 'RenstraController');
    Route::get('rekap-kegiatan/export/', 'RekapKegiatanController@export')->name('export-rekap-kegiatan');
    Route::resource('rekap-kegiatan', 'RekapKegiatanController');
    Route::get('profil', 'MainController@profile')->name('profile');
    
});

require __DIR__.'/auth.php';
