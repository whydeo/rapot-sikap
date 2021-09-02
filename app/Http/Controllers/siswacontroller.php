<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\siswa;
use Illuminate\Support\Facades\DB;

use Redirect,Response;
class siswaController extends Controller
{
	// tampil data
    public function index()
        {
            $siswa=DB::table('siswa')->get();
            return view('siswa/siswa',['siswa'=>$siswa]);
        }

	// ini buat form
    public function tambah()
        {
            return view('siswa/tambah');

        }
		//ini buat simpan
    public function simpan(Request $request)
        {
			
			DB::table('siswa')->insert([
				['absen' => $request->absen, 'absen' => $request->absen],
				['nama' => $request->nama, 'nama' => $request->nama],
				['kelas' => $request->kelas, 'kelas' => $request->kelas],
				['jk' => $request->jk, 'jk' => $request->jk],
				
			]);
			return view('siswa/siswa');
		}    
		
		//ini nanti buat edit




		//ini buat update


		//ini buat kirm data siswa ke tabel guru


		//ini buat kirm data siswa ke tabel walikelas


		//ini buat kirm data siswa ke tabel pembina


	
}

	/**
	* Remove the specified resource from storage.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	