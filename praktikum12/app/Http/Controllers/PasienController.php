<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data pasien
        $list_pasien = Pasien::all();
        return view('pasien.index', compact('list_pasien'));
    }
    public function create()
    {
        // Return the view for creating a new pasien
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
        ]);

        // Create a new Pasien instance with the validated data
        Pasien::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('pasiens.index')->with('success', 'Pasien created successfully.');
    }
    public function show(Pasien $pasien)
    {
        // Pass the Pasien instance to the view
        return view('pasien.show', compact('pasien'));
    }

    public function edit(Pasien $pasien)
    {
        // Pass the Pasien instance to the view
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {

        // Update the Pasien instance
        $pasien->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('pasiens.index')->with('success', 'Pasien updated successfully');
    }
    public function destroy(Pasien $pasien)
    {
        // Delete the Pasien instance
        $pasien->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('pasiens.index')->with('success', 'Pasien deleted successfully');
    }
}