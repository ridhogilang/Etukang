<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TukangController;
use App\Http\Controllers\DaftarTukangController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\DashboardPesanController;
use App\Http\Controllers\DashboardTukangController;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'home');
    Route::post('/', 'store');
    Route::get('/kontak', 'kontak');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/dashboard', 'index')->middleware('auth');
    Route::get('/pendaftaranuser', 'penduser');
    Route::get('/daftaradmin', 'register');
});

Route::get('tukang', [TukangController::class, 'index']);
Route::get('api/layanan-tukang', [TukangController::class, 'getLayananWithTukang']);
Route::get('tukang/{slug}', [TukangController::class, 'order'])->middleware('auth');
Route::post('order', [TukangController::class, 'store'])->middleware('auth');
Route::post('/order/{id}/selesai', [TukangController::class, 'updateSelesai'])->middleware('auth');
Route::post('/order/{id}/otw', [TukangController::class, 'updateOtw'])->middleware('auth');

Route::get('daftar', [DaftarTukangController::class, 'index']);
Route::get('form', [DaftarTukangController::class, 'karir'])->middleware('auth');
Route::post('form', [DaftarTukangController::class, 'store']);

Route::get('kontak', [KontakController::class, 'index']);
Route::post('kontak', [KontakController::class, 'store']);


Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::Post('login', [LoginController::class, 'authenticate']);
Route::Post('logout', [LoginController::class, 'logout']);

Route::get('register', [UserRegisterController::class, 'index']);
Route::post('register', [UserRegisterController::class, 'store']);

Route::get('datauser', [UserRegisterController::class, 'dashboard']);

Route::get('datatukang', [DashboardTukangController::class, 'index']);
Route::get('pendaftarantukang', [DashboardTukangController::class, 'daftar']);

Route::get('datapesan', [DashboardPesanController::class, 'pesan']);
Route::get('subscribe', [DashboardPesanController::class, 'index']);
Route::get('invoice', [DashboardPesanController::class, 'invoice']);
Route::get('allinvoice', [DashboardPesanController::class, 'allinvoice']);
Route::get('dataorder', [DashboardPesanController::class, 'dataorder']);


