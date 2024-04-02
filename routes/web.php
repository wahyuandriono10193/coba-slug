<?php

use App\Http\Controllers\BeritaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BeritaController::class,'index'])->name('berita');

Route::get('/berita/create',[BeritaController::class,'create'])->name('berita.create');

Route::post('/berita',[BeritaController::class,'store'])->name('berita.store');

Route::get('/berita/{id}/edit',[BeritaController::class,'edit'])->name('berita.edit');

Route::put('/berita/update/{id}',[BeritaController::class,'update'])->name('berita.update');

Route::delete('/berita/delete/{id}',[BeritaController::class,'destroy'])->name('berita.destroy');
