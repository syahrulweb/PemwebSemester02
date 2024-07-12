<?php


namespace App\Http\Controllers;

use App\Models\Jatah;
use Illuminate\Http\Request;

class JatahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_jatah = Jatah::all();
        return view('jatah.index', compact('list_jatah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jatah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'jumlah' => 'required|integer',
            'nip' => 'required|string',
        ]);

        Jatah::create($request->all());

        return redirect()->route('jatahs.index')->with('success', 'Jatah created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jatah $jatah)
    {
        return view('jatah.show', compact('jatah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jatah $jatah)
    {
        return view('jatah.edit', compact('jatah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jatah $jatah)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'jumlah' => 'required|integer',
            'nip' => 'required|string',
        ]);

        $jatah->update($request->all());

        return redirect()->route('jatahs.index')->with('success', 'Jatah updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jatah $jatah)
    {
        $jatah->delete();

        return redirect()->route('jatahs.index')->with('success', 'Jatah deleted successfully.');
    }
}
