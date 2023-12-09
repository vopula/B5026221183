@extends('master')
@section('title', 'Tambah Data Merk Teh')

@section('konten')

    <a href="/teh" class="btn btn-link"> Kembali</a>
	<h3 class="mb-4 mt-3">Data Merk Teh</h3>

	<form action="/teh/store" method="post" class="form-horizontal col-5">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merk" class="col-4">Merk Teh</label>
            <input type="text" class="form-control col-7 mb-2" id="merk" name="merk" placeholder="*******"> <!--name untuk server-->
        </div>

		<div class="form-group row">
            <label for="stock" class="col-4">Stock Teh</label>
            <input type="number" class="form-control col-2 mb-2" id="stock" name="stock" placeholder="*"> <!--name untuk server-->
        </div>

        <input type="submit" class="btn btn-primary" value="Simpan Data">
	</form>
@endsection
