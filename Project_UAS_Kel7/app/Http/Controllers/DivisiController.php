<?php

// app/Http/Controllers/DivisiController.php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $list_divisi = Divisi::all();
        return view('divisi.index', compact('list_divisi'));
    }

    public function create()
    {
        return view('divisi.create');
    }

    public function store(Request $request)
    {
        $divisi = new Divisi;
        $divisi->kode = $request->kode;
        $divisi->nama = $request->nama;
        $divisi->jabatan = $request->jabatan;
        $divisi->save();

        return redirect('/divisi');
    }

    public function show($id)
{
    $divisi = Divisi::find($id);
    return view('divisi.show', compact('divisi'));
}

    public function edit($id)
    {
        $divisi = Divisi::find($id);
        return view('divisi.edit', compact('divisi'));
    }

    public function update(Request $request, $id)
    {
        $divisi = Divisi::find($id);
        $divisi->kode = $request->kode;
        $divisi->nama = $request->nama;
        $divisi->jabatan = $request->jabatan;
        $divisi->save();

        return redirect('/divisi');
    }

    public function destroy($id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();

        return redirect('/divisi');
    }
}
