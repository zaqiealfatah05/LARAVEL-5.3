@extends('layout')
@section('content')
<div>
<a class="btn btn-default" href="{{url('Matakuliah/tambah_matakuliah')}}" role="button">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
        <td>NO</td>
        <td>Kode</td>
        <td>Nama Mata Kuliah</td>
        <td>Semester</td>
        <td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($matakuliah as $mtk)
    <tr>   
        <td>{{$mtk->no}}</td>
        <td>{{$mtk->kode}}</td>
        <td>{{$mtk->nama}}</td>
        <td>{{$mtk->semester}}</td>
        <td>
        <a class="btn btn-default" href="{{url('Matakuliah/edit_matakuliah')}}" role="button">Edit</a>
        <a class="btn btn-default" href="{{url('Matakuliah/delete_matakuliah')}}/{{$mtk->id}}" role="button">Delete</a>
        <a class="btn btn-default" href="{{url('Matakuiliah/detail_matakuliah')}}" role="button">Detail</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection