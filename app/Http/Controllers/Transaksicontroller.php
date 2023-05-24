<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class Transaksicontroller extends Controller
{
        public function transaksi()
    {
       $transaksi = Transaksi::all();
       return view('/admin/transaksi', compact('transaksi'));
    }
    
}
