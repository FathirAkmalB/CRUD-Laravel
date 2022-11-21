<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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


// menampilkan data ke tampilan pegawai
Route::get('/pegawai',[EmployeeController::class,'index'])-> name('pegawai');

// menambahkan data dengan metode get dan post
Route::get('/tambahdata',[EmployeeController::class,'tambahdata'])-> name('tambahdata');
Route::post('/insertdata',[EmployeeController::class,'insertdata'])-> name('insertdata');

// membuat perubahan pada data
Route::get('/tampildata/{id}',[EmployeeController::class,'tampildata'])-> name('tampildata');
Route::post('/updatedata/{id}',[EmployeeController::class,'updatedata'])-> name('updatedata');

// hapus data
Route::get('/hapus/{id}',[EmployeeController::class,'hapus'])-> name('hapus');