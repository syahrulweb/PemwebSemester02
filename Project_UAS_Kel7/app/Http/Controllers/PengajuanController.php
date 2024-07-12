<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index()
    {
        $list_pengajuan = Pengajuan::all();
        return view('pengajuan.index', compact('list_pengajuan'));
    }

    public function create()
    {
        return view('pengajuan.create');
    }

    public function store(Request $request)
    {
        $pengajuan = new Pengajuan;
        $pengajuan->tanggal_awal = $request->tanggal_awal;
        $pengajuan->tanggal_akhir = $request->tanggal_akhir;
        $pengajuan->jumlah = $request->jumlah;
        $pengajuan->ket = $request->ket;
        $pengajuan->status = 'pending';
        $pengajuan->nip = $request->nip;
        $pengajuan->save();

        return redirect('/pengajuan')->with('success', 'Pengajuan berhasil dibuat');
    }

    public function edit($id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('pengajuan.edit', compact('pengajuan'));
    }

    public function update(Request $request, $id)
    {
        $pengajuan = Pengajuan::find($id);
        $pengajuan->tanggal_awal = $request->tanggal_awal;
        $pengajuan->tanggal_akhir = $request->tanggal_akhir;
        $pengajuan->jumlah = $request->jumlah;
        $pengajuan->ket = $request->ket;
        $pengajuan->status = $request->status;
        $pengajuan->nip = $request->nip;
        $pengajuan->save();

        return redirect('/pengajuan')->with('success', 'Pengajuan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pengajuan = Pengajuan::find($id);
        $pengajuan->delete();

        return redirect('/pengajuan')->with('success', 'Pengajuan berhasil dihapus');
    }

    public function terima($id)
    {
        $pengajuan = Pengajuan::find($id);
        $pengajuan->status = 'terima';
        $pengajuan->save();

        return redirect('/pengajuan')->with('success', 'Pengajuan diterima');
    }

    public function tolak($id)
    {
        $pengajuan = Pengajuan::find($id);
        $pengajuan->status = 'tolak';
        $pengajuan->save();

        return redirect('/pengajuan')->with('success', 'Pengajuan ditolak');
    }
}