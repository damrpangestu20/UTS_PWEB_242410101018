<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    // Menampilkan form login
    public function showLogin()
    {
        return view('login');
    }

    // Memproses login (simulasi)
    public function processLogin(Request $request)
    {
        // Validasi sederhana
        $request->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:4'
        ]);

        // Simulasi username & password valid (hardcoded)
        $validUsername = 'admin';
        $validPassword = 'admin123';

        if ($request->username === $validUsername && $request->password === $validPassword) {
            // Simpan username ke session (agar bisa dipakai di dashboard & profile)
            session(['username' => $request->username]);
            // Redirect ke dashboard
            return redirect()->route('dashboard');
        }

        // Jika gagal, kembali ke login dengan error
        return back()->withErrors(['login' => 'Username atau password salah.']);
    }

    // Halaman dashboard
    public function dashboard()
    {
        // Ambil username dari session
        $username = session('username');
        if (!$username) {
            return redirect()->route('login')->withErrors('Silakan login terlebih dahulu.');
        }

        // Data dinamis untuk dashboard (bisa array statis)
        $stats = [
            'totalProduk' => 12,
            'totalPesanan' => 34,
            'pendapatan' => 'Rp 4.500.000'
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    // Halaman profil
    public function profile()
    {
        $username = session('username');
        if (!$username) {
            return redirect()->route('login');
        }

        // Data dummy profil
        $profile = [
            'name' => 'Administrator',
            'email' => 'admin@hidroponik.com',
            'role' => 'Super Admin',
            'registered' => '2024-01-15'
        ];

        return view('profile', compact('username', 'profile'));
    }

    // Halaman pengelolaan (menampilkan array data dinamis)
    public function pengelolaan()
    {
        $username = session('username');
        if (!$username) {
            return redirect()->route('login');
        }

        // Array data dinamis - contoh produk hidroponik
        $items = [
            ['id' => 1, 'nama' => 'Paket Nutrisi AB Mix', 'kategori' => 'Nutrisi', 'stok' => 45, 'harga' => 85000],
            ['id' => 2, 'nama' => 'Rockwool 50 lembar', 'kategori' => 'Media Tanam', 'stok' => 120, 'harga' => 125000],
            ['id' => 3, 'nama' => 'Benih Selada', 'kategori' => 'Benih', 'stok' => 200, 'harga' => 15000],
            ['id' => 4, 'nama' => 'pH Meter Digital', 'kategori' => 'Alat', 'stok' => 8, 'harga' => 350000],
        ];

        // Bisa juga data pesanan dll. Sesuai kreativitas
        return view('pengelolaan', compact('username', 'items'));
    }

    // Logout (hapus session)
    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}