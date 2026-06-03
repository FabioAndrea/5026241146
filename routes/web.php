<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/', function () {
    return view('listpertemuan');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});
Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('template', function () {
	return view('template');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);



//crud tabel pegawai
Route::get('pegawai', [PegawaiDBController::class, 'pertemuan12']);
Route::get('pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('pert1', function () {
	return view('pertemuan1');
});

Route::get('pert2', function () {
	return view('pertemuan2');
});

Route::get('pert3', function () {
	return view('pertemuan3');
});

Route::get('pert4', function () {
	return view('pertemuan4');
});

Route::get('tpert3', function () {
	return view('tugaspert3');
});

Route::get('linktree', function () {
	return view('tugaslinktree');
});

Route::get('pert6', function () {
	return view('pertemuan6');
});

Route::get('index', function () {
	return view('index');
});
Route::get('tugas_ets', function () {
	return view('tugas_ets');
});
