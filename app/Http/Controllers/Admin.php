<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\User;
use App\Models\harga;
use App\Models\user1;
use App\Models\Status;
use App\Models\layanan;
use App\Models\kategori;
use App\Models\siapambil;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\jumlahtransaksi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class Admin extends Controller
{
    public function register()
    {
        return view('/admin/registeradmin');
    }
    public function actionregister(request $request)
    {
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        $transaksi = Transaksi::all();
        $user1 = user1::all()->count();
        $layanan= layanan::all();
        $kategori= kategori::all();
        $jenis = item::all();
        $status = Status::all();
        $harga = harga::all();
        $jumlahuser = User::where('role','2')->count();
        $jumlahtransaksi = jumlahtransaksi::count();
        $cuciansiap1 = jumlahtransaksi::where('user_status','1')->count();
        $cuciansiap2 = jumlahtransaksi::where('user_status','2')->count();
        $cuciansiap3 = jumlahtransaksi::where('user_status','3')->count();
       return view('/admin/dashboard',compact(['user1'],['layanan'],['kategori'],['jenis'],['transaksi'],['harga'],['status']
       ,['jumlahtransaksi'],['jumlahuser'],['cuciansiap1'],['cuciansiap2'],['cuciansiap3']));
    }
    public function admin()
    {
        $transaksi = Transaksi::all();
        $user1 = user1::all()->count();
        $layanan= layanan::all();
        $kategori= kategori::all();
        $jenis = item::all();
        $status = Status::all();
        $harga = harga::all();
        $jumlahuser = User::where('role','2')->count();
        $jumlahtransaksi = jumlahtransaksi::count();
        $cuciansiap1 = jumlahtransaksi::where('user_status','1')->count();
        $cuciansiap2 = jumlahtransaksi::where('user_status','2')->count();
        $cuciansiap3 = jumlahtransaksi::where('user_status','3')->count();
       return view('/admin/dashboard',compact(['user1'],['layanan'],['kategori'],['jenis'],['transaksi'],['harga'],['status']
       ,['jumlahtransaksi'],['jumlahuser'],['cuciansiap1'],['cuciansiap2'],['cuciansiap3']));
    }
    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('index')->with('logout', 'Anda telah Logout');
}
public function daftar()
{
    $users = User::all()->where('role','2');
    return view('/admin/pelanggan',compact(['users']));
}
public function edttampil()
{
    return view('/admin/editpelanggan');
}
public function edit($id)
{
    $users = user::find($id);
    return view('/admin/editpelanggan',compact(['users']));
}

public function update(Request $request,$id)
{
   $users = User::find($id);
   $users -> update($request -> all());
   return redirect()->back()->with('success', 'Berhasil di edit');
}
public function tambah(){
    return view('/admin/tambahpelanggan');
}
public function destroy($id)
{
    $users = User::findorfail($id);
    $users ->delete();;
    return redirect()->back()->with('hapus', 'Berhasil di dihapus');
}

  public function aksitambah(Request $request)
  {
    $request->validate([
        'email' => 'unique:users',
        'name' => 'unique:users',
        'nomertelepon' => 'unique:users'
    ],[
        'name.unique' => 'Nama sudah digunakan',
        'email.unique' => 'Email sudah digunakan',
        'nomertelepon.unique' => 'nomertelepon sudah digunakan',
    ]);
    user::create([
        'email' => $request->email,
        'name' => $request->name,
        'alamat' => $request->alamat,
        'nomertelepon' => $request->nomertelepon,
        'password' => Hash::make($request->password),
    ]);
    return redirect('/admin/dashboard')->with('tambah', 'Berhasil di ditambahkan');;
  }   
  
  public function pakaian()
  {
    $pakaian = item::all();
   return view('/admin/pakaian',compact(['pakaian']));
  }
  public function tambahpakaian()
  {
   return view('/admin/pakaianedit');
  }
  public function tambahpakaian1(Request $request)
  {
    item::create([
        'name' => $request -> name,
    ]);
    return redirect('/admin/pakaian')->with('msg','Pakaian Berhasil di tambahkan');
  }
  public function hancur($id)
  {
    $pakaian = item::findorfail($id);
    $pakaian ->delete();
    return redirect('/admin/pakaian')->with('hapus','Pakaian Berhasil di Hapus');
  }
  
}

