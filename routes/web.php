<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
// use App\Http\Controllers\homeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RiwayatPeminjaman;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\PengembalianController;

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

// Route::get('/', function () {
//     return view('home', [
//         'title' => 'Home',
//     ]);
// });

// Route::get('/peminjaman', function () {
//     return view('peminjaman', [
//         'title' => 'Peminjaman',
//     ]);
// });

// Route::get('/pengembalian', function () {
//     return view('pengembalian', [
//         'title' => 'Pengembalian',
//     ]);
// });

// Route::get('/riwayat', function () {
//     return view('riwayat', [
//         'title' => 'Riwayat Peminjaman',
//     ]);
// });

// Route::get('/riwayatpengembalian', function () {
//     return view('riwayatpengembalian', [
//         'title' => 'Riwayat Pengembalian',
//     ]);
// });

// Route::get('/buku', function () {
//     return view('buku', [
//         'title' => 'Data Buku',
//     ]);
// });

// Route::get('/login', function () {
//     return view('layouts.login', [
//         'title' => 'Login'
//     ]);
// });



// Route::get('/', [HomeController::class, 'home']);

// Route::get('/peminjaman', [homeController::class, 'peminjaman']);
// Route::get('/pengembalian', [homeController::class, 'pengembalian']);
// Route::get('/buku', [homeController::class, 'buku']);
// Route::get('/pengunjung', [homeController::class, 'pengunjung']);
// Route::get('/riwayat', [homeController::class, 'riwayat']);
// Route::get('/riwayatpengembalian', [homeController::class, 'riwayatpengembalian']);


// Route::post('/peminjaman', [homeController::class, 'peminjaman_post']);
// Route::middleware(['auth'])->group(function () {
//     Route::resource('/home', HomeController::class);
//     Route::resource('buku', BukuController::class);
//     Route::resource('peminjaman', PeminjamanController::class);
//     Route::resource('pengunjung', PengunjungController::class);
//     Route::resource('pengembalian', PengembalianController::class);
//     Route::resource('user', UserController::class);

//     // Route::resource('riwayat', RiwayatPeminjaman::class);
// });

// Route::group(['middleware' => ['auth', 'admin']], function () {
//     Route::group(
//         ['middleware' => ['auth', 'pustakawan']],
//         function () {
//             Route::resource('/home', HomeController::class);
//             Route::resource('buku', BukuController::class);
//             Route::resource('peminjaman', PeminjamanController::class);
//             Route::resource('pengunjung', PengunjungController::class);
//             Route::resource('pengembalian', PengembalianController::class);
//         }
//     );
//     Route::resource('user', UserController::class);
// });

// Route::group(['middleware' => ['auth', 'pustakawan']], function () {
//     Route::resource('/home', HomeController::class);
//     Route::resource('buku', BukuController::class);
//     Route::resource('peminjaman', PeminjamanController::class);
//     Route::resource('pengunjung', PengunjungController::class);
//     Route::resource('pengembalian', PengembalianController::class);
// });

// (auth()->user()->level == 1)
// Route::middleware(['middleware' => 'admin'])->group(function () {
Route::resource('/home', HomeController::class)->middleware('auth', 'admin', 'pustakawan');
Route::resource('buku', BukuController::class)->middleware('auth', 'admin', 'pustakawan');
Route::resource('peminjaman', PeminjamanController::class)->middleware('auth', 'admin', 'pustakawan');
Route::resource('pengunjung', PengunjungController::class)->middleware('auth', 'admin', 'pustakawan');
Route::resource('pengembalian', PengembalianController::class)->middleware('auth', 'admin', 'pustakawan');
Route::resource('user', UserController::class)->middleware('admin');
// Route::resource('riwayat', RiwayatPeminjaman::class);
// });

// Route::middleware(['middleware' => 'pustakawan'])->group(function () {
//     Route::resource('/home', HomeController::class);
//     Route::resource('buku', BukuController::class);
//     Route::resource('peminjaman', PeminjamanController::class);
//     Route::resource('pengunjung', PengunjungController::class);
//     Route::resource('pengembalian', PengembalianController::class);
//     // Route::resource('user', UserController::class);
//     // Route::resource('riwayat', RiwayatPeminjaman::class);
// });
// Route::resource('/peminjaman', PeminjamanController::class);

// Route::get('searchbuku', [BukuController::class, 'index'])->judul('search');

// Route::get('autocomplete', [BukuController::class, 'autocomplete'])->judul('autocomplete');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
