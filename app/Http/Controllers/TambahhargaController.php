<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\harga as RequestsHarga;
use App\Models\harga;

class TambahhargaController extends Controller
{
    public function harga()
    {  
        $harga = harga::all();
        return view('/admin/harga',compact('harga'));
    }

    public function updateharga($id)
    {
        $harga = harga::find($id);
        return view('/admin/editharga',compact('harga'));
    }
    public function update($id,request $request)
    {
        $harga = harga::find($id);
        $harga -> update($request -> all());
   return redirect('/admin/harga')->with('msg', 'Berhasil Edit Harga');
    }
}
