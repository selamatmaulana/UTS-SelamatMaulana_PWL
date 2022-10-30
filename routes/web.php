<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\datadiriController;
use App\Http\Controllers\handphone;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->middleware(['auth'])->name('dashboard');


    Route::get('/admin/logout', [adminController::class, 'logout'])->name('admin.logout');
});
Route::get('/datadiri', [datadiriController::class, 'index']);
Route::get('/home', function () {
    return view('landing.index');
});
Route::get('/hidup', function () {
    return view('data_diri', [
        'img' => "image/metyu.jpg",
        'nama' => "Selamat maulana",
        'alamat' => "banyuwangi",
        'TTL' => "Batam",
        'riwayat_Pendidikan' => [
            "Banyuwangi",
            "Sumenep",
        ],
        'pengalaman_berorganisasi' => [
            "sosis",
            "tahu bulat",
            "kacang",
        ]
    ]);
});
Route::get('/diri', function () {
    return view('data_diri', [
        'img' => "image/metyu.jpg",
        'nama' => "alam
         maulana",
        'alamat' => "banyuwangi",
        'TTL' => "Batam",
        'riwayat_Pendidikan' => [
            "Banyuwangi",
            "Sumenep",
        ],
        'pengalaman_berorganisasi' => [
            "sosis",
            "tahu bulat",
            "kacang",
        ]
    ]);
});
Route::get('/layout', function () {
    return view('tugas_layout', [
        'img' => "image/metyu.jpg",
        'nama' => "alam
         maulana",
        'alamat' => "banyuwangi",
        'TTL' => "Batam",
        'riwayat_Pendidikan' => [
            "Banyuwangi",
            "Sumenep",
        ],
        'pengalaman_berorganisasi' => [
            "sosis",
            "tahu bulat",
            "kacang",
        ]
    ]);
});
Route::get('/halaman', function () {
    $title  =  'Harry  Pooter';
    $konten  =  'harry  potter  and  the  deathly  hallows:  part  2';
    return  view('tugas_layout', compact('title', 'konten'));
});
Route::get('/artikel', [ArtikelController::class, 'berita']);
Route::get('/jenis_artikel/{kode}', [ArtikelController::class, 'jenis']);

Route::get('daftar_barang', [handphone::class, 'daftarBarang'])->name('daftarBarang.view');
Route::get('review_Barang/{id}', [handphone::class, 'reviewBarang'])->name('reviewBarang.view');