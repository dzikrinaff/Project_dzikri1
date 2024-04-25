<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    $nama = "Dzikri";
    $jenis_kelamin = "laki laki";
    $pendidikan_terakhir = "s2";
    $pekerjaan = "sekolah";
    $alamat = "bandung"; 
    return view('data_diri' , compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan','alamat'));

});


Route::get('/', function () {
    return view('pelajaran');
});
Route::get('/mapel', function () {
    $senin = "Mtk, Pai ,B indo, Ipa";
    $selasa= "Pjok, Bhs inggris, ips ";
    $rabu = "Pai , B indo, Fisika";
    $kamis = "Ips , Mtk, Ips , Pjok";
    $jumat = "Ipa, Pai, Ips , Bhs inggris"; 
    return view('jadwal_pel' , compact('senin','selasa','rabu','kamis','jumat'));

});

Route::get('/about2/{nama2}/{jenis_kelamin2}/{pendidikan2}/{pekerjaan2}/{alamat2}' , function (Request $request, $nama2, $jenis_kelamin2, $pendidikan2, $pekerjaan2, $alamat2) {
   $nama = $nama2;
   $jenis_kelamin = $jenis_kelamin2;
   $pendidikan = $pendidikan2;
   $pekerjaan =$pekerjaan2;
   $alamat = $alamat2;
    return view('biodata2' , compact('nama','jenis_kelamin','pendidikan','pekerjaan','alamat'));

});
