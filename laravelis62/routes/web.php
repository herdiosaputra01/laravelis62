<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dosenController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });

// Route::get('mahasiswa/{nama}', function ($nama){
//     echo "Ini Halaman Mahasiswa dengan nama $nama";
// });

// Route::get('/hello/hello2/hellolagi', function () {
//     echo "Hello World";
// });

// Route::get('/mahasiswa', function(){
//     $kelas = "IS62";
//     $data = ["hanif", "herdio", "erik", "rahmad", "yasser", "yyy"];

//     // return view('mahasiswa.index')
//     // ->with('mhs', $data)
//     // ->with('kls', $kelas);
//     return view('mahasiswa.index', compact('kelas', 'data'));
// });

// Route::get('/mahasiswa', function(){
//     $nama = "Hanif Ferdiansyah";
//     $nilai = 60;

//     $nilai2 = [85,70,50,70,35,100];

//     return view('mahasiswa', compact('nama','nilai','nilai2'));

Route::get('/mahasiswa', function(){
    $data_mhs = ["Abdul", "Adha", "Aidil", "Alif", "Asfal"];
    return view('layout.mahasiswa', compact('data_mhs'));
});

Route::get('/dosen', function(){
    $data_dos = ["Ismanuddin", "Mustofa Lutfi", "Rita Warni", "Ridha Ansari", "Dzulgunar M Nasir"];
    return view('layout.dosen', compact('data_dos'));
});

Route::get('/galeri', function(){
    return view('layout.galeri');
});





Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//data dosen
Route::get('/dosen', [dosenController::class, 'index']);
Route::get('/dosen/tambah', [dosenController::class, 'create']);