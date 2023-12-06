@extends('master')
@section('title', 'Data Pegawai')

@section('konten')
	<h3>Data produk belanja</h3>
    <a href="/keranjangbelanja/beli" class="btn btn-primary mb-3 mt-1">Beli</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
			<th>Action</th>
        </tr>
		@foreach($keranjangbelanja as $kb)
		<tr>
			<td>{{ $kb->ID }}</td>
			<td>{{ $kb->Kode_Barang }}</td>
			<td>{{ $kb->Jumlah }}</td>
			<td>{{ $kb->Harga }}</td>
			<td>
                @php
                $total = $kb->Jumlah * $kb->Harga;
                $formattedTotal = number_format($total, 0, '', '.');                @endphp
                {{$formattedTotal}}
                @endphp
            </td>
            <td>
				<a href="/keranjangbelanja/batal/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
            </td>
		</tr>
		@endforeach
	</table>
@endsection
