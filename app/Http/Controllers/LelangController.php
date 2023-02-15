<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LelangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$tb_lelang = DB::table('tb_lelang')->get();

    	// mengirim data ke view
    	return view('VLelang',['tb_lelang' => $tb_lelang]);

    }
}
