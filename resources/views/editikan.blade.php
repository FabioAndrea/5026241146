@extends('template')
@section('judul', 'Data Ikan')
@section('konten')

    <div class="container mt-5">

        <div class="mb-4">
            
            <h3>Edit Ikan</h3>
        </div>

        <a href="/ikan" class="btn btn-secondary mb-4">Kembali</a>

        @foreach ($ikan as $i)
            <div class="card">
                <div class="card-header">
                    Form Edit Data Ikan
                </div>

                <div class="card-body">
                    <form action="/ikan/update" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $i->kodeikan }}">

                        <div class="row mb-3">
                            <label for="kode" class="col-sm-2 col-form-label">Kode Ikan</label>
                            <div class="col-sm-10">
                                <input type="text" name="kodeikan" id="kodeikan" class="form-control" required
                                    value="{{ $i->kodeikan }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jabatan" class="col-sm-2 col-form-label">Nama Ikan</label>
                            <div class="col-sm-10">
                                <input type="text" name="namaikan" id="namaikan" class="form-control" required
                                    value="{{ $i->namaikan }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Ikan</label>
                            <div class="col-sm-10">
                                <input type="number" name="jumlahikan" id="jumlahikan" class="form-control" required
                                    value="{{ $i->jumlahikan }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                            <div class="col-sm-10">
                                <input type="radio" name="tersedia" value="Y" required
                                    {{ $i->tersedia == 'Y' ? 'checked' : '' }}>
                                Ya

                                <input type="radio" name="tersedia" value="T"
                                    {{ $i->tersedia == 'T' ? 'checked' : '' }}>
                                Tidak
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
        @endforeach

    </div>

@endsection
