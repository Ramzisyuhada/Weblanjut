<?php

use App\Http\Controllers\user1;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\adminedit;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Transaksicontroller;
use App\Http\Controllers\TambahhargaController;
use App\Http\Controllers\GantipasswordController;
use App\Http\Controllers\Tambahtransaksicontroller;

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


Route::get('/',function(){
    return view('leanding');
});

Route::get('register',([RegisterController::class,'register'])) ->name('register');
Route::post('aksiregister',([RegisterController::class,'aksiregister'])) ->name('aksiregister');


Route::controller(LoginController::class) -> group(function(){
    Route::get('index','index')->name('index');
    Route::post('aksilogin','aksilogin')->name('aksilogin');
});

Route::controller(EditController::class) -> group(function(){
    Route::get('/user/edituser','edit')->name('aksiedit1');
    Route::patch('aksiedit','aksiedit')->name('aksiedit');

});
Route::controller(GantipasswordController::class) -> group(function(){
    Route::patch('pwdedit','pwdedit')->name('pwdedit');
});


Route::controller(Admin::class) -> group(function(){
    Route::get('logout','logout')->name('logout');
    Route::get('/admin/dashboard','admin')->name('admin')->middleware(['auth','ceklogin']);;
    Route::get('/admin/pelanggan','daftar')->name('daftar')->middleware(['auth','ceklogin']);;;
    Route::Get('/admin/editpelanggan','edttampil')->name('edttampil')->middleware(['auth','ceklogin']);;
    Route::get('/admin/{id}/editpelanggan','edit')->name('edit');
    Route::post('/admin/{id}/editpelanggan','update')->name('update')->middleware(['auth','ceklogin']);;
    Route::get('/destroy/{id}/editpelanggan','destroy')->name('destroy')->middleware(['auth','ceklogin']);;
    Route::get('/admin/registeradmin','register')->middleware(['auth','ceklogin'])->middleware(['auth','ceklogin']);;;;
    Route::post('actionregister','actionregister')->name('actionregister')->middleware(['auth','ceklogin']);;
    Route::get('/admin/tambahpelanggan','tambah')->name('tambah')->middleware(['auth','ceklogin']);;
    Route::post('aksitambah','aksitambah')->name('aksitambah')->middleware(['auth','ceklogin']);;
    Route::get('/admin/pakaian','pakaian')->name('pakaian')->middleware(['auth','ceklogin']);;
    Route::get('/admin/pakaianedit','tambahpakaian')->name('tambahpakaian')->middleware(['auth','ceklogin']);;
    Route::Post('tambahpakaian1','tambahpakaian1')->name('tambahpakaian1')->middleware(['auth','ceklogin']);;
    Route::get('/admin/{id}/pakaianedit','hancur')->name('hancur')->middleware(['auth','ceklogin']);;
});

Route::controller(TambahhargaController::class) -> group(function(){
    Route::get('/admin/harga','harga')->name('harga')->middleware(['auth','ceklogin']);;;
    Route::get('/admin/{id}/editharga','updateharga')->name('updateharga')->middleware(['auth','ceklogin']);;;
    Route::post('/admin/{id}/editharga','update')->name('update')->middleware(['auth','ceklogin']);;;
});

Route::controller(Transaksicontroller::class) -> group(function(){
    Route::get('/admin/transaksi','transaksi')->name('transaksi')->middleware(['auth','ceklogin']);;;
});
Route::controller(Tambahtransaksicontroller::class) -> group(function(){
    Route::get('/admin/tambahtransaksi','transaksi')->name('transaksi')->middleware(['auth','ceklogin']);;;
    Route::post('create','create')->name('create')->middleware(['auth','ceklogin']);;;
    Route::get('/admin/{id}/edttransaksi','edttransaksi')->name('edttransaksi')->middleware(['auth','ceklogin']);;;
    Route::post('/admin/{id}/edttransaksi','update')->name('update')->middleware(['auth','ceklogin']);;;
    Route::get('/destroy/{id}','destroy')->name('destroy')->middleware(['auth','ceklogin']);;;
    
});

Route::controller(user1::class) -> group(function(){
    Route::get('/user/history','user');
    Route::post('aksiedit','aksiedit')->name('aksiedit');
});

Route::controller(adminedit::class)->group(function(){
    Route::get('/admin/edit','edit')->name('edit');
    Route::patch('aksiedit','aksiedit')->name('aksiedit');
});


