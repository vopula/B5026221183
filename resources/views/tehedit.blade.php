@extends('master')
@section('title', 'Edit Data Merk Teh')

@section('konten')

    <a href="/teh" class="btn btn-link"> Kembali</a>
	<h3 class="mt-3">Edit Data Merk Teh</h3>

	@foreach($teh as $t)
	<form action="/teh/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->kodeteh }}"> <br/>

        <div class="form-group row">
            <label for="merk" class="col-xs-3 col-form-label ml-3 mr-3">Merk Teh</label>
            <div class="col-xs-9 ml-1">
            <input type="text" required="required" class="form-control" id="merk" name="merk" value="{{$t->merkteh}}"> <!--name untuk server-->
            </div>
        </div>

        <div class="form-group row">
            <label for="stock" class="col-xs-3 col-form-label ml-3 mr-2">Stock Teh</label>
            <div class="col-xs-9">
            <input type="text" required="required" class="form-control" id="stock" name="stock" value="{{$t->stockteh}}"> <!--name untuk server-->
            </div>
        </div>

		<input type="submit" class="btn btn-warning" value="Edit Data">
	</form>
	@endforeach

@endsection
