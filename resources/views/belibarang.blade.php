@extends('master')
@section('title', 'Tambah Barang')

@section('konten')

    <a href="/keranjangbelanja" class="btn btn-link">Kembali</a>
	<h3 class="mb-4 mt-3">Tambah Barang</h3>

    <form action="/keranjangbelanja/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="kodebarang" class="col">Kode Barang</label>
            <input type="text" class="form-control col mb-2" name="kodebarang">
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-6">Jumlah Pembalian</label>
            <input type="number" class="d-flex justify-content-center form-control col-2 mb-2" name="jumlah">
        </div>
        <div class="form-group row">
            <label for="harga" class="col-6">Harga Per Item</label>
            <input type="number" class="form-control col-4 mb-2" name="harga">
        </div>
        <input type="submit" class="btn btn-primary" value="Tambah">
    </form>
@endsection
