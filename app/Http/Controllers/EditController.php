<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateProfileRequest;

class EditController extends Controller
{
    public function edit(): View
    {
        $user = Auth::user();

        return view('/user/edituser', compact('user'));
    }
   

    /**
     * Method to process user profile edit
     *
     * @param  \App\Http\Requests\Profile\UpdateProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function aksiedit(UpdateProfileRequest $request): RedirectResponse
    {
        $user = Auth::user();

        if (!$user) {
            abort(403);
        }

        $request->validate([
            'email' => 'unique:users',
            'name' => 'unique:users',
            'nomertelepon' => 'unique:users',
            ],[
            'name.unique' => 'Nama sudah digunakan',
            'email.unique' => 'Email sudah digunakan',
            'nomertelepon.unique' => 'nomertelepon sudah digunakan',
            ]);
            $user->fill([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'nomertelepon'=>$request->nomertelepon,
            'password'=>Hash::make($request->password),]);

        $user->save();

        return redirect('/user/edituser')->with('success', 'Profil berhasil diedit!');
    }
}
