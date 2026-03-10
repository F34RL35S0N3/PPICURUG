<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    public function index(Request $request)
    {
        $query = Surat::latest();

        if ($request->filled('jenis')) {
            $query->where('jenis_surat', $request->jenis);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('perihal', 'like', "%{$s}%")
                  ->orWhere('pengirim', 'like', "%{$s}%")
                  ->orWhere('penerima', 'like', "%{$s}%")
                  ->orWhere('nomor_surat', 'like', "%{$s}%");
            });
        }

        $surat = $query->paginate(10)->withQueryString();

        $stats = [
            'total'     => Surat::count(),
            'diproses'  => Surat::where('status', 'Diproses')->count(),
            'disetujui' => Surat::where('status', 'Disetujui')->count(),
            'ditolak'   => Surat::where('status', 'Ditolak')->count(),
            'selesai'   => Surat::where('status', 'Selesai')->count(),
        ];

        return view('surat.index', compact('surat', 'stats'));
    }

    public function create()
    {
        $jenisList  = Surat::jenisSuratList();
        $statusList = Surat::statusList();
        return view('surat.create', compact('jenisList', 'statusList'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat'    => 'nullable|string|max:100',
            'jenis_surat'    => 'required|string',
            'perihal'        => 'required|string|max:255',
            'pengirim'       => 'required|string|max:255',
            'penerima'       => 'required|string|max:255',
            'tanggal_surat'  => 'required|date',
            'tanggal_terima' => 'nullable|date',
            'status'         => 'required|in:Diproses,Disetujui,Ditolak,Selesai',
            'keterangan'     => 'nullable|string',
            'file'           => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('file')) {
            $validated['file_path'] = $request->file('file')->store('surat', 'public');
        }

        Surat::create($validated);

        return redirect()->route('surat.index')->with('success', 'Surat berhasil ditambahkan!');
    }

    public function show(Surat $surat)
    {
        return view('surat.show', compact('surat'));
    }

    public function edit(Surat $surat)
    {
        $jenisList  = Surat::jenisSuratList();
        $statusList = Surat::statusList();
        return view('surat.edit', compact('surat', 'jenisList', 'statusList'));
    }

    public function update(Request $request, Surat $surat)
    {
        $validated = $request->validate([
            'nomor_surat'    => 'nullable|string|max:100',
            'jenis_surat'    => 'required|string',
            'perihal'        => 'required|string|max:255',
            'pengirim'       => 'required|string|max:255',
            'penerima'       => 'required|string|max:255',
            'tanggal_surat'  => 'required|date',
            'tanggal_terima' => 'nullable|date',
            'status'         => 'required|in:Diproses,Disetujui,Ditolak,Selesai',
            'keterangan'     => 'nullable|string',
            'file'           => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
        ]);

        if ($request->hasFile('file')) {
            if ($surat->file_path) {
                Storage::disk('public')->delete($surat->file_path);
            }
            $validated['file_path'] = $request->file('file')->store('surat', 'public');
        }

        $surat->update($validated);

        return redirect()->route('surat.index')->with('success', 'Surat berhasil diperbarui!');
    }

    public function destroy(Surat $surat)
    {
        if ($surat->file_path) {
            Storage::disk('public')->delete($surat->file_path);
        }
        $surat->delete();

        return redirect()->route('surat.index')->with('success', 'Surat berhasil dihapus!');
    }
}
