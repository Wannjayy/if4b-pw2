<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    //return "Halo Semua";
    return "<a href='".route('call')."'>".route('call')."</a>";
});

Route::get('/kampus', function () {
    echo "<h2>Halo Semua</h2>";
    echo "Kami kuliah di Kampus MDP";
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    echo "<h2>Halo Semua</h2>";
    echo "Nama Saya $nama";
});

Route::get('/mahasiswa/{nama?}', function ($nama='Ahmad') {
    echo "<h2>Halo Semua</h2>";
    echo "Nama Saya $nama";
});

Route::get('/profil/{nama?}/{pekerjaan?}', function ($nama='Ahmad', $pekerjaan='Mahasiswa') {
    echo "<h2>Halo Semua</h2>";
    echo "Nama Saya $nama, sebagai $pekerjaan";
})->where('nama', '[A-Z]+');

Route::get('/hubungi', function () {
    echo "<h2>Hubungi Kami</h2>";
})->name('call');
Route::redirect('/contact','/hubungi');

Route::prefix('/dosen')->group(function () {
    Route::get('/jadwal', function () {
        echo "<h2>Jadwal</h2>";
    });
    Route::get('/materi', function () {
        echo "<h2>Materi Perkuliahan</h2>";
    });
});

Route::get('/dosen', function (){
    return view('dosen');
});

Route::get('/dosen/index', function (){
    return view('dosen.index');
});

Route::get('/fakultas', function (){
    // return view('fakultas.index',["ilkom"=>"Fakultas Ilmu Komputer dan Rekayasa"]);
    // return view('fakultas.index',["fakultas"=>["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"]]);
    // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa","Fakultas Ilmu Ekonomi"]);
    $kampus = "Universitas Multi Data Palembang";
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];
    return view('fakultas.index', compact('fakultas','kampus'));
});

Route::get('/prodi',[ProdiController::class,'index']);