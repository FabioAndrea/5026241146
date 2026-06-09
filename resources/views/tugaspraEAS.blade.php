@extends('template')
@section('judul', 'Data Ikan')
@section('konten')
<a href="/ikan/tambah" class="btn btn-primary"> + Tambah Ikan Baru</a>

	<br/>
	<br/>
<p>Cari Data Ikan :</p>
	<form action="/ikan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Ikan .." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-success">
	</form>

	<br/>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Kode Ikan</th>
			<th>Nama Ikan</th>
			<th>Jumlah Ikan</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($ikan as $i)
		<tr>
			<td>{{ $i->kodeikan }}</td>
			<td>{{ $i->namaikan }}</td>
			<td>{{ $i->jumlahikan }}</td>
			<td>{{ $i->tersedia }}</td>
			<td>
				<a href="/ikan/edit/{{ $i->kodeikan }}" class="btn btn-warning">Edit</a>
				|
				<a href="/ikan/hapus/{{ $i->kodeikan }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $ikan->links() }}
@endsection
