<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TehController extends Controller
{
	public function index()
	{
        $teh = DB::table('teh')
                    ->orderBy('kodeteh', 'asc')
                    ->paginate(10);

        return view('tehindex',['teh' => $teh]);
	}

	public function tambah()
	{

		return view('tehtambah');

	}

	public function store(Request $request)
	{
        $tersedia = $request->stock > 0 ? 'Y' : 'N';

        DB::table('teh')->insert([
			'merkteh' => $request->merk,
			'stockteh' => $request->stock,
            'tersedia' => $tersedia
		]);

        return redirect('/teh');

	}

	public function edit($id)
	{
		$teh = DB::table('teh')->where('kodeteh',$id)->get();
		return view('tehedit',['teh' => $teh]);
	}

	public function update(Request $request)
	{
        $tersedia = $request->stock > 0 ? 'Y' : 'N';

		DB::table('teh')->where('kodeteh', $request->id)->update([
			'merkteh' => $request->merk,
			'stockteh' => $request->stock,
            'tersedia' => $tersedia
    	]);

        return redirect('/teh');
	}

    public function view($id)
    {
        $teh = DB::table('teh')->where('kodeteh', $id)->get();

        return view('tehview', ['teh' => $teh]);
    }

	public function hapus($id)
	{
		DB::table('teh')->where('kodeteh',$id)->delete();

		return redirect('/teh');
	}

    public function cari(Request $request)
	{
		$cari = $request->cari;

		$teh = DB::table('teh')
		    ->where('merkteh','like',"%".$cari."%")
            ->orderBy('merkteh', 'asc')
		    ->paginate();

		return view('tehindex',['teh' => $teh, 'cari' => $cari]);
	}
}
