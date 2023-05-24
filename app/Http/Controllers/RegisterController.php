<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
       return view('register');
    }
    public function aksiregister(Request $request)
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
        User::Create([
            'email' => $request->email,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'nomertelepon' => $request->nomertelepon,
            'password' => Hash::make($request->password),
           
        ]);
        return redirect('index')->with('Succees', 'Anda telah Berhasil membuat akun');
    }
}
