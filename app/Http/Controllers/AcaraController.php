<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        $acara = Acara::orderBy('tanggal', 'asc')->orderBy('jam', 'asc')->get();
        return view('acara.index', compact('acara'));
    }

    public function create()
    {
        return view('acara.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_acara' => 'required|string|max:255',
            'tanggal'    => 'required|date',
            'jam'        => 'required',
            'keterangan' => 'nullable|string',
        ]);

        Acara::create($request->only(['nama_acara', 'tanggal', 'jam', 'keterangan']));

        return redirect()->route('acara.index')->with('success', 'Acara berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $acara = Acara::findOrFail($id);
        return view('acara.edit', compact('acara'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_acara' => 'required|string|max:255',
            'tanggal'    => 'required|date',
            'jam'        => 'required',
            'keterangan' => 'nullable|string',
        ]);

        $acara = Acara::findOrFail($id);
        $acara->update($request->only(['nama_acara', 'tanggal', 'jam', 'keterangan']));

        return redirect()->route('acara.index')->with('success', 'Acara berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Acara::findOrFail($id)->delete();
        return redirect()->route('acara.index')->with('success', 'Acara berhasil dihapus!');
    }
}
