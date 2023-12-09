@extends('master')
@section('title', 'Tambah Data Pegawai')

@section('konten')

    <a href="/nilaikuliah" class="btn btn-link">Kembali</a>
	<h3 class="mb-4 mt-3">Tambah Data Mahasiswa</h3>

    <form action="/nilaikuliah/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-6">NRP</label>
            <input type="text" class="form-control col-4 mb-2" placeholder="**********" name="NRP">
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-6">Nilai Angka</label>
            <input type="text" class="form-control col-2 mb-2" placeholder="***" name="NilaiAngka">
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-6">SKS</label>
            <input type="number" class="form-control col-2 mb-2" placeholder="*" name="SKS">
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan Data">

    </form>
@endsection
