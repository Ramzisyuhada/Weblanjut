<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateProfileRequest;


class GantipasswordController extends Controller
{
    public function pwdedit(UpdateProfileRequest $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password'         => ['required', 'min:8', 'confirmed'],
        ]);
        $user = Auth::user();
        if (!$user) {
            abort(403);
        }
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect('/admin/edtpassword')->with('error', 'Kata sandi sekarang salah!');
        }

        $user->fill($request->only(['password']));
        $user->saveOrFail();

        

        return redirect()->route('aksiedit1')
        ->with('success', 'Profil berhasil diedit!');
    }
    }

