<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanja extends Controller
{
    public function index(){
        $keranjangbelanja = DB::table('keranjangbelanja')
                            ->get();

        return view('IndexKeranjangBelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    public function beli(){

        return view('belibarang');

    }

    public function store(Request $request){

        DB::table('keranjangbelanja')->insert([
            'Kode_Barang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
		]);

		return redirect('/keranjangbelanja');

    }

    public function batal($id){

        DB::table('keranjangbelanja')->where('id', $id)->delete();

        return redirect('/keranjangbelanja');

    }
}
