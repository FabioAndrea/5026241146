<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function pertemuan12()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('pertemuan12',['pegawai' => $pegawai]);

    }
}
