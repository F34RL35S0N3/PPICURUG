<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting.index', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'          => 'required|string|max:255',
            'username'      => 'nullable|string|max:100',
            'nama_panggilan'=> 'nullable|string|max:100',
            'email'         => 'required|email|unique:users,email,' . $user->id,
            'no_telepon'    => 'nullable|string|max:20',
            'jabatan'       => 'nullable|string|max:100',
            'foto'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'password'      => 'nullable|min:8|confirmed',
        ]);

        $data = [
            'name'           => $request->name,
            'username'       => $request->username,
            'nama_panggilan' => $request->nama_panggilan,
            'email'          => $request->email,
            'no_telepon'     => $request->no_telepon,
            'jabatan'        => $request->jabatan,
        ];

        // Upload foto
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }
            $data['foto'] = $request->file('foto')->store('profile', 'public');
        }

        // Update password jika diisi
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('setting.index')->with('success', 'Profil berhasil diperbarui!');
    }
}
