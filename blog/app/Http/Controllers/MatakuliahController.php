<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\matakuliah;

class MatakuliahController extends Controller
{
    public function data_matakuliah()
    {
        return view ('Matakuliah/data_matakuliah');
    }
    public function delete($id)
    {
        $delete= Matakuliah::find($id);
        $delete->delete();
        return redirect('Matakuliah/data_matakuliah');    
    }

    public function detail_matakuliah()
    {
        return view('Matakuliah/detail_matakuliah');
    }
    public function edit_matakuliah()
    {
        return view('Matakuliah/edit_matakuliah');
    }
    public function tampil()
    {
        $matakuliah = Matakuliah::all();
        return view ('Matakuliah/data_matakuliah', compact('matakuliah'));
    }
    public function tambah_matakuliah()
    {
        $matakuliah = Matakuliah::all();
        return view ('Matakuliah/tambah_matakuliah', compact('matakuliah'));
    }
    public function hasil(Request $request)
    {
        $masuk = new Matakuliah();
        $masuk->no=$request->no;
        $masuk->kode=$request->kode;
        $masuk->nama=$request->nama;
        $masuk->semester=$request->semester;
        if($masuk->save()){
            return redirect()->to('Matakuliah/data_matakuliah');
        }else{
            return view('Matakuliah/tambah_matakuliah');
        }
    }
    
}
