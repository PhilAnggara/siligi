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
    Route::resource('pagu-anggaran/rka', 'PaguRkaController');
    Route::resource('pagu-anggaran/dpa', 'PaguDpaController');
    Route::resource('pagu-anggaran/pergeseran', 'PaguPergeseranController');
    Route::resource('dokren/renstra', 'RenstraController');
    Route::resource('musrembang', 'MusrembangController');
    Route::get('rekap-kegiatan/export/', 'RekapKegiatanController@export')->name('export-rekap-kegiatan');
    Route::resource('rekap-kegiatan', 'RekapKegiatanController');
    Route::get('profil', 'MainController@profile')->name('profile');
    Route::put('profil/update', 'MainController@updateProfile')->name('profile-update');
    Route::put('profil/upload', 'MainController@uploadProfile')->name('profile-upload');
    Route::put('profil/hapus', 'MainController@hapusProfile')->name('profile-hapus');
    
});

require __DIR__.'/auth.php';
