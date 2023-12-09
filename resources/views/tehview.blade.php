@extends('master')
@section('title', 'view Merk Teh')

@section('konten')

    <h3 class="d-flex justify-content-center">Data Merk Teh</h3>

    <div class="row">
        <div class="col-6"></div>
        <div class="col-6 flex-column mt-5 mb-5">
            @foreach ($teh as $t)
                <div name="kode" id="kode" class="mb-2">Kode Teh: {{ $t->kodeteh }} </div>
                <div name="merk" id="merk" class="mb-2">Merk Teh: {{ $t->merkteh }} </div>
                <div name="stock" id="stock" class="mb-2">Stock Teh: {{ $t->stockteh }} </div>
                <div name="sedia" id="sedia" class="mb-2">Tersedia: {{ $t->tersedia }} </div>
                <div class="d-flex justify-content-center">
                <a href="/teh" class="btn btn-success pl-5 pr-5 mt-5">OK</a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
