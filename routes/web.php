<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualController;
use App\Http\Controllers\KeduaController;
use App\Http\Controllers\KeenamController;
use App\Http\Controllers\KelimaController;
use App\Http\Controllers\KetigaController;
use App\Http\Controllers\KeempatController;
use App\Http\Controllers\KetujuhController;
use App\Http\Controllers\PertamaController;
use App\Http\Controllers\KedelapanController;
use App\Http\Controllers\KesembilanController;

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

//route tanpa controller
Route::get('/Beranda', function () {
    echo ("Ini namanya beranda");
});

Route::get('/Profil', function () {
    echo ("Ini namanya Profil");
});

Route::get('/Profil/Sejarah', function () {
    echo ("Sejarah?");
});

Route::get('/Profil/Lambang', function () {
    echo ("Lambang?");
});

Route::get('/Fakultas', function () {
    echo ("Fakultas?");
});

Route::get('/Fakultas/Fakultas FKIP', function () {
    echo ("FKIP");
});

Route::get('/Fakultas/Fakultas Teknik', function () {
    echo ("Ini halaman Fakultas Teknik yang didalam Fakultas");
});

Route::get('/UNIT', function () {
    echo ("Ini halaman UNIT");
});

Route::get('/UNIT/UPT', function () {
    echo ("Ini halaman UPT yang didalam UNIT");
});

Route::get('/UNIT/UPT/UPT PERPUSTAKAAN', function () {
    echo ("Ini halaman UPT PERPUSTAKAAN yang didalam UPT/UNIT");
});

//route controller
Route::get('/jual', [JualController::class, 'ferdian']);

Route::get('/pertama', [PertamaController::class, 'ferdian']);

Route::get('/kedua', [KeduaController::class, 'ferdian']);

Route::get('/ketiga', [KetigaController::class, 'ferdian']);

Route::get('/keempat', [KeempatController::class, 'ferdian']);

Route::get('/kelima', [KelimaController::class, 'ferdian']);

Route::get('/keenam', [KeenamController::class, 'ferdian']);

Route::get('/ketujuh', [KetujuhController::class, 'ferdian']);

Route::get('/kedelapan', [KedelapanController::class, 'ferdian']);

Route::get('/kesembilan', [KesembilanController::class, 'ferdian']);