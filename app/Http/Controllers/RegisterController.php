<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        $title = 'SPK WP | Register';

        return view('login.register', compact('title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:8|max:255|confirmed',
            'password_confirmation' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        // Kirim email verifikasi
        $user->sendEmailVerificationNotification();

        // Login user setelah registrasi
        Auth::login($user);

        alert()->success('Registrasi Sukses!', 'Akun Anda telah dibuat. Silakan periksa email Anda untuk verifikasi.');

        return redirect()->route('verification.notice');
    }
}
