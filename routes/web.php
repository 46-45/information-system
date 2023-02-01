<?php

use App\Models\Students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentsController;

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
    $jumlahsiswa = Students::count();
    $jumlahsiswapria = Students::where('jeniskelamin','laki-laki')->count();
    $jumlahsiswawanita = Students::where('jeniskelamin','perempuan')->count();

    return view('welcome', compact('jumlahsiswa','jumlahsiswapria','jumlahsiswawanita'));
})->middleware('auth');

Route::get('/murid',[StudentsController::class, 'index'])->name('murid')->middleware('auth');

Route::get('/tambahsiswa',[StudentsController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/insertdata',[StudentsController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[StudentsController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[StudentsController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[StudentsController::class, 'delete'])->name('delete');

//ExportPDF
Route::get('/exportpdf',[StudentsController::class, 'exportpdf'])->name('exportpdf');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginloginproses');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout',[LoginController::class, 'logout'])->name('logout');