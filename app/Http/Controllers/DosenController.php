<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index() {
        $a = 7;
        $b = 3;
        $c = $a*$b;
        return "<h1>Hasil perkalian: " . $c . "</h1";
    }

    public function biodata() {
        $nama = "Diki afrabi";
        $alamat = "Surabaya";
        $umur = 18;
        return view('biodata', ['nama' => $nama, 'alamat' => $alamat]);
    }

    public function showjam($jam){ //Parameter function berupa primitive data type.
        return "<h2>Sekarang jam ".$jam."</h2>";
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "And telah mengisikan: <br> Nama: ".$nama.", Alamat: ".$alamat.", NRP: ".$nrp;
    }

    public function formulir(){
        return view('formulir');
    }
}
