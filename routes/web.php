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
    return view('/login');
});
Route::get('/registrasi', function () {
    return view('dosen/registrasi');
});


Route::get('/dashboard', function () {
    return view('dosen/dashboard');
});
Route::get('/dashboard', function () {
    return view('admin/dashboardadmin');
});

Route::get('/booking', function () {
    return view('dosen/fpinjamdosen');
});
Route::get('/buatnotif', function () {
    return view('admin/buatnotifadmin');
});

Route::get('/barang', function () {
    return view('dosen/databarangdosen');
});
Route::get('/barang', function () {
    return view('admin/databarangadmin');
});

Route::get('/riwayat', function () {
    return view('dosen/rpinjamdosen');
});
Route::get('/peminjam', function () {
    return view('admin/datapeminjam');
});