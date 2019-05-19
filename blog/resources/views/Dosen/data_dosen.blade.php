@extends('layout')
@section('content')
<div>
<a class="btn btn-default" href="{{url('Dosen/tambah_dosen')}}" role="button">Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
        <td>NO</td>
        <td>NIK</td>
        <td>Nama Dosen</td>
        <td>Matakuliah</td>
        <td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($dosen as $dsn)
    <tr>
        <td>{{$dsn->no}}</td>
        <td>{{$dsn->nik}}</td>
        <td>{{$dsn->nama}}</td>
        <td>{{$dsn->matakuliah}}</td>
        <td>
        <a class="btn btn-default" href="{{url('Dosen/edit_dosen')}}/{{$dsn->id}}" role="button">Edit</a>
        <a class="btn btn-default" href="{{url('Dosen/delete_dosen')}}/{{$dsn->id}}" role="button">Delete</a>
        <a class="btn btn-default" href="{{url('Dosen/detail_dosen')}}" role="button">Detail</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection