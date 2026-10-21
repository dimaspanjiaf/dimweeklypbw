<?php
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});


Route::get('/berita', [BeritaController::class, 'tampildata']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak", 
    ]);
});


Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Dimas Panji",
        "nim" => "13242520015",
        "prodi" => "Teknik Industri",
        "image" => "profile.jpg"
    ]);
});
