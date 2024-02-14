<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index']);
Route::get('/classes', [LandingController::class, 'classes']);


Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/trainer', function () {
    return view('trainer');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});


//route kelas
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/tambah-kelas', [KelasController::class, 'create']);
Route::post('/tambah-kelas', [KelasController::class, 'store']);
Route::get('/edit-kelas/{id}', [KelasController::class, 'edit']);
Route::put('edit-kelas/{id}', [KelasController::class, 'update']);
Route::delete('/kelas/{id}', [KelasController::class, 'destroy']);


//route jadwal
Route::resource('/jadwal-kelas', JadwalController::class);
Route::get('/tambah-jadwal', [JadwalController::class, 'create']);
Route::post('/tambah-jadwal', [JadwalController::class, 'store']);
Route::get('/edit-jadwal/{id}', [JadwalController::class, 'edit']);
Route::put('/edit-jadwal/{id}', [JadwalController::class, 'update']);
Route::delete('/jadwal/{id}', [JadwalController::class, 'destroy']);


Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'index_register']);
Route::post('/register', [LoginController::class, 'register']);
