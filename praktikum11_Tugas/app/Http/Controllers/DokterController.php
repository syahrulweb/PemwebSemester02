<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data pasien
        $list_dokter = Dokter::all();
        return view('dokter.index', compact('list_dokter'));
    }
}