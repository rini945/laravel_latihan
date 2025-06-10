<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/artikel1', function () {
    return view('artikel1');
});
Route::get('/artikel2', function () {
    return view('artikel2');
});
Route::get('/bioskop/blog_film', function () {
    return view('bioskop.blog_film');
});
Route::get('/bioskop/file1', function () {
    return view('bioskop.file1');
});
Route::get('/bioskop/file2', function () {
    return view('bioskop.file2');
});
Route::get('/bioskop/file3', function () {
    return view('bioskop.file3');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/barangs', [BarangController::class, 'index'])->name('barangs');

Route::resource('barangs', BarangController::class);

Route::put('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');
