@extends('master')
@section('title', 'Tambah Data Pegawai')

@section('konten')

    <a href="/nilaikuliah" class="btn btn-link">Kembali</a>
	<h3 class="mb-4 mt-3">Tambah Data Mahasiswa</h3>

    <form action="/nilaikuliah/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col">NRP</label>
            <input type="text" class="form-control col mb-2" placeholder="Masukkan NRP" name="NRP">
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col">Nilai Angka</label>
            <input type="text" class="form-control col mb-2" placeholder="Masukkan NilaiAngka" name="NilaiAngka">
        </div>
        <div class="form-group row">
            <label for="SKS" class="col">SKS</label>
            <input type="number" class="form-control col mb-2" placeholder="SKS" name="SKS">
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan Data">

    </form>
@endsection
