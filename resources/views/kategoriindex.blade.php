@extends('master')
@section('title', 'Data Kategori')

@section('konten')
    <form action="/kategoriindex/cari" method="GET">

        <h5 for="kategori">Pilih Kategori</h5>

        <div class="form-group">
            <select name="cari" class="custom-select custom-select-lg">
                <option value="Elektronik" selected>Elektronik</option>
                <option value="Rumah Tangga">Rumah Tangga</option>
                <option value="Komputer">Komputer</option>
              </select>
        </div>
		<input type="submit" class="btn btn-primary ml-3" value="Kirim">
	</form>

    <br>


@endsection
