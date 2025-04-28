<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::paginate(10);
        return view('pendaftaran.index', compact('pendaftarans'));
    }

    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peserta' => 'required|string|max:255',
            'email' => 'required|email',
            'nama_kursus' => 'required|string|max:255',
            'kategori_kursus' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status_pendaftaran' => 'required|in:terdaftar,aktif,selesai,dibatalkan',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil ditambahkan.');
    }

    public function show(Pendaftaran $pendaftaran)
    {
        return view('pendaftaran.show', compact('pendaftaran'));
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $request->validate([
            'nama_peserta' => 'required|string|max:255',
            'email' => 'required|email',
            'nama_kursus' => 'required|string|max:255',
            'kategori_kursus' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'status_pendaftaran' => 'required|in:terdaftar,aktif,selesai,dibatalkan',
        ]);

        $pendaftaran->update($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus.');
    }

    public function riwayat()
    {
        $pendaftarans = Pendaftaran::onlyTrashed()->paginate(10);
        return view('pendaftaran.riwayat', compact('pendaftarans'));
    }

    public function restore($id)
    {
        $pendaftaran = Pendaftaran::onlyTrashed()->findOrFail($id);
        $pendaftaran->restore();

        return redirect()->route('pendaftaran.riwayat')->with('success', 'Pendaftaran berhasil dipulihkan.');
    }
}
