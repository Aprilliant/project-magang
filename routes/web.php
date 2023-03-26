<?php

use App\Models\pegawai;
use App\Models\data_nasabah;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\PengugasanController;
use App\Http\Controllers\DataNasabahController;
use App\Http\Controllers\data_nasabahController;
use App\Http\Controllers\data_pegawaiController;
use App\Http\Controllers\penugasanController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

route::get('/app', function () {
    return view('layouts.apps');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/data_nasabah', [DataNasabahController::class, 'index'])->name('data_nasabah.index')->middleware('auth');

Route::get('/data_pegawai', [data_pegawaiController::class, 'index'])->name('data_pegawai.index')->middleware('auth');

// Route::get('/penugasan', [PengugasanController::class, 'index'])->middleware('auth');
Route::resource('/penugasan', penugasanController::class)->middleware('auth');
Route::get('/autocomplete-search', [PengugasanController::class, 'autocompleteSearch']);


route::get('/input-laporan', function () {
    return view('input-laporan', [
        'pegawai' => pegawai::all()

    ]);
})->middleware('auth');



Route::get('/get-nasabah', function () {
    $nasabah = DB::table('data_nasabah')->get();
    return response()->json($nasabah);
});




// route::get('/laporan', function () {
//     return view('hasil-laporan');
// });

route::get('/testing', function () {
    return view('testing');
});


Route::resource('/laporan', laporanController::class)->middleware('auth');