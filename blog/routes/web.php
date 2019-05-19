<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Mahasiswa    
Route::get('Mahasiswa/data_mahasiswa', 'MahasiswaController@tampil');
Route::get('Mahasiswa/tambah_mahasiswa', 'MahasiswaController@tambah_mahasiswa')->middleware('cek');
Route::post('Mahasiswa/update_mahasiswa', 'MahasiswaController@hasil');


Route::get('Mahasiswa/delete_mahasiswa/{id}','MahasiswaController@delete')->middleware('cek');


Route::get('Mahasiswa/detail_mahasiswa/{id}', 'MahasiswaController@detail');

Route::get('Mahasiswa/edit_mahasiswa/{id}', 'MahasiswaController@edit')->middleware('cek');
Route::post('Mahasiswa/update_mahasiswa/{id}', 'MahasiswaController@hasiledit')->middleware('cek');



//Dosen
Route::get('Dosen/data_dosen', 'DosenController@tampil');
Route::get('Dosen/tambah_dosen', 'DosenController@tambah_dosen')->middleware('cek');
Route::post('Dosen/update_dosen', 'DosenController@hasil');


Route::get('Dosen/delete_dosen/{id}','DosenController@delete')->middleware('cek');


Route::get('Dosen/detail_dosen', 'DosenController@detail_dosen');

Route::get('Dosen/edit_dosen/{id}', 'DosenController@edit')->middleware('cek');
Route::post('Dosen/update_dosen/{id}', 'DosenController@hasiledit')->middleware('cek');

//Matakuliah
Route::get('Matakuliah/data_matakuliah', 'MatakuliahController@tampil');
Route::get('Matakuliah/tambah_matakuliah', 'MatakuliahController@tambah_matakuliah')->middleware('cek');
Route::post('Matakuliah/update_matakuliah', 'MatakuliahController@hasil');

Route::get('Matakuliah/delete_matakuliah/{id}','MatakuliahController@delete')->middleware('cek');

Route::get('Matakuliah/detail_matakuliah', 'MatakuliahController@detail');

Route::get('Matakuliah/edit_matakuliah', 'MatakuliahController@edit_matakuliah')->middleware('cek');


Auth::routes();
Route::get('/home', 'HomeController@index');

