<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Berhasil login!');
        }

        return back()
            ->with('error', 'Username atau password salah')
            ->withInput($request->only('username'));
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "username" => "required|unique:users",
            "email" => "required|email|unique:users",
            "phone" => "required",
            "password" => "required|min:6"
        ], [
            "name.required" => "Nama tidak boleh kosong",
            "username.required" => "Username tidak boleh kosong",
            "username.unique" => "Username sudah digunakan",
            "email.required" => "Email tidak boleh kosong",
            "email.email" => "Format email tidak valid",
            "email.unique" => "Email sudah digunakan",
            "phone.required" => "Nomor telepon tidak boleh kosong",
            "password.required" => "Password tidak boleh kosong",
            "password.min" => "Password minimal 6 karakter"
        ]);

        try {
            $user = User::create([
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password'])
            ]);

            return redirect()->route('register')->with('success', 'Registrasi berhasil!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat registrasi')->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Berhasil logout!');
    }
}
