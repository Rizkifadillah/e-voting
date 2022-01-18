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
    return redirect('login');
});

Route::get('keluar',function(){
    \Auth::logout();
    return redirect('/');
});


Route::group(['middleware' => 'auth'], function(){

    Route::get('beranda', [App\Http\Controllers\Dashboard\BerandaController::class, 'index']);
    // Route::get('beranda', [App\Http\Controllers\Dashboard\BerandaController::class, 'grafik']);

    //mahasiswa
    Route::get('mahasiswa', [App\Http\Controllers\Dashboard\MahasiswaController::class, 'index']);
    Route::get('mahasiswa/add', [App\Http\Controllers\Dashboard\MahasiswaController::class, 'add']);
    Route::post('mahasiswa/add', [App\Http\Controllers\Dashboard\MahasiswaController::class, 'store']);

    Route::get('mahasiswa/{id}', [App\Http\Controllers\Dashboard\MahasiswaController::class, 'edit']);
    Route::put('mahasiswa/{id}', [App\Http\Controllers\Dashboard\MahasiswaController::class, 'update']);

    Route::get('mahasiswa/{id}/delete', [App\Http\Controllers\Dashboard\MahasiswaController::class, 'delete']);

    //kandidat
    Route::get('kandidat', [App\Http\Controllers\Dashboard\KandidatController::class, 'index']);
    Route::get('kandidat/add', [App\Http\Controllers\Dashboard\KandidatController::class, 'add']);
    Route::post('kandidat/add', [App\Http\Controllers\Dashboard\KandidatController::class, 'store']);

    Route::get('kandidat/view/{id}', [App\Http\Controllers\Dashboard\KandidatController::class, 'show']);

    Route::get('kandidat/{id}', [App\Http\Controllers\Dashboard\KandidatController::class, 'edit']);
    Route::put('kandidat/{id}', [App\Http\Controllers\Dashboard\KandidatController::class, 'update']);

    Route::get('kandidat/{id}/delete', [App\Http\Controllers\Dashboard\KandidatController::class, 'delete']);

    Route::get('pemilihan', [App\Http\Controllers\Dashboard\PemilihanController::class, 'index']);
    Route::get('pemilihan/get-visi/{id}', [App\Http\Controllers\Dashboard\PemilihanController::class, 'get_visi']);
    Route::get('pemilihan/vote/{id}', [App\Http\Controllers\Dashboard\PemilihanController::class, 'voting']);

    Route::get('periode', [App\Http\Controllers\Dashboard\PeriodeController::class, 'index']);
    Route::post('periode', [App\Http\Controllers\Dashboard\PeriodeController::class, 'set_periode']);

});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    // $title = 'PPDB::online';
    return redirect('beranda');
});
