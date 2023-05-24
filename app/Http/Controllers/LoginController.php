<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        if($user = Auth::user()){
            if($user -> role == '1'){
                return redirect()->intended('admin/dashboard');
            }elseif($user -> role == '2'){
                return redirect()->intended('user/history');
            }
        }
       
        return view('index');
    }
    public function aksilogin(Request $request)
    {
        $data = [
            
            'email' => $request->email,
            'password'=> $request->password,
        ];
        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            $user1 = Auth::user(); 
                if ($user1 -> role == '1') {
                    return redirect()->intended('admin/dashboard')->with('Berhasil', 'Halo Boss');
                    
                }else if($user1 -> role =='2'){
                    return redirect()->intended('user/history');
                }else{
                    return redirect()->intended('index')->with('Gagal', 'Password atau email anda salah');; 
                }
                 return redirect()->intended('index')->with('Gagal', 'Password atau email anda salah');;
        }
     
        return redirect()->intended('index')->with('Gagal', 'Password atau email anda salah');;;
}

}