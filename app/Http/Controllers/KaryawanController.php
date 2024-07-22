<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index', [
            'karyawan' => Karyawan::latest()->get()
         ]);
    }

    public function add()
    {
        return view('karyawan.insert');
    }

    public function insert(Request $request)
    {
        dd($request->all());
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Karyawan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('karyawan')->with('message', 'Data Berhasil Ditambahkan!');
    }

}
?>
