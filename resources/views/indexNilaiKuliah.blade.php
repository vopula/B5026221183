@extends('master')
@section('title', 'Data Pegawai')

@section('konten')
	<h3>Data Nilai Kuliah Mahasiswa</h3>
    <a href="/nilaikuliah/tambah" class="btn btn-primary">+ Tambah Data</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
        </tr>
		@foreach($nilaikuliah as $nk)
		<tr>
			<td>{{ $nk->ID }}</td>
			<td>{{ $nk->NRP }}</td>
			<td>{{ $nk->NilaiAngka }}</td>
			<td>{{ $nk->SKS }}</td>

			<td>
                @if ($nk->NilaiAngka >= 81)
                    A
                @elseif ($nk->NilaiAngka >= 61 AND $nk->NilaiAngka <= 80)
                    B
                @elseif ($nk->NilaiAngka >= 41 AND $nk->NilaiAngka <= 60)
                    C
                @else
                    D
                @endif
            </td>
			<td>
                @php
                    $Bobot  = $nk->NilaiAngka * $nk->SKS
                @endphp
                {{$Bobot}}
            </td>
		</tr>
		@endforeach
	</table>
@endsection
