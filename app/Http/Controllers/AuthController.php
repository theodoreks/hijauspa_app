<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $credentials['username'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['username' => 'Username atau password salah.'])->withInput();
        }

        Auth::login($user);

        return match ($user->role) {
            'karyawan'  => redirect()->route('berandakaryawan.karyawan'),
            'pelanggan' => redirect()->route('beranda.beranda'),
            default     => redirect()->route('login')->withErrors(['username' => 'Peran tidak dikenali.']),
        };
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function registerForm()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        // Debug: pastikan semua field dikirim
        // dd($request->all());

        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'no_hp' => 'required|string|max:20',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'pelanggan'
        ]);

        Auth::login($user);
        return redirect()->route('beranda.beranda');
    }
}
