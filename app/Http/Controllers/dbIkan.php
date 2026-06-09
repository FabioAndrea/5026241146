<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbIkan extends Controller
{
    public function index()
    {
        $ikan = DB::table('ikan')->paginate(10);
        return view('tugasPraEAS',['ikan' => $ikan]);
    }
    public function tambah()
	{

		// memanggil view tambah
		return view('tambahikan');

	}
    public function store(Request $request)
	{
		// insert data ke table ikan
		DB::table('ikan')->insert([
			'namaikan' => $request->namaikan,
			'jumlahikan' => $request->jumlahikan,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman ikan
		return redirect('/ikan');
    }
    public function edit($id)
	{
		// mengambil data ikan berdasarkan id yang dipilih
		$ikan = DB::table('ikan')->where('kodeikan',$id)->get();
		// passing data ikan yang didapat ke view edit.blade.php
		return view('editikan',['ikan' => $ikan]);

	}
    // method untuk hapus data ikan
	public function hapus($id)
	{
		// menghapus data ikan berdasarkan id yang dipilih
		DB::table('ikan')->where('kodeikan',$id)->delete();

		// alihkan halaman ke halaman ikan
		return redirect('/ikan');
	}
    public function update(Request $request)
	{
		// update data ikan
		DB::table('ikan')->where('kodeikan',$request->id)->update([
			'kodeikan' => $request->kodeikan,
			'namaikan' => $request->namaikan,
			'jumlahikan' => $request->jumlahikan,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman ikan
		return redirect('/ikan');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table ikan sesuai pencarian data
		$ikan = DB::table('ikan')
		->where('namaikan','like',"%".$cari."%")
		->paginate();

    		// mengirim data ikan ke view index
		return view('tugasPraEAS',['ikan' => $ikan]);

	}
}
