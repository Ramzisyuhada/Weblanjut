<?php

namespace App\Http\Controllers;

use App\Http\Requests\harga;
use App\Models\harga as ModelsHarga;
use App\Models\item;
use App\Models\kategori;
use App\Models\layanan;
use App\Models\Status;
use App\Models\Transaksi;
use App\Models\user1;
use Illuminate\Http\Request;

class Tambahtransaksicontroller extends Controller
{

    public function transaksi()
    {
        $transaksi = Transaksi::all();
        $user1 = user1::all();
        $layanan= layanan::all();
        $kategori= kategori::all();
        $jenis = item::all();
        $status = Status::all();
        $harga = ModelsHarga::all();
       return view('/admin/tambahtransaksi',compact(['user1'],['layanan'],['kategori'],['jenis'],['transaksi'],['harga'],['status']));
    }
    public function create(Request $request)
    {
        
       Transaksi::create([
        'Berat'=>$request->Berat,
        'user_id'=>$request->user_id,
        'user_item'=>$request->user_item,
        'user_layanan'=>$request->user_layanan,
        'user_kategori'=>$request->user_kategori,
        'selesai'=>$request->selesai,
        'harga_id'=>$request->harga_id,
       ]);

       return redirect()->back()->with('success', 'Berhasil di tambah');
    }
    public function edttransaksi($id)
    {
        $transaksi = Transaksi::find($id);
        $status = Status::all();
  
       return view('/admin/edttransaksi',compact(['transaksi'],['status']));
    }
    public function update(Request $request,$id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi -> update($request -> all());
        return redirect()->back()->with('msg', 'Berhasil Mengubah Harga');
    }
    public function destroy($id)
    {
        $transaksi = transaksi::findorfail($id);
        $transaksi ->delete();;
        return redirect()->back()->with('hapus', 'Berhasil di dihapus');
    }
}
