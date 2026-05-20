<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
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

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

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
