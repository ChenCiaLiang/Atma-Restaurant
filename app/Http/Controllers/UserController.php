<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        $user = auth('user')->user();

        return view('user/main/profile', compact('user'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
            'no_telp' => 'required|string',
            'tgl_lahir' => 'required',
        ]);

        $fotoPath = 'user_profile/default.jpeg';  

        try {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'no_telp' => $request->no_telp,
                'tgl_lahir' => $request->tgl_lahir,
                'foto' => $fotoPath,
            ]);
            return redirect()->intended('login')->with('success', 'Berhasil membuat user'); 
        } catch (Exception $e) {
            return redirect()->intended('sign-up')->with('error', 'Gagal membuat user'); 
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admins = Admin::where('username', $request->username)->first();

        if ($admins && $request->password == $admins->password) {
            Auth::guard('admin')->login($admins);
            return redirect()->intended('admin_dashboard')->with('success', 'Berhasil login');
        } else {
            $users = User::where('username', $request->username)->first();
            if (!$users || !Hash::check($request->password, $users->password)) {
                return redirect()->intended('login')->with('failed', 'Akun tidak ditemukan');
            }
            Auth::guard('user')->login($users);
            return redirect()->intended('/')->with('success', 'Berhasil login');
        }
    }

    public function updateProfile(Request $request)
{
    // Ambil pengguna yang sedang login
    $user = auth('user')->user();

    // Validasi data input
    $request->validate([
        'username' => 'required|string|max:255|unique:users,username,' . $user->id_user,
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id_user,
        'no_telp' => 'required|string|max:15',
        'tgl_lahir' => 'required|date|before:today',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Path default untuk foto (jika tidak ada perubahan)
    $fotoPath = $user->foto;

    // Periksa apakah foto baru diunggah
    if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
        // Hapus foto lama jika ada
        if (!is_null($user->foto) && File::exists(public_path('storage/' . $user->foto))) {
            File::delete(public_path('storage/' . $user->foto));
        }

        // Simpan foto baru ke direktori storage
        $fotoPath = $request->file('foto')->store('user_profile', 'public');
    }

    // Update data pengguna
    $user->update([
        'username' => $request->username,
        'email' => $request->email,
        'no_telp' => $request->no_telp,
        'tgl_lahir' => $request->tgl_lahir,
        'foto' => $fotoPath,
    ]);

    // Redirect ke halaman profil dengan pesan sukses
    return redirect()->route('user.profile')->with('success', 'Profil berhasil diperbarui.');
}


    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect('/');
    }
}
