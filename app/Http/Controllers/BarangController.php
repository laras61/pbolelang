<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$tb_barang = DB::table('tb_barang')->get();

    	// mengirim data ke view
    	return view('VBarang',['tb_barang' => $tb_barang]);

    }
}
