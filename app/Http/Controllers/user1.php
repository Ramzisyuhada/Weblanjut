<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class user1 extends Controller
{
    public function user()
    {
       
        $transaksi = Transaksi::all()->where('user_id',Auth::user()->id);
        return view('/user/history',compact(['transaksi']));
    }
}
