<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect('/');
    }
}
