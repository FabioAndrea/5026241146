<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\dbIkan;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\keranjangbelanja;
use App\Http\Controllers\nilaikuliah;

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

//crud tabel ikan
Route::get('ikan', [dbIkan::class, 'index']);
Route::get('ikan/tambah', [dbIkan::class, 'tambah']);
Route::post('ikan/store', [dbIkan::class, 'store']);
Route::get('ikan/edit/{id}', [dbIkan::class, 'edit']);
Route::post('ikan/update', [dbIkan::class, 'update']);
Route::get('ikan/hapus/{id}', [dbIkan::class, 'hapus']);
Route::get('/ikan/cari', [dbIkan::class, 'cari']);
//e5
Route::get('e5', [nilaikuliah::class, 'index']);
Route::get('e5/tambah', [nilaikuliah::class, 'tambah']);
Route::post('e5/store', [nilaikuliah::class, 'store']);
Route::get('e5/edit/{id}', [nilaikuliah::class, 'edit']);
Route::post('e5/update', [nilaikuliah::class, 'update']);
Route::get('e5/hapus/{id}', [nilaikuliah::class, 'hapus']);
Route::get('/e5/cari', [nilaikuliah::class, 'cari']);
//d4
Route::get('d4', [keranjangbelanja::class, 'index']);
Route::get('d4/tambah', [keranjangbelanja::class, 'beli']);
Route::post('d4/store', [keranjangbelanja::class, 'store']);
Route::get('d4/hapus/{id}', [keranjangbelanja::class, 'hapus']);

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

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

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
