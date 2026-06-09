@extends('template')
@section('judul', 'Data Ikan')
@section('konten')
    <a href="/ikan" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Ikan
        </div>

        <div class="card-body">
            <form action="/ikan/store" method="post">
                {{ csrf_field() }}
                <!-- tidak menggunakan kode ikan saat menambah karena auto increment-->
                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">Nama Ikan</label>
                    <div class="col-sm-10">
                        <input type="text" name="namaikan" id="namaikan" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="umur" class="col-sm-2 col-form-label">Jumlah Ikan</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlahikan" id="jumlahikan" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <input type="radio" name="tersedia" value="Y" required> Ya
                        <input type="radio" name="tersedia" value="T"> Tidak
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
