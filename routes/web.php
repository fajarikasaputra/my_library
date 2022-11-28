<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PeminjamanController;


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

// Route::get('/pengunjung', function () {
//     return view('pengunjung', [
//         'title' => 'Data Pengunjung',
//     ]);
// });

Route::get('/', [homeController::class, 'home']);
Route::get('/peminjaman', [homeController::class, 'peminjaman']);
Route::get('/pengembalian', [homeController::class, 'pengembalian']);
// Route::get('/buku', [homeController::class, 'buku']);
Route::get('/pengunjung', [homeController::class, 'pengunjung']);
Route::get('/riwayat', [homeController::class, 'riwayat']);
Route::get('/riwayatpengembalian', [homeController::class, 'riwayatpengembalian']);

Route::post('/peminjaman', [homeController::class, 'peminjaman_post']);


Route::resource('buku', BukuController::class);

// Route::resource('/peminjaman', PeminjamanController::class);
