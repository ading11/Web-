<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProfilePageController extends Controller
{

    public function edit(){
        $user = Auth::user();
        return view('profilepage', compact('user'));
    }

    public function update(Request $request)
{
    $user = Auth::user();

    // Validasi input
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users,email,'.$user->id,
    ]);

    // Update profil pengguna
    $user->update($validatedData);

    // Validasi input
    $validatedData = $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:6|confirmed',
    ]);

    // Periksa kecocokan kata sandi saat ini
    if (!Hash::check($request->input('current_password'), $user->password)) {
        return redirect()->back()->withErrors(['current_password' => 'Kata sandi saat ini tidak cocok.']);
    }

    // Update kata sandi pengguna
    $user->update(['password' => Hash::make($request->input('new_password'))]);

    return redirect('/profile');
}
}
