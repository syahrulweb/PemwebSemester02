<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $list_pegawai = Pegawai::all();
        return view('pegawais.index', compact('list_pegawai'));
    }

    public function create()
    {
        return view('pegawais.create');
    }

    public function store(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->gender = $request->gender;
        $pegawai->tmp_lahir = $request->tmp_lahir;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->telpon = $request->telpon;
        $pegawai->alamat = $request->alamat;
        $pegawai->divisi_id = $request->divisi_id;
        $pegawai->save();

        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawais.show', compact('pegawai'));
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawais.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->gender = $request->gender;
        $pegawai->tmp_lahir = $request->tmp_lahir;
        $pegawai->tgl_lahir = $request->tgl_lahir;
        $pegawai->telpon = $request->telpon;
        $pegawai->alamat = $request->alamat;
        $pegawai->divisi_id = $request->divisi_id;
        $pegawai->save();

        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect()->route('pegawais.index')->with('success', 'Pegawai berhasil dihapus');
    }
}