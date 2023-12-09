@extends('master')
@section('title', 'Data Teh')

@section('konten')
	<h3>Data Merk Teh</h3>

	<a href="/teh/tambah" class="btn btn-primary"> + Tambah Data Merk Baru</a>

	<br/>
    <p>Cari Data Merk Teh berdasarkan nama:</p>
	<form action="/teh/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Merk Teh"
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Teh</th>
			<th>Merk Teh</th>
			<th>Stock Teh</th>
			<th>Tersedia</th>
			<th>Pilihan</th>
		</tr>
		@foreach($teh as $t)
		<tr>
			<td>{{ $t->kodeteh }}</td>
			<td>{{ $t->merkteh }}</td>
			<td>{{ $t->stockteh }}</td>
			<td>{{ $t->tersedia }}</td>
			<td>
                <a href="/teh/view/{{ $t->kodeteh }}" class="btn btn-success">View</a>
                |
				<a href="/teh/edit/{{ $t->kodeteh }}" class="btn btn-warning">Edit</a>
				|
				<a href="/teh/hapus/{{ $t->kodeteh }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $teh -> links()}}
@endsection
