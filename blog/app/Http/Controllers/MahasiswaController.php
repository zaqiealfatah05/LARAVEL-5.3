<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
    // // public function data_mahasiswa()
    // {
    //     return view ('Mahasiswa/data_mahasiswa');
    // }
    public function edit($id)
    {
        $edit = Mahasiswa::find($id);
        return view('Mahasiswa/edit_mahasiswa', compact('edit'));
    }
    public function hasiledit(Request $request, $id)
    {
       $update= Mahasiswa::find($id);

       $update->no=$request->no;
       $update->nim=$request->nim;
       $update->nama=$request->nama;
       $update->angkatan=$request->angkatan;
       $update->update();
        return redirect('Mahasiswa/data_mahasiswa');
    }

    public function delete($id)
    {
        $delete= Mahasiswa::find($id);
        $delete->delete();
        return redirect('Mahasiswa/data_mahasiswa');    
    }
    public function detail()
    {
        $mahasiswa = Mahasiswa::all();
        return view ('Mahasiswa/detail_mahasiswa', compact('mahasiswa'));
    }

    public function edit_mahasiswa()
    {
        return view('Mahasiswa/edit_mahasiswa');
    }

    public function tampil()
    {
        $mahasiswa = Mahasiswa::all();
        return view ('Mahasiswa/data_mahasiswa', compact('mahasiswa'));
    }
    public function tambah_mahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return view ('Mahasiswa/tambah_mahasiswa', compact('mahasiswa'));
    }
    public function hasil(Request $request)
    {
        $masuk = new Mahasiswa();

        $masuk->no=$request->no;
        $masuk->nim=$request->nim;
        $masuk->nama=$request->nama;
        $masuk->angkatan=$request->angkatan;
        if($masuk->save()){
            return redirect()->to('Mahasiswa/data_mahasiswa');
        }else{
            return view('Mahasiswa/tambah_mahasiswa');
        }
    }
    
    
}
