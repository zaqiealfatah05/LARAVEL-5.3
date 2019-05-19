<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function edit($id)
    {
        $edit = Dosen::find($id);
        return view('Dosen/edit_dosen', compact('edit'));
    }
    public function hasiledit(Request $request, $id)
    {
       $update= Dosen::find($id);

       $update->no=$request->no;
       $update->nik=$request->nik;
       $update->nama=$request->nama;
       $update->matakuliah=$request->matakuliah;
       $update->update();
        return redirect('Dosen/data_dosen');
    }

    public function delete($id)
    {
        $delete= Dosen::find($id);
        $delete->delete();
        return redirect('Dosen/data_dosen');    
    }
    public function detail()
    {
        $dosen = Dosen::all();
        return view ('Dosen/detail_dosen', compact('dosen'));
    }
    public function tampil()
    {
        $dosen =Dosen::all();
        return view ('Dosen/data_dosen', compact('dosen'));
    }
    public function tambah_dosen()
    {
        $dosen = Dosen::all();
        return view ('Dosen/tambah_dosen', compact('dosen'));
    }
    public function hasil(Request $request)
    {
        $masuk = new Dosen();

        $masuk->no=$request->no;
        $masuk->nik=$request->nik;
        $masuk->nama=$request->nama;
        $masuk->matakuliah=$request->matakuliah;
        if($masuk->save()){
            return redirect()->to('Dosen/data_dosen');
        }else{
            return view('Dosen/tambah_dosen');
        }
    }
}
