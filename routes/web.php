<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MedisController;
use App\Models\dokter;
use App\Models\pasien;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/rekammedis', [MedisController::class, 'riwayat']);

Route::get('/form', [FormController::class, 'input']);
Route::post('/rekammedis', [FormController::class, 'proses']);


Route::get('/pasien', function () {
    return view('pasien', [
        'title' =>'Daftar Pasien',
        'NamaPasien' => pasien::all()
    ]);
});

Route::get('/dokter', function () {
    return view('dokter', [
        'title' =>'Daftar Dokter',
        'NamaDokter' => dokter::all()
    ]);
});
require __DIR__.'/auth.php';
