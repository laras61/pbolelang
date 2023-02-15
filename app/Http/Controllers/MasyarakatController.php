<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$tb_masyarakat = DB::table('tb_masyarakat')->get();

    	// mengirim data ke view
    	return view('VMasyarakat',['tb_masyarakat' => $tb_masyarakat]);

    }

    public function tambah(Request $request)
    {
    	DB::table('tb_masyarakat')->insert([
			'id_user' => $request->id_user,
			'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp,

		]);
		// alihkan halaman ke halaman berita
		return redirect('/masyarakat');

    }

    public function hapus(Request $request)
    {
		$id_user=$request->id_user;
		DB::table('tb_masyarakat')->where('id_user',$id_user)->delete();

		// alihkan halaman ke halaman berita
		return redirect('/masyarakat');

    }
    
}
