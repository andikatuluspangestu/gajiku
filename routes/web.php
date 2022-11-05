<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Data Pegawai
Route::get('/pegawai',[EmployeeController::class, 'index'])->name('pegawai');

// Halaman Tambah Data
Route::get('/tambahpegawai',[EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');

// Insert Data
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');

// Edit Data
// Route::get('/editdata/{id}',[EmployeeController::class, 'editdata'])->name('editdata');

// Tampilkan Data
Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata');

// Update Data
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');

// Delete Data
Route::get('/deletedata/{id}', [EmployeeController::class, 'deletedata'])->name('deletedata');